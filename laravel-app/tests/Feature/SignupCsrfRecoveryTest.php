<?php

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use Tests\TestCase;

class SignupCsrfRecoveryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        // Laravel skips CSRF in tests by default; exercise the real token check.
        $this->app->bind(VerifyCsrfToken::class, fn ($app) => new class($app, $app['encrypter']) extends VerifyCsrfToken {
            protected function runningUnitTests() { return false; }
        });
        config(['app.otp_enabled' => true]);
    }

    public function test_stale_signup_token_returns_to_form_without_replaying_passwords(): void
    {
        $this->withSession(['_token' => 'fresh-token'])->post('/sign-up', [
            '_token' => 'stale-token', 'first_name' => 'Example', 'email' => 'example@example.test',
            'password' => 'never-flash-this', 'password_confirmation' => 'never-flash-this', 'otp' => '123456',
        ])->assertRedirect('/sign-up')->assertSessionHas('fail')
            ->assertSessionHas('_old_input.first_name', 'Example')
            ->assertSessionMissing('_old_input.password')->assertSessionMissing('_old_input.password_confirmation')
            ->assertSessionMissing('_old_input.otp')->assertSessionMissing('_old_input._token');
    }

    public function test_stale_otp_form_keeps_pending_signup_for_retry(): void
    {
        $this->withSession(['_token' => 'fresh-token', 'pending_signup' => ['email' => 'example@example.test']])
            ->post('/verify-email-otp', ['_token' => 'stale-token', 'otp' => '123456'])
            ->assertRedirect('/verify-email-otp')->assertSessionHas('pending_signup.email', 'example@example.test')
            ->assertSessionHas('fail')->assertSessionMissing('_old_input.otp');
    }

    public function test_lost_signup_session_returns_to_registration(): void
    {
        $this->post('/verify-email-otp', ['_token' => 'stale-token', 'otp' => '123456'])
            ->assertRedirect('/sign-up')->assertSessionHas('fail');
    }

    public function test_matching_token_reaches_otp_validation(): void
    {
        $this->withSession(['_token' => 'fresh-token', 'pending_signup' => ['email' => 'example@example.test']])
            ->from('/verify-email-otp')->post('/verify-email-otp', ['_token' => 'fresh-token'])
            ->assertSessionHasErrors('otp');
    }

    public function test_otp_form_is_not_cacheable_and_renders_current_session_token(): void
    {
        $response = $this->withSession(['_token' => 'current-form-token', 'pending_signup' => ['email' => 'example@example.test']])
            ->get('/verify-email-otp')->assertOk()->assertSee('current-form-token');
        $this->assertStringContainsString('no-store', $response->headers->get('Cache-Control'));
    }

    public function test_json_and_unrelated_posts_still_reject_bad_tokens(): void
    {
        $this->postJson('/verify-email-otp', ['_token' => 'bad'])->assertStatus(419);
        $this->post('/sign-in', ['_token' => 'bad'])->assertStatus(419);
    }
}
