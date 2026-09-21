<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Mail\PaymentInvoiceMail;
use App\Models\PaymentRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

final class PaymentInvoiceSender
{
    public function send(PaymentRecord $payment): void
    {
        // Serialize webhook, browser and scheduled retries for this payment.
        DB::transaction(function () use ($payment) {
            $record = PaymentRecord::whereKey($payment->id)->lockForUpdate()->firstOrFail();
            if ($record->invoice_sent_at || ! $record->invoice_data || $record->status !== 'paid') {
                return;
            }

            Mail::to($record->invoice_data['email'])->send(new PaymentInvoiceMail($record));
            $record->update(['invoice_sent_at' => now()]);
        });
    }
}
