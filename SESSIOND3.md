# DecodeMyBrain — Session D3

Date: 2026-07-13  
Workspace: `F:\finalDCMB2\decodemybrain.test`  
Laravel app: `laravel-app/`  
Local URL: `http://127.0.0.1:8000`

## Purpose of this session

Started implementation of the requested admin-managed voucher system and organisation quote/seat system. The agreed business intent is:

- Individual vouchers are single-use and email-bound.
- Percentage and fixed-USD discounts apply to a selected package through Laravel Stripe Checkout.
- A `100%` individual voucher grants permanent access to one selected package without creating a Stripe subscription.
- New users may enter a code, register/sign in, then claim it after email/account verification.
- An organisation receives a private quote for a number of seats (example: school with 150 students); after payment is recorded, the seats can be assigned through invitations.
- Existing legacy `access_codes` must remain separate and unchanged.

## Important current state / do not lose this context

### Existing database was not empty

The real local MySQL database is `decodemy_app` at `127.0.0.1:3306` (XAMPP MySQL, root user). Contrary to the old Session D1 warning, it does have migration history and is running.

Before this work, it already contained a different voucher design:

- `vouchers` with columns such as `code`, `name`, `scope`, `benefit_type`, `discount_value`, `package_slugs`, etc.
- `voucher_recipients`
- `voucher_redemptions`
- `corporate_agreements`

Existing sample voucher rows were present and must be preserved. New migrations `000001` and `000002` were revised to extend the existing voucher tables instead of replacing them. They add only the new secure redemption/Stripe fields required by the new Laravel logic.

All six Session D3 migrations are now marked as run in `decodemy_app`:

1. `2026_07_13_000001_create_vouchers_table.php` — safely extends existing vouchers table when it already exists.
2. `2026_07_13_000002_create_voucher_redemptions_table.php` — safely extends existing redemptions table when it already exists.
3. `2026_07_13_000003_create_entitlement_grants_table.php`
4. `2026_07_13_000004_create_organizations_table.php`
5. `2026_07_13_000005_create_organization_quotes_table.php`
6. `2026_07_13_000006_create_organization_seats_table.php`

The four new entitlement/organisation tables were confirmed empty immediately after creation. Do not rerun or delete migrations blindly.

## Implemented code

### New models/services/controllers

- `app/Models/Voucher.php`
- `app/Models/VoucherRedemption.php`
- `app/Models/EntitlementGrant.php`
- `app/Models/Organization.php`
- `app/Models/OrganizationQuote.php`
- `app/Models/OrganizationSeat.php`
- `app/Services/Billing/VoucherService.php`
- `app/Services/Billing/OrganizationSeatService.php`
- `app/Http/Controllers/VoucherController.php`
- `Modules/Admin/app/Http/Controllers/VoucherAdminController.php`

### Individual voucher workflow currently implemented

1. User opens `/pricing`, enters a voucher code and selects the package.
2. `/voucher/start` checks the voucher without consuming it and saves a pending voucher ID + intended package in the session.
3. If not logged in, user goes through existing sign-up/sign-in and OTP flow.
4. `UserController::adoptGuestAnswersAndRedirect()` now sends pending voucher/invitation sessions to their completion route before normal checkout.
5. Permanent voucher:
   - email is checked against recipient email;
   - database row is locked;
   - voucher becomes `redeemed`;
   - permanent entitlement grant is created;
   - package is mirrored to the existing `wp_users.package` gate;
   - user goes to `/questions/q1`.
6. Discount voucher:
   - voucher is reserved for that account;
   - `CheckoutController` adds the stored Stripe Promotion Code as a pre-applied Checkout discount;
   - the voucher is redeemed only from verified Stripe successful checkout/webhook handling;
   - cancellation releases the reservation.

### Entitlement protection

`EntitlementService` now has permanent grant handling. On a Stripe cancellation/downgrade, it checks for an active permanent grant before downgrading the user to free. This prevents a later subscription cancellation from incorrectly removing permanent voucher access.

### Admin features currently implemented

Admin routes are isolated under `/admin` and protected by existing `authAdmin` middleware:

- `/admin/vouchers`
- `/admin/vouchers/create`
- create, disable, and retry Stripe sync for vouchers
- `/admin/organization-quotes`
- create quote, mark quote paid, invite seats, resend invitation, revoke unused seat

Voucher fields include recipient email, package, permanent-free vs checkout-discount purpose, percent/fixed USD discount, minimum amount, expiry, generated/custom code, status, and Stripe sync state.

Organisation quote fields include organisation/contact, package, seat count, per-seat price, total discount, total, billing type, access term, expiry, and notes. Marking a quote paid creates exactly the purchased number of available seats. Invitations can be added as one-email-per-line, comma-separated input, or CSV/TXT first-column email upload.

### Organisation invitation workflow currently implemented

