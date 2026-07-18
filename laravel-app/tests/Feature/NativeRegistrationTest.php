<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use App\Models\WPUsers;
use App\Models\PricingPackage;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

/**
 * Native registration against the real local DB (no RefreshDatabase).
 * Every account created here uses a unique throwaway email/username and is
 * removed in tearDown via the high-offset wp_user_id range it lands in.
 */
class NativeRegistrationTest extends TestCase
{
    private const EMAIL = 'native-signup-test@example.local';
    private const USERNAME = 'native_signup_test';

    protected function setUp(): void
    {
        parent::setUp();
        config()->set('app.auth_driver', 'native');
        config()->set('packages.free_slug', 'free');
        // These tests cover the free-first, direct (non-OTP) signup → intro.
        config()->set('packages.funnel', 'free_first');
        config()->set('app.otp_enabled', false);
        $this->cleanup();
    }

    protected function tearDown(): void
    {
        $this->cleanup();
        parent::tearDown();
    }

    private function cleanup(): void
    {
        $ids = User::where('email', self::EMAIL)->orWhere('username', self::USERNAME)->pluck('wp_user_id')->all();
        User::where('email', self::EMAIL)->orWhere('username', self::USERNAME)->delete();
        if (!empty($ids)) {
            WPUsers::whereIn('user_id', $ids)->delete();
        }
        PricingPackage::where('slug', 'age-restricted-signup-test')->delete();
    }

    private function validPayload(array $overrides = []): array
    {
        return array_merge([
            'first_name' => 'Native',
            'last_name' => 'Tester',
            'user_name' => self::USERNAME,
            'dob' => '01/01/2000',
            'email' => self::EMAIL,
            'phone' => '+44 7700 000000',
            'password' => 'Secret#2026',
            'password_confirmation' => 'Secret#2026',
        ], $overrides);
    }

    public function test_signup_page_loads(): void
    {
        $this->get('/sign-up')->assertOk()->assertSee('DD/MM/YYYY');
    }

    public function test_login_page_sends_new_visitors_to_the_access_choice(): void
    {
        $this->get('/sign-in')
            ->assertOk()
            ->assertSee(route('access.choice'), false);
    }

    public function test_valid_registration_creates_account_and_logs_in(): void
    {
        $response = $this->post('/sign-up', $this->validPayload());

        $response->assertRedirect('intro');

        $user = User::where('email', self::EMAIL)->first();
        $this->assertNotNull($user);
        $this->assertGreaterThanOrEqual(1000000, (int) $user->wp_user_id);
        $this->assertTrue(Hash::check('Secret#2026', $user->password));
        $this->assertSame('Native Tester', $user->display_name);
        $this->assertSame('+44 7700 000000', $user->billing_phone);

        // wp_users mirror with the free package.
        $mirror = WPUsers::where('user_id', $user->wp_user_id)->first();
        $this->assertNotNull($mirror);
        $this->assertSame('free', $mirror->package);

        // Logged in: session carries the WP id.
        $this->assertSame((int) $user->wp_user_id, (int) session('user_id'));
    }

    public function test_pay_first_registration_with_selected_plan_redirects_to_checkout(): void
    {
        config()->set('packages.funnel', 'pay_first');
        config()->set('packages.driver', 'cashier');
        config()->set('packages.plans', [
            'decodemybrain-deep-dive' => [
                'type' => 'subscription',
                'stripe_price_id' => 'price_test_deep_dive',
            ],
        ]);

        $response = $this->post('/sign-up', $this->validPayload([
            'intended_package' => 'decodemybrain-deep-dive',
            'dob' => now()->subYears(13)->subDay()->format('d/m/Y'),
        ]));

        $response->assertRedirect(route('checkout.start', 'decodemybrain-deep-dive'));
    }

    public function test_new_public_purchase_registration_reaches_checkout(): void
    {
        $response = $this->post('/sign-up', $this->validPayload([
            'intended_package' => 'decodemybrain-deep-dive',
            'purchase_flow' => '1',
            'dob' => now()->subYears(13)->subDay()->format('d/m/Y'),
        ]));

        $response->assertRedirect(route('checkout.start', 'decodemybrain-deep-dive'));
    }

    public function test_age_ineligible_plan_selection_does_not_create_an_account(): void
    {
        PricingPackage::create([
            'slug' => 'age-restricted-signup-test',
            'title' => 'Ages 12 to 15',
            'amount' => 20,
            'currency' => 'usd',
            'price_label' => '$20',
            'button_text' => 'Choose now',
            'type' => 'one_time',
            'minimum_age' => 12,
            'maximum_age' => 15,
            'is_visible' => true,
            'sort_order' => 99,
        ]);

        $response = $this->post('/sign-up', $this->validPayload([
            'intended_package' => 'age-restricted-signup-test',
            'purchase_flow' => '1',
        ]));

        $response->assertSessionHasErrors([
            'dob' => 'This assessment is available only to ages 12–15.',
        ]);
        $this->assertNull(User::where('email', self::EMAIL)->first());
    }

