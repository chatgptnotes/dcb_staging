<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\PricingPackage;
use Carbon\Carbon;
use RuntimeException;

class PlanAgeEligibilityService
{
    /** Reject a customer whose date of birth is outside the plan's configured range. */
    public function assertEligible(?PricingPackage $package, ?string $dateOfBirth): void
    {
        if (! $package || ($package->minimum_age === null && $package->maximum_age === null)) {
            return;
        }

        if (! $dateOfBirth) {
            throw new RuntimeException('A date of birth is required before choosing this assessment.');
        }

        try {
            $age = Carbon::parse($dateOfBirth)->age;
        } catch (\Throwable) {
            throw new RuntimeException('A valid date of birth is required before choosing this assessment.');
        }

        $minimumAge = $package->minimum_age;
        $maximumAge = $package->maximum_age;
        if (($minimumAge !== null && $age < $minimumAge) || ($maximumAge !== null && $age > $maximumAge)) {
            throw new RuntimeException('This assessment is available only to '.$this->ageRange($minimumAge, $maximumAge).'.');
        }
    }

    private function ageRange(?int $minimumAge, ?int $maximumAge): string
    {
        if ($minimumAge === null) {
            return 'ages up to '.$maximumAge;
        }

        return $maximumAge === null
            ? 'ages '.$minimumAge.'+'
            : 'ages '.$minimumAge.'–'.$maximumAge;
    }
}
