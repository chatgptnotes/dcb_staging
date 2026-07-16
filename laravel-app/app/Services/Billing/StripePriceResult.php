<?php

declare(strict_types=1);

namespace App\Services\Billing;

final class StripePriceResult
{
    public function __construct(
        public readonly string $priceId,
        public readonly ?string $productId,
        public readonly bool $created,
        public readonly bool $replacedInvalid
    ) {
    }
}