1. Admin marks a quote paid.
2. Admin assigns available seats to learner/staff emails.
3. Each invitation receives a random token, stored hashed plus encrypted for controlled resend.
4. Email recipient visits `/organization/invitation/{token}`, signs in/registers, and must have the same email.
5. One seat is atomically claimed and creates package entitlement.

## User-facing placement

Voucher entry was added only to `resources/views/pricing.blade.php`; the primary `new_landing` page/controller were not changed by this work.

The normal no-voucher flow remains:

`Landing Book Today → existing registration modal / sign-in → Stripe Checkout → success → questions`

The current voucher flow needs product/UI review before final release: the voucher entry is on `/pricing`, not inside the landing-page registration modal. Do not move it into the landing page until the exact desired UX is agreed and visually checked.

## Admin visual issue fixed during this session

The Admin login initially rendered as raw unstyled HTML. Cause: all required `public/backend-assets/vendor/...` files were missing. The existing login referenced Sneat CSS/JS but only `backend-assets/css`, `img`, and `js` existed.

Fix performed:

- Downloaded `sneat-bootstrap-html-admin-template-free@1.0.0`.
- Restored required assets under `public/backend-assets/vendor/`.
- Added compatibility copies for existing `vendor/css/rtl/core.css` and `theme-default.css` references.
- Removed unused broken login-page references to assets not included in the free bundle.
- Cleared compiled Blade views.

Verification: all 15 local Admin login CSS/JS assets currently referenced now return HTTP 200. Admin login, dashboard redirect, and `/admin/vouchers` load using session-backed local runtime.

Runtime directory issue also fixed: `storage/framework/sessions` was missing, causing session write errors and misleading landing-page failures. Required `storage/framework/{sessions,views,cache/data}` directories were created.

## Mail status — IMPORTANT

Emails are **not sent externally** right now.

`.env` currently uses:

```env
MAIL_MAILER=log
QUEUE_CONNECTION=sync
```

Organisation invitation calls create/log the mail but do not deliver it to a recipient inbox. Before live use:

1. Configure a real mailer in `.env` (SMTP/Gmail, Mailgun, Postmark, SES, etc.).
2. Move all mail credentials out of committed/source config into `.env`.
3. Rotate existing exposed mail credentials before production.
4. Send a real test invite and verify delivery, expiry, resend, and claimed-seat behaviour.

## Tests/verification completed

- PHP lint passed for new/changed controllers and services.
- Laravel route discovery passed for voucher and organisation admin routes.
- Blade view compilation passed after restoring cache directories.
- Temporary SQLite migration smoke test passed for all six new migrations (the older 2026_06 unique-email migration is SQLite-incompatible due to `SHOW INDEX`; this is pre-existing and unrelated).
- `tests/Unit/VoucherServiceTest.php` passed.
- `tests/Feature/PermanentVoucherDatabaseTest.php` passed against the real `decodemy_app` database in a transaction that rolls back test data. It verifies permanent voucher creation, redemption, `wp_users.package` update, and permanent entitlement-grant creation.

Not yet verified end-to-end:

- Stripe test-mode creation of Coupon/Promotion Code.
- Stripe successful payment webhook redemption record.
- Stripe cancellation restoring permanent entitlement.
- Organisation quote → paid → CSV invite → actual mail → learner claim full flow.
- Real external email delivery (mailer is log-only).

## Current running local services

- MySQL: XAMPP `mysqld` is running.
- Laravel local server: `http://127.0.0.1:8000`.
- Public landing: `/`
- Pricing/voucher entry: `/pricing`
- Admin login: `/admin`
- Voucher admin: `/admin/vouchers`
- Organisation quote admin: `/admin/organization-quotes`

The root `start-local.bat` points at an old `C:\Users\Admin\Downloads\...` directory. Do not rely on it without updating it to this workspace path.

## Files changed/untracked this session

Tracked changes include:

- `Modules/Admin/resources/views/layouts/header.blade.php`
- `Modules/Admin/resources/views/login.blade.php`
- `Modules/Admin/routes/web.php`
- `app/Http/Controllers/CheckoutController.php`
- `app/Http/Controllers/StripeWebhookController.php`
- `app/Http/Controllers/UserController.php`
- `app/Services/Billing/EntitlementService.php`
- `resources/views/pricing.blade.php`
- `routes/web.php`
- restored files under `public/backend-assets/`

Untracked implementation files include all new voucher/organisation models, services, controllers, admin views, migrations, and tests listed above. Existing unrelated dirty worktree changes must be preserved.

## Recommended immediate next steps

1. Open Admin in browser and visually confirm restored styling after Ctrl+F5.
2. Review/confirm where voucher input belongs in the existing landing/registration journey before changing `new_landing.blade.php`.
3. Configure Stripe test keys + signed webhook endpoint; test one fixed discount and one percentage discount.
4. Configure real mail delivery; test organisation invite in a real mailbox.
5. Add tests for paid voucher webhook, duplicate/redemption race, quote seat limit, invitation email mismatch, and expired invitation.
6. Do not claim production readiness until Stripe and mail end-to-end flows pass.
