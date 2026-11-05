<?php

namespace Tests\Feature;

use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\WalletRequestController;
use App\Models\Admin;
use App\Models\User;
use App\Models\WalletRequest;
use App\Services\ReferralService;
use App\Services\WalletService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery;
use Tests\TestCase;

class AdminTableActionsTest extends TestCase
{
    use RefreshDatabase;

    protected function tearDown(): void
    {
        Auth::forgetGuards();
        parent::tearDown();
    }

    public function test_user_status_action_returns_json_and_persists_the_new_status(): void
    {
        $user = User::factory()->create(['status' => 'active']);
        $request = Request::create('/admin/users/' . $user->id . '/toggle-status', 'PATCH');
        $request->headers->set('Accept', 'application/json');

        $response = (new UserController())->toggleStatus($request, (string) $user->id);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertTrue($response->getData(true)['success']);
        $this->assertSame('inactive', $response->getData(true)['data']['status']);
        $this->assertSame('inactive', $user->fresh()->status);
    }

    public function test_wallet_approval_records_the_admin_not_a_user_as_processor(): void
    {
        $admin = Admin::query()->create([
            'name' => 'Wallet Approver',
            'email' => 'wallet-approver@example.test',
            'password' => 'test-password',
            'status' => 'active',
        ]);
        Auth::guard('admin')->setUser($admin);

        $user = User::factory()->create(['status' => 'active', 'balance' => 0]);
        $walletRequest = WalletRequest::query()->create([
            'user_id' => $user->id,
            'request_type' => 'credit',
            'payment_method' => 'manual_upi',
            'amount' => 100,
            'status' => 'pending',
        ]);

        $walletService = Mockery::mock(WalletService::class);
        $walletService->shouldReceive('credit')->once();
        $referralService = Mockery::mock(ReferralService::class);
        $referralService->shouldReceive('recordSuccessfulDeposit')->once();

        $request = Request::create('/admin/wallet/requests/' . $walletRequest->id . '/approve', 'POST');
        $request->headers->set('Accept', 'application/json');

        $response = (new WalletRequestController($walletService, $referralService))
            ->approve($request, $walletRequest);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertTrue($response->getData(true)['success']);
        $this->assertDatabaseHas('wallet_requests', [
            'id' => $walletRequest->id,
            'status' => 'approved',
            'processed_by' => null,
            'processed_by_admin_id' => $admin->id,
        ]);
        $this->assertTrue($walletRequest->fresh()->adminProcessor->is($admin));
    }
}
