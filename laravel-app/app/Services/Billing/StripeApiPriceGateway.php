<?php

declare(strict_types=1);

namespace App\Services\Billing;

final class StripeApiPriceGateway implements StripePriceGateway
{
    private \Stripe\StripeClient $client;

    public function __construct()
    {
        $this->client = new \Stripe\StripeClient((string) config('cashier.secret'));
    }

    public function retrievePrice(string $priceId): object
    {
        return $this->client->prices->retrieve($priceId, []);
    }

    public function retrieveProduct(string $productId): object
    {
        return $this->client->products->retrieve($productId, []);
    }

    public function createProduct(array $params): object
    {
        return $this->client->products->create($params);
    }

    public function updateProduct(string $productId, array $params): object
    {
        return $this->client->products->update($productId, $params);
    }

    public function createPrice(array $params): object
    {
        return $this->client->prices->create($params);
    }
}
