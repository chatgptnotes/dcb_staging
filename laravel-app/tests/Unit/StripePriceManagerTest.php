<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\PricingPackage;
use App\Services\Billing\StripePriceGateway;
use App\Services\Billing\StripePriceManager;
use RuntimeException;
use Tests\TestCase;

class StripePriceManagerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config()->set('cashier.secret', 'sk_test_fake');
    }

    public function test_valid_existing_price_is_reused(): void
    {
        $gateway = new FakeStripePriceGateway(validPrices: ['price_existing'], validProducts: ['prod_existing']);
        $manager = new StripePriceManager($gateway);

        $result = $manager->ensurePrice($this->package(), 'Deep Dive', 234, 'usd', 'subscription', 'month');

        $this->assertSame('price_existing', $result->priceId);
        $this->assertFalse($result->created);
        $this->assertFalse($result->replacedInvalid);
        $this->assertSame(0, $gateway->createdPrices);
    }

    public function test_invalid_existing_price_is_replaced(): void
    {
        $gateway = new FakeStripePriceGateway(validPrices: [], validProducts: ['prod_existing']);
        $manager = new StripePriceManager($gateway);

        $result = $manager->ensurePrice($this->package(), 'Deep Dive', 234, 'usd', 'subscription', 'month');

        $this->assertSame('price_created_1', $result->priceId);
        $this->assertSame('prod_existing', $result->productId);
        $this->assertTrue($result->created);
        $this->assertTrue($result->replacedInvalid);
        $this->assertSame(1, $gateway->createdPrices);
    }

    public function test_billing_change_creates_new_price(): void
    {
        $gateway = new FakeStripePriceGateway(validPrices: ['price_existing'], validProducts: ['prod_existing']);
        $manager = new StripePriceManager($gateway);

        $result = $manager->ensurePrice($this->package(), 'Deep Dive', 300, 'usd', 'subscription', 'month');

        $this->assertSame('price_created_1', $result->priceId);
        $this->assertTrue($result->created);
        $this->assertFalse($result->replacedInvalid);
        $this->assertSame(1, $gateway->createdPrices);
    }

    public function test_missing_stripe_key_fails_before_creating_price(): void
    {
        config()->set('cashier.secret', null);
        $gateway = new FakeStripePriceGateway(validPrices: [], validProducts: []);
        $manager = new StripePriceManager($gateway);

        $this->expectException(RuntimeException::class);

        $manager->ensurePrice($this->package(), 'Deep Dive', 234, 'usd', 'subscription', 'month');
    }

    private function package(): PricingPackage
    {
        return new PricingPackage([
            'slug' => 'decodemybrain-deep-dive',
            'title' => 'Deep Dive',
            'amount' => 234,
            'currency' => 'usd',
            'type' => 'subscription',
            'billing_interval' => 'month',
            'stripe_price_id' => 'price_existing',
            'stripe_product_id' => 'prod_existing',
        ]);
    }
}

final class FakeStripePriceGateway implements StripePriceGateway
{
    public int $createdPrices = 0;

    public function __construct(
        private array $validPrices,
        private array $validProducts
    ) {
    }

    public function retrievePrice(string $priceId): object
    {
        if (!in_array($priceId, $this->validPrices, true)) {
            throw new RuntimeException('No such price');
        }

        return (object) ['id' => $priceId];
    }

    public function retrieveProduct(string $productId): object
    {
        if (!in_array($productId, $this->validProducts, true)) {
            throw new RuntimeException('No such product');
        }

        return (object) ['id' => $productId];
    }

    public function createProduct(array $params): object
    {
        return (object) ['id' => 'prod_created'];
    }

    public function updateProduct(string $productId, array $params): object
    {
        return (object) ['id' => $productId];
    }

    public function createPrice(array $params): object
    {
        $this->createdPrices++;

        return (object) ['id' => 'price_created_'.$this->createdPrices];
    }
}
