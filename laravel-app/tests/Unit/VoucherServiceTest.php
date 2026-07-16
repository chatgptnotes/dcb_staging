<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Services\Billing\EntitlementService;
use App\Services\Billing\VoucherService;
use Tests\TestCase;

class VoucherServiceTest extends TestCase
{
    public function test_codes_are_normalized_before_hashing(): void
    {
        config()->set('app.key', 'voucher-service-test-key');
        $service = new VoucherService(new EntitlementService());

        $this->assertSame('WELCOME10', $service->normalizeCode(' welcome-10 '));
        $this->assertSame(
            $service->hashCode('WELCOME10'),
            $service->hashCode('welcome-10')
        );
    }

    public function test_normalization_rejects_non_alphanumeric_code_content(): void
    {
        $service = new VoucherService(new EntitlementService());

        $this->assertSame('', $service->normalizeCode('--- !!!'));
    }
}
