<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $code,
        public string $purpose,
        public int $ttlMinutes
    ) {
    }

    public function build()
    {
        $subjects = [
            'register' => 'Verify your email — DecodeMyBrain',
            'login' => 'Your DecodeMyBrain login code',
            'reset' => 'Reset your DecodeMyBrain password',
        ];

        return $this->subject($subjects[$this->purpose] ?? 'Your DecodeMyBrain code')
            ->view('emails.otp');
    }
}
