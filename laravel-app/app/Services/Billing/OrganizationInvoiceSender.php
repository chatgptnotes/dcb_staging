<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Mail\OrganizationInvoiceMail;
use App\Models\OrganizationQuote;
use App\Models\PricingPackage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RuntimeException;

final class OrganizationInvoiceSender
{
    // Call inside the payment transaction so retries retain the agreed details.
    public function prepare(OrganizationQuote $quote): void
    {
        if ($quote->status !== 'paid' || $quote->invoice_data) {
            return;
        }
        $organization = $quote->organization;
        $quote->update(['invoice_data' => [
            'number' => 'DMB-ORG-'.str_pad((string) $quote->id, 8, '0', STR_PAD_LEFT),
            'agreement' => $quote->quote_number,
            'organization' => $organization->name,
            'name' => $organization->contact_name,
            'email' => $organization->contact_email,
            'package' => PricingPackage::where('slug', $quote->package_slug)->value('title') ?: $quote->package_slug,
            'seats' => (int) $quote->seat_count,
            'amount' => (int) $quote->total_amount_minor,
            'currency' => $quote->currency,
            'paid_date' => $quote->paid_at?->format('d M Y'),
            'reference' => $quote->payment_reference,
        ]]);
    }

    public function send(OrganizationQuote $quote): void
    {
        DB::transaction(function () use ($quote) {
            $record = OrganizationQuote::whereKey($quote->id)->lockForUpdate()->firstOrFail();
            if ($record->status !== 'paid' || ! $record->invoice_data || $record->invoice_sent_at) {
                return;
            }
            if (! filter_var($record->invoice_data['email'], FILTER_VALIDATE_EMAIL)) {
                throw new RuntimeException('The agreement contact email is invalid.');
            }
            Mail::to($record->invoice_data['email'])->send(new OrganizationInvoiceMail($record->invoice_data));
            $record->update(['invoice_sent_at' => now()]);
        });
    }
}
