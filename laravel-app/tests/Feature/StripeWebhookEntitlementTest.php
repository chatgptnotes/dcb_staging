<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripeWebhookController;
use App\Models\PricingPackage;
use App\Models\PaymentRecord;
use App\Models\User;
use App\Models\WPUsers;
use App\Services\Admin\AdminInsightsService;
use App\Services\Billing\EntitlementService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
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
        PaymentRecord::where('checkout_session_id', 'like', 'cs_webhook_test_%')->delete();
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

    public function test_paid_checkout_is_recorded_once_with_customer_and_package(): void
    {
        $session = [
            'id' => 'cs_webhook_test_001',
            'created' => now()->timestamp,
            'payment_status' => 'paid',
            'payment_intent' => 'pi_webhook_test_001',
            'customer' => 'cus_webhook_test_001',
            'amount_subtotal' => 4900,
            'amount_total' => 3900,
            'currency' => 'usd',
            'customer_details' => ['name' => 'Registered Customer', 'email' => 'wh-test@example.local'],
            'metadata' => ['wp_user_id' => (string) self::WP_ID, 'package' => 'decodemybrain-deep-dive'],
        ];

        $this->controller()->handleCheckoutSessionCompleted(['data' => ['object' => $session]]);
        $this->controller()->handleCheckoutSessionCompleted(['data' => ['object' => $session]]);

        $this->assertDatabaseHas('payment_records', [
            'checkout_session_id' => 'cs_webhook_test_001',
            'stripe_payment_intent_id' => 'pi_webhook_test_001',
            'stripe_customer_id' => 'cus_webhook_test_001',
            'wp_user_id' => self::WP_ID,
            'customer_name' => 'Registered Customer',
            'customer_email' => 'wh-test@example.local',
            'package_slug' => 'decodemybrain-deep-dive',
            'amount_total_minor' => 3900,
            'status' => 'paid',
        ]);
        $this->assertSame(1, PaymentRecord::where('checkout_session_id', 'cs_webhook_test_001')->count());
    }

    public function test_checkout_billing_name_does_not_replace_the_registered_profile_name(): void
    {
        User::where('wp_user_id', self::WP_ID)->update([
            'display_name' => 'Registered Profile Name',
        ]);

        $session = (object) [
            'customer_details' => (object) [
                'name' => 'Stripe Billing Name',
                'email' => 'wh-test@example.local',
            ],
            'customer' => 'cus_webhook_test_profile_name',
            'custom_fields' => [],
        ];

        $method = new \ReflectionMethod(CheckoutController::class, 'finalizeCheckoutUser');
        $method->setAccessible(true);
        $user = $method->invoke(app(CheckoutController::class), self::WP_ID, $session);

        $this->assertNotNull($user);
        $this->assertSame('Registered Profile Name', $user->display_name);
    }

    public function test_admin_payments_prefer_the_registered_customer_for_recorded_checkout(): void
    {
        Config::set('cashier.secret', '');
        PaymentRecord::create([
            'wp_user_id' => self::WP_ID,
            'checkout_session_id' => 'cs_webhook_test_admin',
            'stripe_payment_intent_id' => 'pi_webhook_test_admin',
            'customer_name' => 'Stripe Billing Name',
            'customer_email' => 'stripe-billing@example.local',
            'package_slug' => 'decodemybrain-guided-friend-and-family-connect',
            'amount_total_minor' => 49900,
            'currency' => 'usd',
            'status' => 'paid',
            'paid_at' => now(),
        ]);

        $payment = app(AdminInsightsService::class)->payments(now()->subDay(), now()->addDay())
            ->firstWhere('transaction_id', 'pi_webhook_test_admin');

        $this->assertNotNull($payment);
        $this->assertSame('WH Test', $payment->display_name);
        $this->assertSame('wh-test@example.local', $payment->email);
        $this->assertSame('Guided F&F', $payment->package);
        $this->assertSame('decodemybrain-guided-friend-and-family-connect', $payment->plan_slug);
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
