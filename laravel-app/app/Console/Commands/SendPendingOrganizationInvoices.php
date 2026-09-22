<?php

namespace App\Console\Commands;

use App\Models\OrganizationQuote;
use App\Services\Billing\OrganizationInvoiceSender;
use Illuminate\Console\Command;

class SendPendingOrganizationInvoices extends Command
{
    protected $signature = 'billing:send-pending-organization-invoices';

    protected $description = 'Retry pending business agreement invoice emails';

    public function handle(OrganizationInvoiceSender $sender): int
    {
        $failed = false;
        OrganizationQuote::whereNotNull('invoice_data')->whereNull('invoice_sent_at')
            ->where('status', 'paid')->chunkById(100, function ($quotes) use ($sender, &$failed) {
                foreach ($quotes as $quote) {
                    try {
                        $sender->send($quote);
                    } catch (\Throwable $e) {
                        report($e);
                        $failed = true;
                    }
                }
            });

        return $failed ? self::FAILURE : self::SUCCESS;
    }
}
