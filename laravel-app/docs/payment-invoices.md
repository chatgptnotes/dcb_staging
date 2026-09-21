# Payment confirmation invoices

Confirmed Stripe Checkout purchases send a DecodeMyBrain email with a PDF invoice through the application's configured mail transport. The recipient is the registered user's email; guest checkout uses the checkout email until registration is completed. Unpaid checkout sessions do not generate invoices. Subscription renewals are outside this checkout notification flow.

## Deployment

1. Run `php artisan migrate --force` with the release to add `invoice_data` and `invoice_sent_at` to `payment_records`.
2. Configure the existing `MAIL_*` settings and verified `MAIL_FROM_ADDRESS` / `MAIL_FROM_NAME` for the application sender.
3. Keep the signed Stripe webhook configured for `checkout.session.completed` and `checkout.session.async_payment_succeeded` so delivery does not depend on the buyer returning to the site.
4. Run Laravel's scheduler every minute (`php artisan schedule:run`). Failed invoice emails are retried every five minutes. A manual retry is available through `php artisan billing:send-pending-invoices`.

Emails are attempted immediately after recording a confirmed payment. Mail failures are reported in application logs and do not interrupt paid access. The retry command only processes records with invoice data, so deployment alone does not email historical buyers.

A database row lock and sent timestamp suppress duplicate delivery from normal webhook retries and browser returns. As with SMTP delivery generally, a process failure after the mail provider accepts the message but before the timestamp commits can result in a duplicate on retry. A sent timestamp records transport acceptance, not inbox delivery.

Invoices contain the invoice number, customer, package, currency, subtotal, discount, tax supplied by Stripe, total paid and payment reference. The PDF is generated locally using the existing DomPDF dependency.

Validation: `php artisan test --filter=PaymentInvoiceTest` uses an isolated in-memory SQLite database and fake mail; it does not send customer emails.
