<?php

declare(strict_types=1);

namespace App\Mail;

use App\Models\OrganizationQuote;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrganizationAccessCodeMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public readonly OrganizationQuote $quote,
        public readonly string $code,
    ) {
    }

    public function build(): self
    {
        return $this->subject('Your DecodeMyBrain organisation access code')
            ->view('emails.organization_access_code');
    }
}
