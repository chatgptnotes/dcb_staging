<?php

declare(strict_types=1);

namespace App\Services\Billing;

interface StripePriceGateway
{
    public function retrievePrice(string $priceId): object;

    public function retrieveProduct(string $productId): object;

    public function createProduct(array $params): object;

    public function updateProduct(string $productId, array $params): object;

    public function createPrice(array $params): object;
}
