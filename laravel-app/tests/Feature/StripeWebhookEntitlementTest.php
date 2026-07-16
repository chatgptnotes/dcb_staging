<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Http\Controllers\StripeWebhookController;
use App\Models\PricingPackage;
use App\Models\User;
use App\Models\WPUsers;
use App\Services\Billing\EntitlementService;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Exercises the webhook → entitlement path against the local DB using a
 * throwaway WP id. Does NOT use RefreshDatabase (tests run on the real local
 * decodemy_app schema); every row created is removed in tearDown.
 */
class StripeWebhookEntitlementTest extends TestCase
{
    private const WP_ID = 990777;
    private const WP_ID_NO_MIRROR = 990778;

    protected function setUp(): void
    {
        parent::setUp();

        DB::beginTransaction();

        config()->set('packages.free_slug', 'free');
        config()->set('packages.plans', [
            'decodemybrain-deep-dive' => ['type' => 'subscription', 'stripe_price_id' => 'price_dd'],
            'decodemybrain-guided-friend-and-family-connect' => ['type' => 'subscription', 'stripe_price_id' => 'price_ff'],
        ]);

        $this->cleanup();
        PricingPackage::query()->delete();
        PricingPackage::create([
            'slug' => 'decodemybrain-deep-dive',
            'title' => 'Deep Dive',
            'amount' => 234,
            'currency' => 'usd',
            'price_label' => '$234',
            'type' => 'subscription',
            'billing_interval' => 'month',
            'stripe_price_id' => 'price_dd',
            'button_text' => 'Book Today',
            'is_visible' => 1,
            'sort_order' => 1,
        ]);
        PricingPackage::create([
            'slug' => 'decodemybrain-guided-friend-and-family-connect',
            'title' => 'Guided F&F',
            'amount' => 499,
            'currency' => 'usd',
            'price_label' => '$499',
            'type' => 'subscription',
            'billing_interval' => 'month',
            'stripe_price_id' => 'price_ff',
            'button_text' => 'Book Today',
            'is_visible' => 1,
            'sort_order' => 2,
        ]);

        $mirror = new WPUsers();
        $mirror->user_id = self::WP_ID;
        $mirror->email = 'wh-test@example.local';
        $mirror->display_name = 'WH Test';
        $mirror->package = 'free';
        $mirror->save();

        $user = new User();
        $user->wp_user_id = self::WP_ID;
        $user->email = 'wh-test@example.local';
        $user->password = 'x';
        $user->user_role = '2';
        $user->status = 'active';
        $user->save();
    }

    protected function tearDown(): void
    {
        $this->cleanup();
        DB::rollBack();
        parent::tearDown();
    }

    private function cleanup(): void
    {
        WPUsers::whereIn('user_id', [self::WP_ID, self::WP_ID_NO_MIRROR])->delete();
        User::whereIn('wp_user_id', [self::WP_ID, self::WP_ID_NO_MIRROR])->delete();
    }

    private function controller(): StripeWebhookController
    {
        return app(StripeWebhookController::class);
    }

    public function test_checkout_session_completed_grants_package_via_metadata(): void
    {
        $this->controller()->handleCheckoutSessionCompleted(['data' => ['object' => [
            'payment_status' => 'paid',
            'metadata' => ['wp_user_id' => (string) self::WP_ID, 'package' => 'decodemybrain-deep-dive'],
        ]]]);

        $this->assertSame('decodemybrain-deep-dive', WPUsers::where('user_id', self::WP_ID)->value('package'));
        $this->assertSame('decodemybrain-deep-dive', User::where('wp_user_id', self::WP_ID)->value('package'));
    }

    public function test_unpaid_checkout_session_does_not_grant(): void
    {
        $this->controller()->handleCheckoutSessionCompleted(['data' => ['object' => [
            'payment_status' => 'unpaid',
            'metadata' => ['wp_user_id' => (string) self::WP_ID, 'package' => 'decodemybrain-deep-dive'],
        ]]]);

        $this->assertSame('free', WPUsers::where('user_id', self::WP_ID)->value('package'));
    }

