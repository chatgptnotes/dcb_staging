# DecodeMyBrain — Session D5 Handover

Date: 15 July 2026 (IST)

## Local environment

- Workspace: `F:\finalDCMB2\decodemybrain.test`
- Laravel application: `laravel-app`
- Local site was confirmed available at `http://127.0.0.1:8000`.
- Local MySQL uses the `decodemy_app` database.
- This is an existing dirty worktree. Do not reset, checkout, or remove unrelated changes.

## Assessment, login, home, and resume work completed earlier today

### Assessment resume

- Added `laravel-app/app/Services/AssessmentResumeService.php`.
- Added authenticated routes:
  - `POST /assessment/pause` (`assessment.pause`)
  - `GET /assessment/resume` (`assessment.resume`)
- Assessment question pages now include a save-and-go-home action.
- Landing page detects an unfinished assessment for the signed-in user and shows **Resume assessment** only when applicable.
- Resume restores the next unanswered normal or dimensional question. Completed assessments do not show a resume option.

### Navigation and authentication

- Added Home / Dashboard / Logout navigation where appropriate across public, member, and assessment pages.
- Home always points to the local landing page.
- Fixed native sign-in compatibility:
  - Native users without a `wp_user_id` are repaired after successful password verification.
  - Legacy `wp_users` mirror-only users can sign in by verified email and are materialised as native users.
  - Existing password validation, generic failure messages, throttling, and WordPress phpass/bcrypt upgrades were retained.

### Tests for this work

- `tests/Feature/AssessmentResumeTest.php`
- `tests/Feature/NativeLoginCompatibilityTest.php`

## Assessment report research findings

- On assessment completion, score data is stored in `brain_scores`.
- The assigned profile is stored in `wp_users.brain_profile_id`.
- Normal report downloads do not persist one generated report per user. The app selects one of 45 static template PDFs based on:
  - 15 brain profiles
  - 3 age groups: 12–14, 15–18, 18+
- Templates are served from the existing report source (`https://video.decodemybrain.com/reports/{number}.pdf`), with a custom cover generated and merged at download time. Temporary merged files use `public/db_files/reports` and are deleted after download.
- Profile ID `1` is the `L1 dominant` profile in `profile_types`.

## Admin corporate workflow implemented today

### Final agreed behaviour

1. A public organisation enquiry appears in **Organisation Enquiries**.
2. Admin clicks **Create deal** on that enquiry.
3. The agreement form is prefilled with the received organisation/contact/group-size/message information.
4. Saving creates one unpaid/draft business agreement and marks the enquiry as converted.
5. Admin opens the agreement and records offline payment with **Mark payment received**.
6. Only after payment, the app creates the requested seats and automatically creates one shared enterprise access code.
7. The agreement page allows reveal/copy, regenerate, and disable of that shared code.
8. Individual vouchers remain separate in the existing Vouchers area. Corporate agreements use the shared enterprise code flow, not individual vouchers.

### Admin UI changes

- Hid **Events** from the admin sidebar only. Event data, controller actions, and routes remain available for backward compatibility.
- Renamed **Organisation Quotes** in the sidebar to **Agreements**.
- Enquiries list now shows the full received request and either:
  - **Create deal** for an enquiry without an agreement, or
  - **Open agreement** when one already exists.
- Agreements list has no standalone create action; it is a management list of enquiry-originated agreements.
- Direct legacy `/admin/organization-quotes/create` bookmarks now redirect to Organisation Enquiries with an explanatory message.
- Agreement details show the payment action before payment and a shared-code-only experience after payment. The previous corporate learner invitation UI was removed from the screen.

### Backend and data changes

- Added `organization_enquiry_id` to `organization_quotes`.
  - Nullable for legacy agreements.
  - Unique, so an enquiry can be converted into only one agreement.
  - Foreign key is null-on-delete, preserving legacy agreement history if an enquiry is deleted.
