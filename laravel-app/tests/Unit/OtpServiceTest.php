<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Mail\OtpMail;
use App\Services\Auth\OtpService;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class OtpServiceTest extends TestCase
{
    private const EMAIL = 'otp-unit@example.local';

    private OtpService $otp;

    protected function setUp(): void
    {
        parent::setUp();
        Mail::fake();
        $this->otp = new OtpService();
        DB::table('email_otps')->where('email', self::EMAIL)->delete();
        RateLimiter::clear('otp-send:register:'.self::EMAIL);
    }

    protected function tearDown(): void
    {
        DB::table('email_otps')->where('email', self::EMAIL)->delete();
        parent::tearDown();
    }

    public function test_send_stores_hashed_code_and_emails_it(): void
    {
        $this->assertTrue($this->otp->send(self::EMAIL, 'register'));

        $row = DB::table('email_otps')->where('email', self::EMAIL)->where('purpose', 'register')->first();
        $this->assertNotNull($row);
        $this->assertStringStartsWith('$2y$', $row->code_hash); // hashed, not plaintext
        Mail::assertSent(OtpMail::class);
    }

    public function test_correct_code_verifies_and_is_single_use(): void
    {
        $this->seedKnownOtp('123456', 'register');

        $this->assertTrue($this->otp->verify(self::EMAIL, 'register', '123456'));
        // single-use: the row is gone, a second attempt fails
        $this->assertFalse($this->otp->verify(self::EMAIL, 'register', '123456'));
    }

    public function test_wrong_code_is_rejected(): void
    {
        $this->seedKnownOtp('123456', 'register');
        $this->assertFalse($this->otp->verify(self::EMAIL, 'register', '000000'));
    }

    public function test_expired_code_is_rejected(): void
    {
        $this->seedKnownOtp('123456', 'register', Carbon::now()->subMinute());
        $this->assertFalse($this->otp->verify(self::EMAIL, 'register', '123456'));
    }

    public function test_too_many_wrong_attempts_invalidates(): void
    {
        $this->seedKnownOtp('123456', 'register');
        for ($i = 0; $i < 5; $i++) {
            $this->otp->verify(self::EMAIL, 'register', '000000');
        }
        // even the correct code now fails (attempts cap hit, row purged)
        $this->assertFalse($this->otp->verify(self::EMAIL, 'register', '123456'));
    }

    public function test_purpose_is_scoped(): void
    {
        $this->seedKnownOtp('123456', 'login');
        // right code but wrong purpose
        $this->assertFalse($this->otp->verify(self::EMAIL, 'register', '123456'));
    }

    private function seedKnownOtp(string $code, string $purpose, ?Carbon $expiresAt = null): void
    {
        DB::table('email_otps')->updateOrInsert(
            ['email' => self::EMAIL, 'purpose' => $purpose],
            [
                'code_hash' => Hash::make($code),
                'attempts' => 0,
                'expires_at' => $expiresAt ?? Carbon::now()->addMinutes(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
