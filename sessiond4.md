# DecodeMyBrain — Session D4

Date: 2026-07-14  
Workspace: `F:\finalDCMB2\decodemybrain.test`  
Laravel application: `laravel-app/`  
Local application URL: `http://127.0.0.1:8000`

## Purpose and outcome

This session completed the public registration/access work begun in Session D3, connected it to the Admin panel, and corrected two important Admin-code UX/workflow failures found during manual testing:

1. A masked voucher reference was being mistaken for a redeemable voucher code.
2. An organisation quote reference (`ORG-…`) was being mistaken for a redeemable organisation member code. New organisation records were also initially saved as drafts, so no usable member code/seats existed until a separate activation step.

Both individual vouchers and organisation codes now have a clear, explicit **Reveal & copy code** action for administrators. New organisation access is active immediately after creation: seats are allocated and the redeemable member code is generated in the same operation.

## Current public customer flows

### Native registration and sign-in

- Public registration is at `/sign-up`; sign-in is at `/sign-in`.
- The registration form stores name, email, phone, password, and intended package.
- A newly registered customer is created in both the local `users` table and the `wp_users` mirror used by existing package gates.
- Customer phone is stored in `users.billing_phone`.
- A public customer choosing a plan can register/sign in and is then directed to the code-or-payment choice page at `/start/access` (`access.choice`).

### Individual voucher flow

- Admin creates the voucher at `/admin/vouchers/create`.
- Vouchers may grant permanent package access or a Stripe Checkout discount.
- Individual vouchers are email-bound: the customer must use the recipient email recorded by Admin.
- Voucher codes are encrypted at rest. The list shows a deliberately masked **reference only** (`BDH•••4YA`-style), never a usable code.
- To give a customer the real code, Admin opens `/admin/vouchers` and clicks **Reveal & copy**. The full code is shown in a temporary success panel with a Copy button.
- The user must paste that exact full code into the customer code form. Do not use/copy the masked list reference.

### Organisation access flow

- Admin creates group access at `/admin/organization-quotes/create`.
- Saving the form is now an access-granting action, not merely a draft quote:
  1. an organisation and paid quote are created;
  2. the configured number of seats is allocated;
  3. an active shared member code (`DMB-ORG-…`) is generated;
  4. Admin is redirected to the management page with the full code available to copy.
- The quote number (`ORG-…` or other reference) and the masked code hint are **not** customer codes.
- To obtain the real member code later, open the organisation record and click **Reveal & copy code**.
- Each member enters the full `DMB-ORG-…` code through the normal customer access form. One successful redemption claims one available seat and grants the linked package.
- The organisation page also supports code regeneration/disable, seat invitations, resending invitations, and revoking unused seats.
- The three local organisation records already created before this correction were converted to paid/active records with seats allocated and shared codes enabled.

## Admin panel changes completed today

### Dashboard and user visibility

`/admin/dashboard` now shows:

- total registered users;
- users registered today;
- active paid access count;
- voucher-user count;
- organisation-user count;
- recent registrations with package and access source.

Access source is identified as: Registered, Direct payment/Stripe payment, Voucher checkout, Permanent voucher, or Organisation code.

`/admin/user-plan` now shows each user’s plan/package, access source, account registration date, activation date, and expiry date.

`/admin/user-status` now shows account status, registration date, onboarding/brain-profile status, and access activation date.

### Voucher administration

- New/updated code is in `Modules/Admin/app/Http/Controllers/VoucherAdminController.php` and the Admin voucher views.
- Route added: `POST /admin/vouchers/{id}/reveal-code`.
- Creating a voucher returns Admin to the list with the actual newly generated code in a copyable temporary session message.
- Existing voucher records can also be explicitly revealed via the action button.
- The list labels the hint as a masked reference only, which prevents staff from sending an invalid partial code to customers.

### Organisation administration

- `POST /admin/organization-quotes` now creates an immediately paid/active organisation package, allocates the requested seats, and generates a live shared code transactionally.
- Route added: `POST /admin/organization-quotes/{id}/shared-code/reveal`.
- The index and creation screens have been renamed/text-adjusted to clarify that this is active organisation access, not an unusable quote-only process.
- The organisation detail page clearly distinguishes the internal reference/masked hint from the actual customer code and gives Admin a copy control.

### Admin login

- The intended local Admin record is `admin123@gmail.com` (active Admin role).
- Its local password was reset and browser-style login to `/admin` was tested successfully, redirecting to `/admin/dashboard`.
- Do **not** put the plaintext password in this document or commit it. Use the credential shared directly in the session if it needs to be used locally; reset it through a controlled process if lost.
- Temporary Admin test accounts created during automated verification were removed.

## Sidebar feature map

