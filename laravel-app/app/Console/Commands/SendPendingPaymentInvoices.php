<?php

namespace App\Console\Commands;

use App\Models\PaymentRecord;
use App\Services\Billing\PaymentInvoiceSender;
use Illuminate\Console\Command;

class SendPendingPaymentInvoices extends Command
{
    protected $signature = 'billing:send-pending-invoices';

    protected $description = 'Retry pending payment confirmation invoice emails';

    public function handle(PaymentInvoiceSender $sender): int
    {
        $failed = false;
        PaymentRecord::whereNotNull('invoice_data')->whereNull('invoice_sent_at')
            ->where('status', 'paid')->chunkById(100, function ($payments) use ($sender, &$failed) {
                foreach ($payments as $payment) {
                    try {
                        $sender->send($payment);
                    } catch (\Throwable $e) {
                        report($e);
                        $failed = true;
                    }
                }
            });

        return $failed ? self::FAILURE : self::SUCCESS;
    }
}
