<?php

declare(strict_types=1);

namespace App\Mail;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Mail\Mailable;

class OrganizationInvoiceMail extends Mailable
{
    public function __construct(public array $invoice)
    {
    }

    public function build()
    {
        $data = ['invoice' => $this->invoice];

        return $this->subject('Payment received - Invoice '.$this->invoice['number'].' | DecodeMyBrain')
            ->view('emails.organization-invoice', $data)
            ->attachData(Pdf::loadView('emails.organization-invoice', $data)->output(), $this->invoice['number'].'.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
