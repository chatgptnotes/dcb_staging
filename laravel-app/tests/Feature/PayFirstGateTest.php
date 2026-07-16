<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\WPUsers;
use Tests\TestCase;

/**
 * Pay-first funnel gate (RequirePaidPackage). Runs against the real local DB;
 * uses a throwaway high wp id and cleans up.
 */
class PayFirstGateTest extends TestCase
{
    private const WP_ID = 990555;

    protected function setUp(): void
    {
        parent::setUp();
        config()->set('packages.plans', [
            'decodemybrain-deep-dive' => ['type' => 'subscription', 'stripe_price_id' => 'price_dd'],
            'decodemybrain-guided-friend-and-family-connect' => ['type' => 'subscription', 'stripe_price_id' => 'price_ff'],
        ]);
        $this->cleanup();
    }

    protected function tearDown(): void
    {
        $this->cleanup();
        parent::tearDown();
    }

    private function cleanup(): void
    {
        WPUsers::where('user_id', self::WP_ID)->delete();
    }

    private function mirror(string $package): void
    {
        $this->cleanup();
        $m = new WPUsers();
        $m->user_id = self::WP_ID;
        $m->email = 'payfirst@example.local';
        $m->display_name = 'PayFirst';
        $m->package = $package;
        $m->brain_profile_id = 1;
        $m->save();
    }

    public function test_free_first_lets_free_user_into_intro(): void
    {
        config()->set('packages.funnel', 'free_first');
        $this->mirror('free');

        $this->withSession(['user_id' => self::WP_ID])
            ->get('/intro')
            ->assertOk();
    }

    public function test_pay_first_redirects_free_user_to_landing(): void
    {
        config()->set('packages.funnel', 'pay_first');
        $this->mirror('free');

        $this->withSession(['user_id' => self::WP_ID])
            ->get('/intro')
            ->assertRedirect('/');
    }

    public function test_pay_first_redirects_guest_to_sign_in(): void
    {
        config()->set('packages.funnel', 'pay_first');

        $this->get('/intro')->assertRedirect('sign-in');
    }

    public function test_pay_first_lets_paid_user_into_intro(): void
    {
        config()->set('packages.funnel', 'pay_first');
        $this->mirror('decodemybrain-deep-dive');

        $this->withSession(['user_id' => self::WP_ID])
            ->get('/intro')
            ->assertOk();
    }

    public function test_guest_checkout_preserves_package_and_redirects_to_signup(): void
    {
        config()->set('packages.driver', 'cashier');
        config()->set('packages.funnel', 'pay_first');

        $this->get('/checkout/decodemybrain-deep-dive')
            ->assertRedirect('sign-up')
            ->assertSessionHas('intended_package', 'decodemybrain-deep-dive');
    }
}