- Added model relationships:
  - `OrganizationEnquiry::quote()`
  - `OrganizationQuote::enquiry()`
- `storeQuote()` now requires `organization_enquiry_id`, locks the enquiry during creation, prevents duplicate agreements, starts the agreement in `draft`, and does not allocate seats or generate a code.
- `markQuotePaid()` now handles payment, seat allocation, and automatic shared-code generation transactionally.

### Main files changed for corporate workflow

- `laravel-app/Modules/Admin/app/Http/Controllers/VoucherAdminController.php`
- `laravel-app/Modules/Admin/routes/web.php`
- `laravel-app/Modules/Admin/resources/views/layouts/header.blade.php`
- `laravel-app/Modules/Admin/resources/views/organization_enquiries/index.blade.php`
- `laravel-app/Modules/Admin/resources/views/organization_quotes/create.blade.php`
- `laravel-app/Modules/Admin/resources/views/organization_quotes/index.blade.php`
- `laravel-app/Modules/Admin/resources/views/organization_quotes/show.blade.php`
- `laravel-app/app/Models/OrganizationEnquiry.php`
- `laravel-app/app/Models/OrganizationQuote.php`
- `laravel-app/database/migrations/2026_07_15_000001_link_organization_quotes_to_enquiries.php`

### Migration status

- Ran successfully on the local database:
  - `2026_07_15_000001_link_organization_quotes_to_enquiries`

## Validation completed

- PHP syntax checks passed for changed models, controller, and migration.
- Admin organisation routes were listed successfully.
- Blade views compiled successfully with `php artisan view:cache`.
- Focused corporate tests passed:
  - `tests/Feature/AdminCommercialWorkflowTest.php`
  - `tests/Feature/OrganizationCodeServiceTest.php`
  - Result: 7 tests passed, 46 assertions.
- Full test suite completed successfully:
  - Result: 74 tests passed, 224 assertions.
  - The shell wrapper timed out after the successful test summary, but the test runner itself reported all tests passing.

## Useful commands for tomorrow

```powershell
Set-Location F:\finalDCMB2\decodemybrain.test\laravel-app
& 'C:\xampp\php\php.exe' artisan migrate:status
& 'C:\xampp\php\php.exe' artisan test
& 'C:\xampp\php\php.exe' artisan route:list --path=admin/organization --except-vendor
```

## Recommended manual checks tomorrow

1. Open Admin → Organisation Enquiries and confirm Events no longer appears in the sidebar.
2. Submit a public organisation enquiry, then create its deal from the enquiry row.
3. Confirm the agreement starts as Draft with no seats and no active enterprise code.
4. Mark payment received and confirm that seats and one copyable enterprise code appear.
5. Confirm the same enquiry now shows Open agreement and cannot create a second deal.
6. Verify normal public login, assessment pause/resume, and landing-page Resume assessment behaviour with a real user account.

## Later work and incident record (15 July 2026)

This section records the additional work, investigation, live-data checks, and
known issues completed after the earlier D5 handover sections. It is intended
to prevent repeating the same investigations tomorrow.

### Admin navigation and visibility

- Fixed the Admin sidebar so it has its own vertical scroll area. Lower menu
  items no longer disappear below the browser viewport when the menu is long.
- Added reliable desktop click and keyboard handling for the User Management
  expandable menu. The prior theme JavaScript only handled the toggle reliably
  on mobile, which caused the User Management button to appear unresponsive.
- Shortened the visible menu label to **User Management**.
- Kept the User Management submenu, including User Brain Profiles, intact.
- Hid these top-level Admin menu entries only (routes/data were not deleted):
  Events, Ads, Brain Profiles, Star Ratings, and Video Tips.
- Renamed Organisation Quotes in the Admin sidebar to **Agreements**.

### Database migrations and current database audit

