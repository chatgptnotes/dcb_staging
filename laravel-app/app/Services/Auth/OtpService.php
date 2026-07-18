<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Mail\OtpMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

/**
 * Native email one-time-password (OTP) for registration and password reset.
 * Codes are 6-digit, hashed at rest, single-use, short-lived,
 * and rate-limited. Sent over the configured mailer (Gmail SMTP).
 */
final class OtpService
{
    private const TTL_MINUTES = 10;
    private const MAX_ATTEMPTS = 5;
    private const SEND_LIMIT = 4;        // max sends per window
    private const SEND_DECAY = 600;      // seconds (10 min)

    /**
     * Generate, store, and email a fresh OTP. Returns false if the send rate
     * limit was hit.
     */
    private const PURPOSES = ['register', 'reset'];

    public function send(string $email, string $purpose): bool
    {
        if (! in_array($purpose, self::PURPOSES, true)) {
            return false;
        }

        $email = mb_strtolower(trim($email));
        $key = "otp-send:{$purpose}:{$email}";

        if (RateLimiter::tooManyAttempts($key, self::SEND_LIMIT)) {
            return false;
        }
        RateLimiter::hit($key, self::SEND_DECAY);

        $code = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        DB::table('email_otps')->updateOrInsert(
            ['email' => $email, 'purpose' => $purpose],
            [
                'code_hash' => Hash::make($code),
                'attempts' => 0,
                'expires_at' => Carbon::now()->addMinutes(self::TTL_MINUTES),
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]
        );

        // Local signups should not depend on external SMTP. The matching test
        // code is accepted in verify(), while production keeps real delivery.
        if (app()->environment('local') && filled(config('app.otp_test_code'))) {
            return true;
        }

        Mail::to($email)->send(new OtpMail($code, $purpose, self::TTL_MINUTES));

        return true;
    }

    /**
     * Verify a submitted code. Single-use: deletes the record on success;
     * counts attempts and invalidates after the cap on failure.
     */
    public function verify(string $email, string $purpose, string $code): bool
    {
        if (! in_array($purpose, self::PURPOSES, true)) {
            return false;
        }

        $email = mb_strtolower(trim($email));
        $code = trim($code);

        // Atomic: lock the row so concurrent guesses can't both pass the
        // attempts check before the increment lands.
        return DB::transaction(function () use ($email, $purpose, $code) {
            $row = DB::table('email_otps')
                ->where('email', $email)->where('purpose', $purpose)
                ->lockForUpdate()->first();

            if (! $row) {
                return false;
            }

            if (Carbon::parse($row->expires_at)->isPast() || $row->attempts >= self::MAX_ATTEMPTS) {
                DB::table('email_otps')->where('id', $row->id)->delete();
                return false;
            }

            // Local checkout and registration testing must not depend on an
            // external inbox. This is deliberately restricted to the local
            // environment and still requires a pending OTP row.
            $localTestCode = app()->environment('local') ? config('app.otp_test_code') : null;
            if (is_string($localTestCode) && $localTestCode !== '' && hash_equals($localTestCode, $code)) {
                DB::table('email_otps')->where('id', $row->id)->delete();
                return true;
            }

            if (! Hash::check($code, $row->code_hash)) {
                DB::table('email_otps')->where('id', $row->id)->increment('attempts');
                return false;
            }

            DB::table('email_otps')->where('id', $row->id)->delete();
            return true;
        });
    }
}