    public function test_duplicate_email_is_rejected(): void
    {
        $this->post('/sign-up', $this->validPayload());
        $this->flushSession();

        $response = $this->post('/sign-up', $this->validPayload(['user_name' => 'different_name']));
        $response->assertSessionHasErrors('email');
        $this->assertSame(1, User::where('email', self::EMAIL)->count());
    }

    public function test_duplicate_username_is_rejected(): void
    {
        $this->post('/sign-up', $this->validPayload());
        $this->flushSession();

        $response = $this->post('/sign-up', $this->validPayload(['email' => 'other-'.self::EMAIL]));
        $response->assertSessionHasErrors('user_name');

        // cleanup the alternate email if it somehow got through
        User::where('email', 'other-'.self::EMAIL)->delete();
    }

    public function test_duplicate_username_reopens_the_public_purchase_registration_modal(): void
    {
        $this->post('/sign-up', $this->validPayload());
        $this->flushSession();

        $payload = $this->validPayload([
            'email' => 'other-'.self::EMAIL,
            'intended_package' => 'decodemybrain-deep-dive',
            'purchase_flow' => '1',
            'registration_form' => '1',
            'dob' => now()->subYears(13)->subDay()->format('d/m/Y'),
        ]);

        $response = $this->from(route('public.plans'))->post('/sign-up', $payload);

        $response->assertRedirect(route('public.plans'));
        $response->assertSessionHasErrors('user_name');

        $this->get(route('public.plans'))
            ->assertOk()
            ->assertSee('modal open', false)
            ->assertSee('That username is already taken.')
            ->assertSee('value="Native"', false)
            ->assertSee('value="native_signup_test"', false)
            ->assertSee('value="other-native-signup-test@example.local"', false)
            ->assertDontSee('<main class="page"><div class="alert">That username is already taken.', false);
    }

    public function test_underage_is_rejected(): void
    {
        $response = $this->post('/sign-up', $this->validPayload(['dob' => '01/01/2020']));
        $response->assertSessionHas('fail');
        $this->assertNull(User::where('email', self::EMAIL)->first());
    }

    public function test_future_dob_is_rejected(): void
    {
        // Carbon->age is absolute, so a future DOB could read as a valid age —
        // the before:today rule must block it.
        $response = $this->post('/sign-up', $this->validPayload(['dob' => '01/01/2050']));
        $response->assertSessionHasErrors('dob');
        $this->assertNull(User::where('email', self::EMAIL)->first());
    }

    public function test_iso_date_of_birth_format_is_rejected(): void
    {
        $response = $this->post('/sign-up', $this->validPayload(['dob' => '2000-01-01']));

        $response->assertSessionHasErrors('dob');
        $this->assertNull(User::where('email', self::EMAIL)->first());
    }

    public function test_password_mismatch_is_rejected(): void
    {
        $response = $this->post('/sign-up', $this->validPayload(['password_confirmation' => 'Different#2026']));
        $response->assertSessionHasErrors('password');
        $this->assertNull(User::where('email', self::EMAIL)->first());
    }

    public function test_new_user_can_log_in_natively_after_signup(): void
    {
        $this->post('/sign-up', $this->validPayload());
        $this->flushSession();

        $login = $this->post('/sign-in', [
            'user_name' => self::USERNAME,
            'password' => 'Secret#2026',
        ]);

        // Lands on intro (no brain profile yet) — i.e. authenticated.
        $login->assertRedirect('intro');
        $user = User::where('email', self::EMAIL)->first();
        $this->assertSame((int) $user->wp_user_id, (int) session('user_id'));
    }

    public function test_login_with_selected_plan_redirects_to_checkout(): void
    {
        config()->set('packages.funnel', 'pay_first');
        config()->set('packages.driver', 'cashier');
        config()->set('packages.plans', [
            'decodemybrain-deep-dive' => [
                'type' => 'subscription',
                'stripe_price_id' => 'price_test_deep_dive',
            ],
        ]);

        $this->post('/sign-up', $this->validPayload());
        $this->flushSession();

        $login = $this->post('/sign-in', [
            'user_name' => self::USERNAME,
            'password' => 'Secret#2026',
            'intended_package' => 'decodemybrain-deep-dive',
        ]);

        $login->assertRedirect(route('checkout.start', 'decodemybrain-deep-dive'));
    }
}