    public function test_subscription_active_grants_via_price_id_when_no_metadata_package(): void
    {
        $this->controller()->handleCustomerSubscriptionUpdated(['data' => ['object' => [
            'status' => 'active',
            'customer' => 'cus_test',
            'metadata' => ['wp_user_id' => (string) self::WP_ID],
            'items' => ['data' => [['price' => ['id' => 'price_ff']]]],
        ]]]);

        $this->assertSame('decodemybrain-guided-friend-and-family-connect', WPUsers::where('user_id', self::WP_ID)->value('package'));
    }

    public function test_subscription_deleted_downgrades_to_free(): void
    {
        // First grant something, then delete.
        app(EntitlementService::class)->setPackage(self::WP_ID, 'decodemybrain-deep-dive');
        $this->assertSame('decodemybrain-deep-dive', WPUsers::where('user_id', self::WP_ID)->value('package'));

        $this->controller()->handleCustomerSubscriptionDeleted(['data' => ['object' => [
            'customer' => 'cus_test',
            'metadata' => ['wp_user_id' => (string) self::WP_ID],
        ]]]);

        $this->assertSame('free', WPUsers::where('user_id', self::WP_ID)->value('package'));
    }

    public function test_past_due_keeps_access_during_dunning(): void
    {
        // A failed renewal retry (past_due) must NOT strip a paying customer;
        // Stripe keeps retrying. Entitlement is revoked only on terminal states.
        app(EntitlementService::class)->setPackage(self::WP_ID, 'decodemybrain-deep-dive');

        $this->controller()->handleCustomerSubscriptionUpdated(['data' => ['object' => [
            'status' => 'past_due',
            'customer' => 'cus_test',
            'metadata' => ['wp_user_id' => (string) self::WP_ID],
        ]]]);

        $this->assertSame('decodemybrain-deep-dive', WPUsers::where('user_id', self::WP_ID)->value('package'));
    }

    public function test_canceled_subscription_revokes(): void
    {
        app(EntitlementService::class)->setPackage(self::WP_ID, 'decodemybrain-deep-dive');

        $this->controller()->handleCustomerSubscriptionUpdated(['data' => ['object' => [
            'status' => 'canceled',
            'customer' => 'cus_test',
            'metadata' => ['wp_user_id' => (string) self::WP_ID],
        ]]]);

        $this->assertSame('free', WPUsers::where('user_id', self::WP_ID)->value('package'));
    }

    public function test_unpaid_checkout_with_complete_status_does_not_grant(): void
    {
        // 'complete' but not 'paid' (async pending) must not grant.
        $this->controller()->handleCheckoutSessionCompleted(['data' => ['object' => [
            'status' => 'complete',
            'payment_status' => 'unpaid',
            'metadata' => ['wp_user_id' => (string) self::WP_ID, 'package' => 'decodemybrain-deep-dive'],
        ]]]);

        $this->assertSame('free', WPUsers::where('user_id', self::WP_ID)->value('package'));
    }

    public function test_entitlement_service_creates_mirror_when_missing(): void
    {
        $this->assertNull(WPUsers::where('user_id', self::WP_ID_NO_MIRROR)->first());

        app(EntitlementService::class)->setPackage(self::WP_ID_NO_MIRROR, 'decodemybrain-deep-dive');

        $this->assertSame('decodemybrain-deep-dive', WPUsers::where('user_id', self::WP_ID_NO_MIRROR)->value('package'));
    }

    public function test_unknown_user_is_ignored_safely(): void
    {
        // No metadata wp_user_id, unknown customer → no exception, no change.
        $this->controller()->handleCheckoutSessionCompleted(['data' => ['object' => [
            'payment_status' => 'paid',
            'customer' => 'cus_does_not_exist',
            'metadata' => ['package' => 'decodemybrain-deep-dive'],
        ]]]);

        $this->assertTrue(true); // reached without throwing
    }
}
