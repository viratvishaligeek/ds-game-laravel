<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\UserPresenceSession;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MobilePresenceApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_mobile_client_can_start_and_disconnect_a_presence_session(): void
    {
        $user = User::factory()->create(['status' => 'active']);

        $this->actingAs($user, 'sanctum')
            ->postJson('/api/v1/presence/heartbeat', [
                'session_id' => 'android-presence-test-session',
                'platform' => 'android',
                'app_state' => 'foreground',
                'activity' => true,
                'activity_at' => now()->toIso8601String(),
            ])
            ->assertOk()
            ->assertJsonPath('success', true)
            ->assertJsonPath('live_status', 'active');

        $session = UserPresenceSession::query()
            ->where('session_id', 'android-presence-test-session')
            ->firstOrFail();

        $this->assertSame($user->id, $session->user_id);
        $this->assertSame('foreground', $session->app_state);
        $this->assertNull($session->ended_at);

        $this->actingAs($user, 'sanctum')
            ->deleteJson('/api/v1/presence/session', [
                'session_id' => 'android-presence-test-session',
            ])
            ->assertOk()
            ->assertJsonPath('success', true);

        $this->assertNotNull($session->fresh()->ended_at);
    }
}
