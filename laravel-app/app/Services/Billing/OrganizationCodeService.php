<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\OrganizationQuote;
use App\Models\OrganizationSeat;
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
        do {
            $code = 'DMB-ORG-'.strtoupper(Str::random(8));
        } while (OrganizationQuote::where('shared_code_hash', $this->hash($code))->exists());

        $quote->update([
            'shared_code_hash' => $this->hash($code),
            'shared_code_encrypted' => Crypt::encryptString($code),
            'shared_code_hint' => substr($code, 0, 7).'•••'.substr($code, -3),
            'shared_code_enabled' => true,
        ]);
        return $code;
    }

    public function disable(OrganizationQuote $quote): void
    {
        $quote->update(['shared_code_enabled' => false]);
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
}
