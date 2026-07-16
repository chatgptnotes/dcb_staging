<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\OrganizationQuote;
use App\Models\OrganizationSeat;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use RuntimeException;

final class OrganizationSeatService
{
    public function __construct(private readonly EntitlementService $entitlements)
    {
    }

    public function allocatePaidSeats(OrganizationQuote $quote): void
    {
        DB::transaction(function () use ($quote) {
            $locked = OrganizationQuote::lockForUpdate()->findOrFail($quote->id);
            if ($locked->status !== 'paid') {
                throw new RuntimeException('Seats can only be allocated after payment is recorded.');
            }
            $missing = max(0, $locked->seat_count - $locked->seats()->count());
            for ($i = 0; $i < $missing; $i++) {
                $locked->seats()->create([
                    'package_slug' => $locked->package_slug,
                    'access_term' => $locked->access_term,
                    'access_ends_at' => $locked->access_ends_at,
                ]);
            }
        });
    }

    public function invite(OrganizationSeat $seat, string $email): string
    {
        $token = Str::random(48);
        $seat->update([
            'status' => 'invited',
            'invited_email' => strtolower(trim($email)),
            'invite_token_hash' => hash_hmac('sha256', $token, (string) config('app.key')),
            'invite_token_encrypted' => Crypt::encryptString($token),
            'invite_expires_at' => now()->addDays(30),
            'claimed_by_wp_user_id' => null,
            'claimed_at' => null,
        ]);
        return $token;
    }

    public function claim(string $token, User $user): OrganizationSeat
    {
        return DB::transaction(function () use ($token, $user) {
            $seat = OrganizationSeat::where('invite_token_hash', hash_hmac('sha256', $token, (string) config('app.key')))
                ->lockForUpdate()->first();
            if (!$seat || $seat->status !== 'invited' || ($seat->invite_expires_at && $seat->invite_expires_at->isPast())) {
                throw new RuntimeException('This invitation is invalid or has expired.');
            }
            if (strtolower((string) $seat->invited_email) !== strtolower((string) $user->email)) {
                throw new RuntimeException('This invitation belongs to a different email address.');
            }
            $seat->update(['status' => 'claimed', 'claimed_by_wp_user_id' => $user->wp_user_id, 'claimed_at' => now()]);
            $this->entitlements->grantOrganizationSeat((int) $user->wp_user_id, $seat);
            return $seat->fresh();
        });
    }
}
