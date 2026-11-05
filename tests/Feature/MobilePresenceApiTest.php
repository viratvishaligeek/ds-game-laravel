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
    public function test_stale_foreground_lease_is_expired_by_the_scheduler_in_application_timezone(): void
    {
        $user = User::factory()->create(['status' => 'active']);
        $user->forceFill(['live_status' => 'active'])->save();

        $session = UserPresenceSession::query()->create([
            'user_id' => $user->id,
            'session_id' => 'stale-foreground-session',
            'platform' => 'android',
            'app_state' => 'foreground',
            'last_seen_at' => now()->subMinutes(10),
        ]);
        UserPresenceSession::query()->whereKey($session->id)
            ->update(['updated_at' => now()->subMinutes(2)]);

        $this->artisan('presence:expire')->assertExitCode(0);

        $this->assertSame('inactive', $user->fresh()->live_status);
    }

    public function test_repeated_background_heartbeat_does_not_extend_grace_period(): void
    {
        $user = User::factory()->create(['status' => 'active']);
        $payload = [
            'session_id' => 'background-grace-session',
            'platform' => 'android',
            'app_state' => 'foreground',
            'activity' => true,
            'activity_at' => now()->toIso8601String(),
        ];

        $this->actingAs($user, 'sanctum')
            ->postJson('/api/v1/presence/heartbeat', $payload)
            ->assertOk()
            ->assertJsonPath('live_status', 'active');

        $payload['app_state'] = 'background';
        $payload['activity'] = false;
        $payload['activity_at'] = null;
        $this->actingAs($user, 'sanctum')
            ->postJson('/api/v1/presence/heartbeat', $payload)
            ->assertOk();

        $this->travel(2)->minutes();
        $this->actingAs($user, 'sanctum')
            ->postJson('/api/v1/presence/heartbeat', $payload)
            ->assertOk()
            ->assertJsonPath('live_status', 'inactive');

        $this->assertSame('inactive', $user->fresh()->live_status);
    }

}
