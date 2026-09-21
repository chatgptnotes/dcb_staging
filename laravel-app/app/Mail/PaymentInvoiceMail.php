<?php

declare(strict_types=1);

namespace App\Mail;

use App\Models\PaymentRecord;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Mail\Mailable;

class PaymentInvoiceMail extends Mailable
{
    public function __construct(public PaymentRecord $payment)
    {
    }

    public function build()
    {
        $number = 'DMB-'.str_pad((string) $this->payment->id, 8, '0', STR_PAD_LEFT);
        $data = ['payment' => $this->payment, 'number' => $number];

        return $this->subject('Payment confirmed — Invoice '.$number.' | DecodeMyBrain')
            ->view('emails.payment-invoice', $data)
            ->attachData(Pdf::loadView('emails.payment-invoice', $data)->output(), $number.'.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