- **Dashboard:** registration/access metrics and recent customers.
- **Admins:** add, edit, activate, or deactivate Admin accounts.
- **Events:** create/edit/activate/deactivate events.
- **User Plan:** packages and access sources per customer.
- **User Transaction:** subscription/payment records and statuses.
- **User Brain Profiles:** selected brain profiles and assessment completion.
- **User Results:** completed brain-assessment result codes/types/descriptions.
- **User Status:** account and onboarding status.
- **Pricing Packages:** manages public plan details, visibility, Stripe IDs, prices, billing type, features, and order.
- **Access Codes:** legacy package codes; separate from new vouchers and organisation codes.
- **Vouchers:** email-bound individual permanent-access or Checkout-discount vouchers.
- **Organisation Quotes:** active group seat access and member codes.
- **Organisation Enquiries:** requests submitted by schools/offices/groups.
- **Ads:** advertisement content/link/image and status.
- **Brain Profiles:** master brain-profile code/name records.
- **Brain Code Results:** editable description text associated with brain results.
- **Dimension Questions:** detailed assessment questions and their brain-dimension answers.
- **Normal Questions:** standard assessment questions and four answer options.
- **Star Ratings:** profile-specific result ratings and descriptions.
- **Video Tips:** profile-specific video tips, images, and descriptions.

## Verification completed

The following checks passed during this session:

- PHP lint for changed Admin controller/test files.
- Blade compilation (`artisan view:cache`).
- Admin and public route discovery.
- Authenticated Admin dashboard, User Plan, and User Status visibility test: a voucher customer appears on all three pages with the correct permanent-voucher source.
- Native registration test, including phone persistence and both `users`/`wp_users` presence.
- New-public-purchase registration test reaching the code-or-payment selection page.
- Organisation shared-code test: one seat can be claimed and a further claim fails when no seat remains.
- Organisation code test through the **actual user-facing access form**, including redirect to `/questions/q1` and claimed-seat record.
- Admin organisation-creation test: creating access immediately stores paid status, enables a member code, and allocates the requested number of seats.
- Browser-style HTTP test of Admin login and the reveal-code controls.
- Full Laravel test suite passed after test cleanup was made repeatable: **62 tests, 161 assertions**.

## Important implementation/test files

Key new or updated areas include:

- `laravel-app/Modules/Admin/app/Http/Controllers/AdminController.php`
- `laravel-app/Modules/Admin/app/Http/Controllers/VoucherAdminController.php`
- `laravel-app/Modules/Admin/routes/web.php`
- `laravel-app/Modules/Admin/resources/views/dashboard.blade.php`
- `laravel-app/Modules/Admin/resources/views/user_plan.blade.php`
- `laravel-app/Modules/Admin/resources/views/user_status.blade.php`
- `laravel-app/Modules/Admin/resources/views/vouchers/`
- `laravel-app/Modules/Admin/resources/views/organization_quotes/`
- `laravel-app/app/Services/Billing/OrganizationCodeService.php`
- `laravel-app/app/Services/Billing/OrganizationSeatService.php`
- `laravel-app/app/Services/Billing/VoucherService.php`
- `laravel-app/tests/Feature/NativeRegistrationTest.php`
- `laravel-app/tests/Feature/AdminUserManagementVisibilityTest.php`
- `laravel-app/tests/Feature/OrganizationCodeServiceTest.php`

## Current local URLs

- Public landing: `http://127.0.0.1:8000/`
- Plans: `http://127.0.0.1:8000/plans`
- Sign up: `http://127.0.0.1:8000/sign-up`
- Sign in: `http://127.0.0.1:8000/sign-in`
- Access choice: `http://127.0.0.1:8000/start/access` (requires a signed-in customer/session)
- Admin login: `http://127.0.0.1:8000/admin`
- Admin dashboard: `http://127.0.0.1:8000/admin/dashboard`
- Vouchers: `http://127.0.0.1:8000/admin/vouchers`
- Organisation access: `http://127.0.0.1:8000/admin/organization-quotes`
- Organisation enquiries: `http://127.0.0.1:8000/admin/organization-enquiries`

## Remaining real-world checks before production

Automated coverage is green, but these external integrations still require real manual/test-mode verification:

1. Configure and verify real Stripe Price IDs for the public packages, then complete at least one Stripe test payment and webhook cycle.
2. Configure a real mail provider. Current mail configuration is log-only, so organisation invitation emails are not delivered externally until SMTP/provider credentials are configured.
3. Perform a manual browser walkthrough with a real customer account for: sign-up/sign-in and OTP (if enabled), permanent voucher redemption, discount voucher Checkout, organisation member-code redemption, and assessment entry.
4. Keep the code distinction in all future UI work: masked reference/quote number is for Admin identification only; customers must always receive a copied full redeemable code.

## Working-tree note

The worktree contains many uncommitted additions/changes from Sessions D3 and D4, including implementation files, migrations, tests, admin views, public-flow views, and some assets/screenshots. Preserve unrelated existing changes. Do not use destructive Git commands such as `reset --hard` or blanket checkout/revert.

## Tomorrow’s starting point

User requested the next work to focus on the **Admin panel**. Before changing any sidebar feature, inspect its actual view/controller/data source and test its user-facing effect. For access-related changes, always test both sides of the flow:

1. Admin creates/edits the item.
2. Customer uses the resulting code/payment/access path.
3. Admin dashboard/User Plan/User Status show the resulting customer correctly.

