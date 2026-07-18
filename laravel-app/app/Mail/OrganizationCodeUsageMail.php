<?php

declare(strict_types=1);

namespace App\Mail;

use App\Models\OrganizationQuote;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrganizationCodeUsageMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public readonly OrganizationQuote $quote,
        public readonly int $issuedSeats,
        public readonly int $claimedSeats,
    ) {
    }

    public function build(): self
    {
        return $this->subject('DecodeMyBrain assessment code usage update')
            ->view('emails.organization_code_usage');
    }
}
