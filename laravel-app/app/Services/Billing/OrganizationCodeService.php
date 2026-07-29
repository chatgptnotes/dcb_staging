<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\OrganizationQuote;
use App\Models\OrganizationSeat;
use App\Models\PricingPackage;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RuntimeException;

final class OrganizationCodeService
{
    public function __construct(private readonly EntitlementService $entitlements)
    {
    }

    public function normalize(string $code): string
    {
        return preg_replace('/[^A-Z0-9]/', '', strtoupper(trim($code))) ?: '';
    }

    private function hash(string $code): string
    {
        return hash_hmac('sha256', $this->normalize($code), (string) config('app.key'));
    }

    public function createOrReplace(OrganizationQuote $quote): string
    {
        if ($quote->status !== 'paid') {
            throw new RuntimeException('Record payment before creating a shared organisation code.');
        }
        $isFirstGeneration = ! $quote->shared_code_hash;
        do {
            $code = 'DMB-ORG-'.strtoupper(Str::random(8));
        } while (OrganizationQuote::where('shared_code_hash', $this->hash($code))->exists());

        $attributes = [
            'shared_code_hash' => $this->hash($code),
            'shared_code_encrypted' => Crypt::encryptString($code),
            'shared_code_hint' => substr($code, 0, 7).'•••'.substr($code, -3),
            'shared_code_enabled' => true,
        ];
        if ($isFirstGeneration) {
            $attributes['shared_code_created_at'] = now();
        }
        $quote->update($attributes);
        return $code;
    }

    /**
     * Replace an active organisation code without affecting its claimed or
     * available seats. Once the hash changes, the previous code can no longer
     * be validated or redeemed.
     */
    public function rotate(OrganizationQuote $quote): string
    {
        if (! $quote->shared_code_hash || ! $quote->shared_code_encrypted) {
            throw new RuntimeException('Generate an enterprise code before rotating it.');
        }

        $code = $this->createOrReplace($quote);
        $quote->update(['shared_code_rotated_at' => now()]);

        return $code;
    }

    public function disable(OrganizationQuote $quote): void
    {
        $this->setEnabled($quote, false);
    }

    /** Enable or disable an existing enterprise code without replacing it. */
    public function setEnabled(OrganizationQuote $quote, bool $enabled): void
    {
        if ($quote->status !== 'paid') {
            throw new RuntimeException('Record payment before changing the enterprise code status.');
        }
        if (! $quote->shared_code_hash || ! $quote->shared_code_encrypted) {
            throw new RuntimeException('Generate an enterprise code before changing its status.');
        }

        $quote->update(['shared_code_enabled' => $enabled]);
    }

    /** Check a code before registration without assigning a seat yet. */
    public function validateAvailability(string $code): OrganizationQuote
    {
        $quote = OrganizationQuote::where('shared_code_hash', $this->hash($code))->first();
        if (!$quote || !$quote->shared_code_enabled || $quote->status !== 'paid') {
            throw new RuntimeException('This organisation code is invalid or unavailable.');
        }
        if ($quote->expires_at && $quote->expires_at->isPast()) {
            throw new RuntimeException('This organisation code has expired.');
        }
        if ($quote->access_term === 'fixed_term' && $quote->access_ends_at && $quote->access_ends_at->isPast()) {
            throw new RuntimeException('This organisation access term has ended.');
        }
        if (! $quote->seats()->where('status', 'available')->exists()) {
            throw new RuntimeException('All seats for this organisation code have already been claimed.');
        }

        return $quote;
    }

    /** Validate the age for a pending code before an account is created. */
    public function validateAgeForCode(string $code, int $age): OrganizationQuote
    {
        $quote = $this->validateAvailability($code);
        $this->assertAgeEligible($quote, $age);

        return $quote;
    }

    public function claim(string $code, User $user): OrganizationSeat
    {
        return DB::transaction(function () use ($code, $user) {
            $quote = OrganizationQuote::where('shared_code_hash', $this->hash($code))->lockForUpdate()->first();
            if (!$quote || !$quote->shared_code_enabled || $quote->status !== 'paid') {
                throw new RuntimeException('This organisation code is invalid or unavailable.');
            }
            if ($quote->expires_at && $quote->expires_at->isPast()) {
                throw new RuntimeException('This organisation code has expired.');
            }
            if ($quote->access_term === 'fixed_term' && $quote->access_ends_at && $quote->access_ends_at->isPast()) {
                throw new RuntimeException('This organisation access term has ended.');
            }
            $this->assertAgeEligible($quote, $this->ageForUser($user));
            $seat = $quote->seats()->where('status', 'available')->orderBy('id')->lockForUpdate()->first();
            if (!$seat) {
                throw new RuntimeException('All seats for this organisation code have already been claimed.');
            }
            $seat->update([
                'status' => 'claimed',
                'invited_email' => strtolower((string) $user->email),
                'claimed_by_wp_user_id' => $user->wp_user_id,
                'claimed_at' => now(),
            ]);
            $this->entitlements->grantOrganizationSeat((int) $user->wp_user_id, $seat);
            return $seat->fresh();
        });
    }

    private function ageForUser(User $user): int
    {
        if (! $user->date_of_birth) {
            throw new RuntimeException('A date of birth is required to use this organisation code.');
        }

        return now()->diffInYears($user->date_of_birth);
    }

    private function assertAgeEligible(OrganizationQuote $quote, int $age): void
    {
        $minimumAge = $quote->minimum_age;
        $maximumAge = $quote->maximum_age;

        if ($minimumAge === null && $maximumAge === null) {
            $package = PricingPackage::where('slug', $quote->package_slug)->first(['minimum_age', 'maximum_age']);
            $minimumAge = $package?->minimum_age;
            $maximumAge = $package?->maximum_age;
        }

        if ($minimumAge === null && $maximumAge === null) {
            return;
        }

        if (($minimumAge !== null && $age < $minimumAge) || ($maximumAge !== null && $age > $maximumAge)) {
            $range = $minimumAge === null
                ? 'up to age '.$maximumAge
                : ($maximumAge === null ? 'ages '.$minimumAge.'+' : 'ages '.$minimumAge.'–'.$maximumAge);
            throw new RuntimeException('This organisation code is available only to '.$range.'.');
        }
    }
}
