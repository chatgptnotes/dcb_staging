<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Mail\OtpMail;
use App\Models\User;
use App\Models\WPUsers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

/**
 * Registration-OTP and login-2FA flows (otp_enabled=true). Runs on the real
 * local DB with throwaway data, cleaned up. Mail is faked.
 */
class OtpFlowTest extends TestCase
{
    private const EMAIL = 'otp-flow@example.local';
    private const USERNAME = 'otp_flow_user';

    protected function setUp(): void
    {
        parent::setUp();
        Mail::fake();
        config()->set('app.auth_driver', 'native');
        config()->set('app.otp_enabled', true);
        config()->set('packages.funnel', 'free_first');
        config()->set('packages.plans', []);
        $this->cleanup();
    }

    protected function tearDown(): void
    {
        $this->cleanup();
        parent::tearDown();
    }

    private function cleanup(): void
    {
        $ids = User::where('email', self::EMAIL)->pluck('wp_user_id')->all();
        User::where('email', self::EMAIL)->orWhere('username', self::USERNAME)->delete();
        if ($ids) {
            WPUsers::whereIn('user_id', $ids)->delete();
        }
        DB::table('email_otps')->where('email', self::EMAIL)->delete();
    }

    /** Force the stored OTP to a known code so we can submit it. */
    private function forceCode(string $purpose, string $code): void
    {
        DB::table('email_otps')->where('email', self::EMAIL)->where('purpose', $purpose)->update([
            'code_hash' => Hash::make($code),
            'attempts' => 0,
            'expires_at' => Carbon::now()->addMinutes(10),
        ]);
    }

    public function test_registration_requires_otp_then_creates_account(): void
    {
        // Step 1: submit signup → no account yet, OTP emailed, redirect to verify.
        $this->post('/sign-up', [
            'first_name' => 'Otp', 'last_name' => 'Flow', 'user_name' => self::USERNAME,
            'dob' => '1990-01-01', 'email' => self::EMAIL,
            'password' => 'Secret#2026', 'password_confirmation' => 'Secret#2026',
        ])->assertRedirect('verify-email-otp');

        $this->assertNull(User::where('email', self::EMAIL)->first(), 'account must NOT exist before OTP');
        Mail::assertSent(OtpMail::class);

        // Step 2: submit the (forced-known) code → account created + logged in.
        $this->forceCode('register', '654321');
        $this->post('/verify-email-otp', ['otp' => '654321'])->assertRedirect('intro');

        $user = User::where('email', self::EMAIL)->first();
        $this->assertNotNull($user);
        $this->assertGreaterThanOrEqual(1000000, (int) $user->wp_user_id);
        $this->assertSame((int) $user->wp_user_id, (int) session('user_id'));
    }

    public function test_registration_wrong_otp_does_not_create_account(): void
    {
        $this->post('/sign-up', [
            'first_name' => 'Otp', 'last_name' => 'Flow', 'user_name' => self::USERNAME,
            'dob' => '1990-01-01', 'email' => self::EMAIL,
            'password' => 'Secret#2026', 'password_confirmation' => 'Secret#2026',
        ]);
        $this->forceCode('register', '654321');

        $this->post('/verify-email-otp', ['otp' => '000000'])->assertSessionHas('fail');
        $this->assertNull(User::where('email', self::EMAIL)->first());
    }

    public function test_pending_signup_is_not_trapped_when_otp_is_disabled(): void
    {
        config()->set('app.otp_enabled', false);

        $this->withSession(['pending_signup' => [
            'username' => self::USERNAME,
            'email' => self::EMAIL,
            'display_name' => 'Otp Flow',
            'date_of_birth' => '1990-01-01',
            'billing_phone' => '+44 7700 000000',
            'password_hash' => Hash::make('Secret#2026'),
        ]])->post('/verify-email-otp')
            ->assertRedirect('intro');

        $this->assertNotNull(User::where('email', self::EMAIL)->first());
    }

    public function test_verified_purchase_signup_reaches_code_or_payment_choice(): void
    {
        $this->post('/sign-up', [
            'first_name' => 'Otp', 'last_name' => 'Flow', 'user_name' => self::USERNAME,
            'dob' => '1990-01-01', 'email' => self::EMAIL,
            'password' => 'Secret#2026', 'password_confirmation' => 'Secret#2026',
            'intended_package' => 'decodemybrain-deep-dive',
            'purchase_flow' => '1',
        ])->assertRedirect('verify-email-otp');

        $this->forceCode('register', '654321');
        $this->post('/verify-email-otp', ['otp' => '654321'])
            ->assertRedirect(route('access.choice'));

        $this->get('/start/access')->assertOk()->assertSee('code');
    }

    public function test_login_requires_2fa_code(): void
    {
        // existing native user
        $user = new User();
        $user->wp_user_id = 990333;
        $user->username = self::USERNAME;
        $user->email = self::EMAIL;
        $user->display_name = 'Otp Flow';
        $user->date_of_birth = '1990-01-01';
        $user->password = Hash::make('Secret#2026');
        $user->user_role = '2';
        $user->status = 'active';
        $user->save();

        // Step 1: correct password → not logged in yet, OTP emailed, redirect.
        $this->post('/sign-in', ['user_name' => self::USERNAME, 'password' => 'Secret#2026'])
            ->assertRedirect('verify-login-otp');
        $this->assertNull(session('user_id'), 'must not be logged in before 2FA');
        Mail::assertSent(OtpMail::class);

        // Step 2: the code → logged in.
        $this->forceCode('login', '112233');
        $this->post('/verify-login-otp', ['otp' => '112233'])->assertRedirect('intro');
        $this->assertSame(990333, (int) session('user_id'));

        WPUsers::where('user_id', 990333)->delete();
    }

    public function test_login_wrong_password_never_sends_otp(): void
    {
        $user = new User();
        $user->wp_user_id = 990334;
        $user->username = self::USERNAME;
        $user->email = self::EMAIL;
        $user->display_name = 'Otp Flow';
        $user->date_of_birth = '1990-01-01';
        $user->password = Hash::make('Secret#2026');
        $user->user_role = '2';
        $user->status = 'active';
        $user->save();

        $this->post('/sign-in', ['user_name' => self::USERNAME, 'password' => 'WrongPass'])
            ->assertSessionHas('fail');
        Mail::assertNothingSent();
    }
}
