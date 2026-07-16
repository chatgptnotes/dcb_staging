<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\PricingPackage;
use App\Services\Billing\PackageCatalog;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PackageCatalogTest extends TestCase
{
    private PackageCatalog $catalog;

    protected function setUp(): void
    {
        parent::setUp();

        DB::beginTransaction();

        config()->set('packages.driver', 'cashier');
        config()->set('packages.free_slug', 'free');
        config()->set('packages.plans', [
            'decodemybrain-deep-dive' => [
                'name' => 'Deep Dive',
                'type' => 'subscription',
                'stripe_price_id' => 'price_dd',
            ],
            'decodemybrain-guided-friend-and-family-connect' => [
                'name' => 'Guided F&F',
                'type' => 'one_time',
                'stripe_price_id' => 'price_ff',
            ],
        ]);

        PricingPackage::query()->delete();
        PricingPackage::create([
            'slug' => 'decodemybrain-deep-dive',
            'title' => 'Deep Dive DB',
            'amount' => 234,
            'currency' => 'usd',
            'price_label' => '$234',
            'type' => 'subscription',
            'billing_interval' => 'month',
            'stripe_price_id' => 'price_db_dd',
            'button_text' => 'Book Today',
            'is_visible' => 1,
            'sort_order' => 1,
        ]);
        PricingPackage::create([
            'slug' => 'decodemybrain-guided-friend-and-family-connect',
            'title' => 'Guided DB',
            'amount' => 499,
            'currency' => 'usd',
            'price_label' => '$499',
            'type' => 'one_time',
            'billing_interval' => null,
            'stripe_price_id' => 'price_db_ff',
            'button_text' => 'Book Today',
            'is_visible' => 1,
            'sort_order' => 2,
        ]);

        $this->catalog = new PackageCatalog();
    }

    protected function tearDown(): void
    {
        DB::rollBack();

        parent::tearDown();
    }

    public function test_driver_and_is_cashier(): void
    {
        $this->assertSame('cashier', $this->catalog->driver());
        $this->assertTrue($this->catalog->isCashier());
    }

    public function test_exists_includes_free_and_known_plans_only(): void
    {
        $this->assertTrue($this->catalog->exists('free'));
        $this->assertTrue($this->catalog->exists('decodemybrain-deep-dive'));
        $this->assertFalse($this->catalog->exists('bogus-package'));
    }

    public function test_is_subscription_reflects_type(): void
    {
        $this->assertTrue($this->catalog->isSubscription('decodemybrain-deep-dive'));
        $this->assertFalse($this->catalog->isSubscription('decodemybrain-guided-friend-and-family-connect'));
        $this->assertFalse($this->catalog->isSubscription('free'));
    }

    public function test_stripe_price_id_lookup(): void
    {
        $this->assertSame('price_db_dd', $this->catalog->stripePriceId('decodemybrain-deep-dive'));
        $this->assertNull($this->catalog->stripePriceId('free'));
        $this->assertNull($this->catalog->stripePriceId('bogus'));
    }

    public function test_slug_for_price_id_reverse_lookup(): void
    {
        $this->assertSame('decodemybrain-deep-dive', $this->catalog->slugForPriceId('price_db_dd'));
        $this->assertSame('decodemybrain-guided-friend-and-family-connect', $this->catalog->slugForPriceId('price_db_ff'));
        $this->assertNull($this->catalog->slugForPriceId('price_unknown'));
        $this->assertNull($this->catalog->slugForPriceId(null));
        $this->assertNull($this->catalog->slugForPriceId(''));
    }

    public function test_blank_database_price_does_not_fall_back_to_config(): void
    {
        PricingPackage::where('slug', 'decodemybrain-deep-dive')->update(['stripe_price_id' => null]);
        $catalog = new PackageCatalog();

        $this->assertNull($catalog->stripePriceId('decodemybrain-deep-dive'));
        $this->assertNull($catalog->slugForPriceId('price_dd'));
    }
}