- Ran and verified all outstanding local Laravel migrations. `artisan
  migrate:status` showed every tracked migration as applied, including:
  - pricing package catalog;
  - organisation enquiries and shared-code fields;
  - refreshed public catalog;
  - organisation-enquiry-to-agreement link migration.
- Hardened legacy table migrations so an existing local database can be
  migrated repeatedly without failing because an old table already exists.
  Do not use `migrate:fresh`, `migrate:reset`, or destructive database commands
  on this workspace.
- The active local database is `decodemy_app`.
- At the time of the audit it contained: 67 users, 2 pricing packages, 2
  organisation enquiries, 1 organisation, 1 organisation agreement/quote,
  2 vouchers, 2 OTP rows, 1 entitlement grant, and 0 Cashier subscription rows.
  These are live/local counts and may change after further testing.
- The current enquiries are stored in `organization_enquiries`; they are not
  hidden by an Admin filter. The enquiry list is newest-first and has no
  status-based exclusion.
- Earlier lost organisation submissions cannot be reconstructed from this
  workspace: before the enquiry table/template flow was fixed, failing requests
  never reached the database. No backup/source rows were found.

### Database integrity issues found (not yet fully corrected)

- **Core price requires review:** the Core package is currently stored as
  `2030.00 USD/month` and displays as `$2,030`, while its prior-price label is
  `29`. This is live customer-facing data and may be an accidental decimal or
  admin-entry error. Do not change it without confirming the intended price.
- **Permanent agreement expiry contradiction:** a current organisation quote is
  marked `permanent`, but it also carries `access_ends_at`; one already-issued
  permanent entitlement also contains an end date. Permanent grants currently
  remain permanent because `is_permanent` takes precedence, but creation and
  cleanup should enforce NULL end dates for permanent access.
- `organization_quotes` and `organization_seats` have real foreign keys to
  their parent organisation/quote. Admin reviewer/creator ID fields are plain
  indexed values, not foreign keys, so deleting an Admin could leave historical
  audit references orphaned.
- Voucher tables contain legacy and new fields together for compatibility.
  Existing old vouchers must be preserved; any future schema cleanup needs a
  migration and a canonical-data plan, not deletion.

### Pricing and Stripe checkout incident

- Admin pricing pages read and write `pricing_packages`; public `/plans` and
  `/pricing` read that database catalog on each request. An Admin price change
  is therefore immediately visible to customers; it does not wait for a cache
  or WordPress sync.
- Admin saves now keep the local package update even if Stripe is temporarily
  unavailable. When a billing value changes without a successful Stripe sync,
  the stale Stripe price ID is cleared so checkout cannot charge an old amount.
- The original checkout error was not caused by absent `.env` keys. PHP had
  inherited `HTTP_PROXY`, `HTTPS_PROXY`, and `ALL_PROXY` pointing to the closed
  local address `127.0.0.1:9`. That prevented every Stripe request from
  reaching Stripe.
- Added a local-only Stripe proxy bypass in `AppServiceProvider`. It removes
  that exact dead local proxy setting and configures Stripe cURL requests to
  bypass it. It does not bypass a normal configured proxy or run outside the
  local environment.
- After connectivity was restored, the saved price ID returned Stripe's
  "No such price" response, proving it belonged to a different Stripe account
  or mode. Both visible paid packages were regenerated/repaired against the
  currently configured Stripe test account. No customer, subscription, or
  payment was created by that repair.
- Both current saved package price IDs were then retrieved directly from Stripe
  and verified active.
- Guest checkout now redirects to sign-up before any Stripe API request and
  preserves the selected package. This avoids losing the chosen package when
  Stripe is unavailable.
- The test secret was pasted into chat during this session. Rotate it in the
  Stripe Dashboard and update `.env`; never put any Stripe secret in this file
  or in Git.

### OTP and registration flow

- Local `.env` had `OTP_ENABLED=true` while the mail driver was `log`. That
  makes the app claim that it emailed a verification code even though customers
  cannot receive one, trapping them at the OTP screen.
