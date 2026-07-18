<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use App\Models\WPUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class NativeLoginCompatibilityTest extends TestCase
{
    private const EMAIL = 'legacy-login-test@example.local';
    private const LEGACY_EMAIL = 'legacy-mirror-test@example.local';
    private const WP_ID = 9203902;
    private const MIRROR_WP_ID = 9203903;

    protected function setUp(): void
    {
        parent::setUp();
        config()->set('app.auth_driver', 'native');
        config()->set('app.otp_enabled', false);
        config()->set('packages.funnel', 'free_first');
        Mail::fake();
        $this->cleanup();
    }

    protected function tearDown(): void
    {
        $this->cleanup();
        parent::tearDown();
    }

    public function test_verified_user_without_a_legacy_identity_is_repaired_on_login(): void
    {
        $user = new User();
        $user->username = 'legacy_missing_identity';
        $user->email = self::EMAIL;
        $user->display_name = 'Legacy Login';
        $user->date_of_birth = '1990-01-01';
        $user->password = '$P$BdEbEvoPab9mowPZ7Il8na7LLTaCPY1';
        $user->user_role = '2';
        $user->status = 'active';
        $user->save();

        $this->post('/sign-in', ['user_name' => self::EMAIL, 'password' => 'correct horse battery staple'])
            ->assertRedirect('intro');

        $user->refresh();
        $this->assertNotNull($user->wp_user_id);
        $this->assertTrue(WPUsers::where('user_id', $user->wp_user_id)->exists());
        $this->assertTrue(Hash::check('correct horse battery staple', $user->password));
    }

    public function test_mirror_only_account_cannot_crash_native_sign_in(): void
    {
        $mirror = new WPUsers();
        $mirror->user_id = self::MIRROR_WP_ID;
        $mirror->email = self::LEGACY_EMAIL;
        $mirror->display_name = 'Mirror Only';
        $mirror->date_of_birth = '1990-01-01';
        $mirror->package = 'free';
        $mirror->save();

        $this->post('/sign-in', ['user_name' => self::LEGACY_EMAIL, 'password' => 'Secret#2026'])
            ->assertStatus(302)
            ->assertSessionHas('fail');

        $this->assertFalse(User::where('wp_user_id', self::MIRROR_WP_ID)->exists());
    }

    public function test_mirror_only_account_is_activated_after_email_reset(): void
    {
        $mirror = new WPUsers();
        $mirror->user_id = self::MIRROR_WP_ID;
        $mirror->email = self::LEGACY_EMAIL;
        $mirror->display_name = 'Mirror Only';
        $mirror->date_of_birth = '1990-01-01';
        $mirror->package = 'decodemybrain-deep-dive';
        $mirror->save();

        $this->post('/forgot-password', ['identifier' => self::LEGACY_EMAIL])
            ->assertRedirect('verify-otp');

        DB::table('email_otps')->where('email', self::LEGACY_EMAIL)->where('purpose', 'reset')->update([
            'code_hash' => Hash::make('654321'),
            'attempts' => 0,
            'expires_at' => now()->addMinutes(10),
        ]);

        $this->post('/verify-otp', [
            'otp' => '654321',
            'password' => 'NewSecret#2026',
            'password_confirmation' => 'NewSecret#2026',
        ])->assertRedirect('sign-in');

        $user = User::where('wp_user_id', self::MIRROR_WP_ID)->first();
        $this->assertNotNull($user);
        $this->assertSame(self::LEGACY_EMAIL, $user->email);
        $this->assertSame('Mirror Only', $user->display_name);
        $this->assertTrue(Hash::check('NewSecret#2026', $user->password));
        $this->assertSame('decodemybrain-deep-dive', WPUsers::where('user_id', self::MIRROR_WP_ID)->value('package'));

        // A later reset must update the same native record, not create a
        // second account for the mirror identity.
        $this->post('/forgot-password', ['identifier' => self::LEGACY_EMAIL])
            ->assertRedirect('verify-otp');
        DB::table('email_otps')->where('email', self::LEGACY_EMAIL)->where('purpose', 'reset')->update([
            'code_hash' => Hash::make('654322'),
            'attempts' => 0,
            'expires_at' => now()->addMinutes(10),
        ]);
        $this->post('/verify-otp', [
            'otp' => '654322',
            'password' => 'SecondSecret#2026',
            'password_confirmation' => 'SecondSecret#2026',
        ])->assertRedirect('sign-in');

        $user->refresh();
        $this->assertTrue(Hash::check('SecondSecret#2026', $user->password));

        $this->post('/sign-in', ['user_name' => self::LEGACY_EMAIL, 'password' => 'SecondSecret#2026'])
            ->assertRedirect('intro');

        $this->assertSame(1, User::where('wp_user_id', self::MIRROR_WP_ID)->count());
    }

    private function cleanup(): void
    {
        $userIds = User::whereIn('email', [self::EMAIL, self::LEGACY_EMAIL])->pluck('wp_user_id')->filter()->all();
        User::whereIn('email', [self::EMAIL, self::LEGACY_EMAIL])->delete();
        WPUsers::whereIn('user_id', array_unique([...$userIds, self::WP_ID, self::MIRROR_WP_ID]))->delete();
        DB::table('email_otps')->where('email', self::LEGACY_EMAIL)->delete();
    }
}