- Local OTP is now disabled until a real mail provider is configured.
- A signup already waiting on the OTP page can now continue when OTP is
  disabled; it creates the native account instead of leaving the customer
  trapped.
- Added tests for the OTP-disabled pending-signup path and for a verified
  purchase signup reaching the code-or-payment choice page.

### Native login and local user data findings

- With `AUTH_DRIVER=native`, signup and sign-in use `decodemy_app`, not the
  removed WordPress service.
- New signup writes the canonical credential/account record to `users`; the
  local `wp_users` table remains a legacy compatibility/profile mirror used by
  existing package gates, assessment routing, and profile IDs. It is not an
  external WordPress database.
- Native sign-in searches `users` first by username, then email, and verifies
  the local password hash. It only reads `wp_users` after authentication for
  package/profile data. There is no intentional database-sync delay.
- During the investigation, the recent failed login identifier matched an
  existing local account with a WP ID and mirror row. The rejection happened
  at password verification, not because the user/profile record was delayed.
- Database audit found historical compatibility gaps: 22 native users lacked a
  `wp_users` mirror, while 153 old mirror rows had no native `users` record.
  There were no duplicate native WP IDs or duplicate mirror IDs.
- Current compatibility code repairs a verified native account missing a WP ID
  or mirror, and can materialise a legacy mirror-only account after its stored
  password is verified. Tests exist in `NativeLoginCompatibilityTest`.
- The registration flow is still not fully atomic: it initially commits the
  native user and then builds the mirror/entitlement. A future hardening task
  should make both writes one transaction and add database-level uniqueness for
  `wp_users.user_id`; do not describe the present flow as a background sync.

### WordPress-removal audit: remaining external dependencies

Normal local native signup/sign-in does not require WordPress because the
current configuration is `AUTH_DRIVER=native` and `WP_SSO_BRIDGE=false`.
However, WordPress is **not fully removed from every user workflow**:

- `/download-brain-results` still uses `checkUserPacakge`, which calls the old
  WordPress/YITH subscription API. This route can fail or delay for locally
  entitled users after WordPress removal.
- Profile updates still request a WordPress JWT and call WordPress update APIs.
- Password changes still call WordPress first, so local users cannot reliably
  change their password if WordPress is gone.
- The legacy non-native sign-in/sign-up branches and legacy WordPress import
  tooling remain in the codebase but are not used by the current native config.

The correct future removal is to replace the report-download gate with the
local entitlement service, make profile/password changes write local tables,
then retire legacy external branches only after full regression testing. Do
not drop `wp_users` until every local reader has been migrated; it currently
has 188 rows and is referenced by active application code.

### Verification completed during this later work

- Full Laravel suite was run after the Stripe/OTP/pricing work: **67 tests,
  194 assertions, all passed**.
- The later D5 corporate/assessment work recorded a subsequent full-suite
  pass: **74 tests, 224 assertions, all passed**. Use the later result as the
  latest recorded suite result, but rerun `artisan test` before any new change.
- Direct read-only Stripe checks verified both active paid package price IDs.
- Focused tests cover pricing propagation, Stripe temporary failure handling,
  organisation enquiry storage/Admin visibility, guest checkout package
  preservation, OTP fallback, and public organisation-code redemption.

### Tomorrow's priority order

1. Manually test Book Today with a Stripe test customer/card and confirm the
   Stripe Checkout page opens. The package prices themselves are verified, but
   no real Checkout Session was deliberately created during this incident fix.
2. Confirm the intended Core price before editing it.
3. Test new signup followed by a clean sign-in using the same credentials;
   capture the exact message if it fails. There should be no waiting period.
4. Replace the three remaining WordPress-dependent user routes with local
   equivalents before claiming WordPress has been completely removed.
5. Make registration plus mirror/entitlement creation atomic and backfill only
   native users missing their local mirror. Preserve legacy records.
