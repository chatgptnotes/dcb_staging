CLIENT DELIVERY  /  22 SEPTEMBER 2026

Software TestSummary Report

DecodeMyBrain application

Review outcome: PASS - automated regression complete

All 132 automated regression tests passed after the missing invoice database update was applied locally. The previously reported payment-recording issue, DMB-QA-001, is fixed and verified in the local test environment. Account access, registration, assessment continuation, organisation access, payment recording and administrative workflows passed their implemented checks.

| Executed | Passed | Errors | Skipped |
| --- | --- | --- | --- |
| 132 | 132 | 0 | 0 |

100% test pass rate  |  561 assertions  |  6.88 seconds elapsed

Decision for the client

Automated regression validation is complete and DMB-QA-001 is closed for the tested local environment. The report is ready for client review. Complete the agreed deployment-environment acceptance checks before release approval; production deployment and client UAT remain outside this test result.

Document control

| Field | Value |
| --- | --- |
| Report ID / version | DMB-QA-2026-09-22 / 1.1 |
| Project / audience | DecodeMyBrain / client stakeholders and delivery team |
| Report and execution date | 22 September 2026 |
| Build reference | 6a648882adde556db28b6d0c87e90f86ebbf023b |
| Validation environment | Local application checkout; MySQL and selected in-memory SQLite fixtures |
| Approval state | Issued for review; client acceptance and release approval pending |

This document incorporates the previous QA PDF and a fresh automated test run. It reports observed software behaviour; it does not certify the scientific validity of assessment scores or claim conformance to a formal testing standard.


---

01 / Scope and test approach

Existing unit and application feature tests were executed against the current checkout. Feature tests exercise Laravel routes, controllers, sessions, validation and persistence without a browser. Selected payment, email and ownership tests use fakes or controlled responses; their passing results do not establish live provider delivery.

| Business area | Evidence in this run | Coverage boundary |
| --- | --- | --- |
| Registration and account access | Signup, duplicate handling, phone/date validation, OTP and legacy password compatibility. | Automated application checks; actual inbox delivery not verified. |
| Plans and public journey | Plan eligibility, catalogue display, access choice and purchase gates. | Server-rendered output and routing; visual/device checks pending. |
| Payments and invoices | Checkout ownership, entitlement lifecycle, duplicate recording and invoice retry logic. | MySQL recording retest passed; live Stripe payment and webhook delivery not verified. |
| Assessments and results | Saved progress, continuation and answer ownership. | Full questionnaire, score accuracy and final assessment PDF not tested in this run. |
| Organisation and vouchers | Seat claims, age rules, code validation, voucher usage and enquiry/agreement flows. | Selected implemented cases; exhaustive rule combinations not measured. |
| Administration | Access restriction, customer visibility, pricing and commercial controls. | Automated selected pages; full user-360 result accuracy requires UAT. |

Execution environment and controls

PHP 8.3.32; Laravel 10.39.0; PHPUnit 10.5.5; configuration: laravel-app/phpunit.xml. The application uses a local MySQL database. Selected test classes build in-memory SQLite schemas. Test fixtures use transaction rollback and/or targeted cleanup as implemented by the existing suite. The existing invoice migration was applied to the local database to add invoice_data and invoice_sent_at. Application code and migration source files were unchanged.

An initial sandbox-restricted attempt could not connect to MySQL. It was superseded by the completed run with local database access; those connection errors are excluded from the final totals. The first connected run found one missing-field error. After applying the pending invoice migration, both the targeted retest and full regression run passed. Final totals refer only to the post-fix full run.

Historical evidence

The 3 September PDF states that targeted registration and email-verification journeys passed, but supplies no execution count. A separate HTML/Markdown report states 106 tests and 429 assertions passed on that date. These are historical claims, not current results. Current inventory is 132 cases; the difference is not a measured increase in requirements coverage.


---

02 / Automated execution results

All 132 discovered cases passed: 27 unit cases and 105 feature cases. The post-fix JUnit record contains zero errors, zero assertion failures and zero skipped cases. The targeted payment retest also passed separately and is not added to the full-suite total.

| Test group | Run | Pass | Error |
| --- | --- | --- | --- |
| Unit / Example | 1 | 1 | 0 |
| Unit / Otp Service | 6 | 6 | 0 |
| Unit / Package Catalog | 6 | 6 | 0 |
| Unit / Stripe Price Manager | 4 | 4 | 0 |
| Unit / Voucher Service | 2 | 2 | 0 |
| Unit / Wp Hash Service | 8 | 8 | 0 |
| Feature / Admin Commercial Workflow | 11 | 11 | 0 |
| Feature / Admin Insights Pages | 2 | 2 | 0 |
| Feature / Admin User Management Visibility | 1 | 1 | 0 |
| Feature / Assessment Resume | 4 | 4 | 0 |
| Feature / Checkout And Login Ownership | 10 | 10 | 0 |
| Feature / Example | 1 | 1 | 0 |
| Feature / Landing Programs | 2 | 2 | 0 |
| Feature / Native Login Compatibility | 3 | 3 | 0 |
| Feature / Native Registration | 19 | 19 | 0 |
| Feature / Organization Code Service | 8 | 8 | 0 |
| Feature / Otp Flow | 6 | 6 | 0 |
| Feature / Pay First Gate | 8 | 8 | 0 |
| Feature / Payment Invoice | 3 | 3 | 0 |
| Feature / Permanent Voucher Database | 1 | 1 | 0 |
| Feature / Plan Age Eligibility | 2 | 2 | 0 |
| Feature / Public Access Choice | 2 | 2 | 0 |
| Feature / Public Plan Selection | 3 | 3 | 0 |
| Feature / Registration Access Flow | 7 | 7 | 0 |
| Feature / Stripe Webhook Entitlement | 12 | 12 | 0 |

Pass rate = 132 / 132. Counts include one unit scaffold assertion and one application-response smoke test; these are not separate business requirements. No code-coverage percentage was collected. The appendix lists each executed case.


---

03 / Resolved issue and verification

| Field | Finding |
| --- | --- |
| Issue ID / status | DMB-QA-001 / Fixed and verified locally; closed on 22 September 2026 |
| Title | Payment-recording test errors on missing invoice database field |
| Priority / severity | Original priority: High / provisional Major. Local payment-recording error resolved. Deployed-environment status remains unverified. |
| Affected test | StripeWebhookEntitlementTest::test_paid_checkout_is_recorded_once_with_customer_and_package |
| Expected result | A confirmed payment is recorded once with the correct registered customer and package; replay does not create a duplicate. |
| Original result | MySQL rejects the payment-record insert: Unknown column 'invoice_data' in 'field list' (SQLSTATE 42S22). |
| Retest result | Targeted payment check: 1 passed, 2 assertions. Full regression: 132 passed, 561 assertions, zero errors. |
| Confirmed cause | Migration status showed the invoice update as Pending. Applying it successfully added the required invoice fields and resolved the test error. |
| Fix applied | Existing migration 2026_09_19_000001_add_invoice_delivery_to_payment_records applied to the local database. |

Resolution and verification

1. Confirmed the invoice migration was pending in the local database.2. Applied the existing migration successfully; execution log retained.3. Reran the affected payment test: PASS (1 test, 2 assertions).4. Reran the full regression suite: PASS (132 tests, 561 assertions).5. Updated this report and closed DMB-QA-001 for the verified local environment.

Relevant migration: 2026_09_19_000001_add_invoice_delivery_to_payment_records.php. Schema correction applied and verified on 22 September 2026.

Interpretation

The three isolated invoice tests and the previously failing MySQL payment-recording test now pass. The fixed test confirms payment recording with the registered customer and package without duplication. This closure covers the local test environment; live payment, inbox delivery and deployment checks remain in the client acceptance checklist.

No errors were reported by the post-fix execution. A repository-wide defect inventory, security audit and external issue tracker review were not performed.


---

04 / Client acceptance and release gates

The following checks remain Not executed in this report. They form a proposed client UAT checklist; retain results and evidence against each ID before approval.

| ID / area | Acceptance criterion | Proposed owner |
| --- | --- | --- |
| UAT-01 / Purchase | Register an eligible user; pay in Stripe test mode; verify the correct account, plan, transaction and assessment access. | QA + client |
| UAT-02 / Messaging | Receive registration OTP, recovery email and payment invoice in the intended inbox; confirm links and attachment open. | QA |
| UAT-03 / Assessment | Complete a representative assessment; compare scoring against an approved reference; open and download the final report. | Client + QA |
| UAT-04 / Organisation | Process an enquiry and agreement, activate a code, claim a seat and verify limits and admin visibility. | Client + QA |
| UAT-05 / Administration | Reconcile a user’s plan, payment, status, results and scores across the admin screens. | Client |
| UAT-06 / Browser and mobile | Complete primary flows on agreed desktop/mobile browsers; check layout, keyboard use, error states and navigation. | QA + client |
| UAT-07 / Recovery | Verify declined/cancelled payment, interrupted assessment, repeated callbacks and invoice retry without duplicate access or charges. | QA |
| UAT-08 / Deployment | Confirm migrations and configuration; validate signed webhooks, access controls and operational monitoring in the acceptance environment. | Delivery owner |

Exit criteria

DMB-QA-001 is closed locally and the clean regression criterion is met with zero skips. Complete the agreed UAT cases with retained evidence. Triage any newly found issues and record accepted residual risks. Obtain named client and delivery-owner approval for the exact deployed build.

Additional assurance outside this run

Load/performance, penetration testing, comprehensive accessibility compliance, backup/restore and broad cross-device testing were not executed. Agree their required depth before release; no assurance for these areas is implied by the automated pass rate.

Approval record

| Role | Name / decision / date |
| --- | --- |
| QA reviewer | Pending |
| Delivery owner | Pending |
| Client authorised approver | Pending |


---

05 / Evidence and traceability

| Reference | Use in this report |
| --- | --- |
| E01 - Previous QA PDF | DecodeMyBrain-Targeted-QA-Validation-2026-09-03.pdf; historical targeted validation only. |
| E02 - Previous regression summary | QA_Test_Completion_Report_2026-08-17.html and .md; internal validation date is 3 September 2026 despite filename. Historical 106-test claim. |
| E03 - Delivery scope | DecodeMyBrain-Project-Plan-2-updated.pdf and DecodeMyBrain-Deliverables-v2.8.pdf; context for register/pay/assess/report and administration scope. Planning statements are not test evidence. |
| E04 - Current execution | evidence/regression-fixed.xml; authoritative per-case results, assertion counts and errors. |
| E05 - Runner transcript | evidence/regression-fixed.log; CLI summary: 132 passed, zero errors, 561 assertions, 6.88 seconds. |
| E06 - Test implementation | laravel-app/tests/Unit and tests/Feature at build 6a648882adde556db28b6d0c87e90f86ebbf023b. |
| E07 - Schema evidence | evidence/invoice-migration.log confirms successful application. evidence/payment-retest.xml and .log record the targeted pass. |

Reproduction

From laravel-app, run:php artisan test --log-junit=../reports/qa-2026-09-22/evidence/regression-fixed.xml

The results reflect the local database state at execution. A repeat run can differ if application data, configuration or schema changes. Feature cases use synthetic fixture identities and controlled provider responses where implemented.

Evidence integrity

regression-fixed.xmlSHA-256: 77d9742d7f7cb691ee8414bc76bc8438cc9e00fa886587ef57bd6f9d7ff05c4c

regression-fixed.logSHA-256: e2f52d9dd9c61b8b933a24e1571c5ad3fe4975eff214f0466364134626e025c7

Raw technical evidence is retained with the project. The client PDF omits machine-specific paths, credentials and raw database payloads. Appendix test IDs below are report-local references mapped to source class and method names.

Revision history

| Version / date | Change |
| --- | --- |
| 1.0 / 22 September 2026 | Initial report: 131 passed and one local schema error; original evidence retained. |
| 1.1 / 22 September 2026 | Applied pending invoice migration; targeted and full retests passed. DMB-QA-001 closed locally; 132 passed, 561 assertions. |


---

Appendix / Executed case register

Cases 1-20 of 132. Source identifiers map directly to E04 and E06.

| Case ID | Source class / test method (including dataset) | Result |
| --- | --- | --- |
| TC-001 | ExampleTest / test_that_true_is_true | PASS |
| TC-002 | OtpServiceTest / test_send_stores_hashed_code_and_emails_it | PASS |
| TC-003 | OtpServiceTest / test_correct_code_verifies_and_is_single_use | PASS |
| TC-004 | OtpServiceTest / test_wrong_code_is_rejected | PASS |
| TC-005 | OtpServiceTest / test_expired_code_is_rejected | PASS |
| TC-006 | OtpServiceTest / test_too_many_wrong_attempts_invalidates | PASS |
| TC-007 | OtpServiceTest / test_purpose_is_scoped | PASS |
| TC-008 | PackageCatalogTest / test_driver_and_is_cashier | PASS |
| TC-009 | PackageCatalogTest / test_exists_includes_free_and_known_plans_only | PASS |
| TC-010 | PackageCatalogTest / test_is_subscription_reflects_type | PASS |
| TC-011 | PackageCatalogTest / test_stripe_price_id_lookup | PASS |
| TC-012 | PackageCatalogTest / test_slug_for_price_id_reverse_lookup | PASS |
| TC-013 | PackageCatalogTest / test_blank_database_price_does_not_fall_back_to_config | PASS |
| TC-014 | StripePriceManagerTest / test_valid_existing_price_is_reused | PASS |
| TC-015 | StripePriceManagerTest / test_invalid_existing_price_is_replaced | PASS |
| TC-016 | StripePriceManagerTest / test_billing_change_creates_new_price | PASS |
| TC-017 | StripePriceManagerTest / test_missing_stripe_key_fails_before_creating_price | PASS |
| TC-018 | VoucherServiceTest / test_codes_are_normalized_before_hashing | PASS |
| TC-019 | VoucherServiceTest / test_normalization_rejects_non_alphanumeric_code_content | PASS |
| TC-020 | WpHashServiceTest / test_accepts_correct_password_for_wp_bcrypt_hash | PASS |


---

Appendix / Executed case register

Cases 21-40 of 132. Source identifiers map directly to E04 and E06.

| Case ID | Source class / test method (including dataset) | Result |
| --- | --- | --- |
| TC-021 | WpHashServiceTest / test_rejects_wrong_password_for_wp_bcrypt_hash | PASS |
| TC-022 | WpHashServiceTest / test_accepts_correct_password_for_phpass_hash | PASS |
| TC-023 | WpHashServiceTest / test_rejects_wrong_password_for_phpass_hash | PASS |
| TC-024 | WpHashServiceTest / test_accepts_plain_bcrypt_hash | PASS |
| TC-025 | WpHashServiceTest / test_rejects_malformed_hashes | PASS |
| TC-026 | WpHashServiceTest / test_rejects_overlong_password | PASS |
| TC-027 | WpHashServiceTest / test_needs_rehash_only_for_wordpress_formats | PASS |
| TC-028 | AdminCommercialWorkflowTest / test_admin_can_change_the_public_price_before_stripe_is_configured | PASS |
| TC-029 | AdminCommercialWorkflowTest / test_public_purchase_cta_uses_the_current_admin_plan_title | PASS |
| TC-030 | AdminCommercialWorkflowTest / test_admin_price_change_reaches_customers_when_stripe_is_temporarily_unavailable | PASS |
| TC-031 | AdminCommercialWorkflowTest / test_admin_can_save_an_enquiry_only_plan_while_stripe_is_configured | PASS |
| TC-032 | AdminCommercialWorkflowTest / test_public_organisation_enquiry_is_stored_and_visible_to_admin | PASS |
| TC-033 | AdminCommercialWorkflowTest / test_admin_starts_a_business_agreement_from_the_received_enquiry_only_once | PASS |
| TC-034 | AdminCommercialWorkflowTest / test_admin_can_email_and_resend_an_active_organisation_code_to_the_enquiry_contact | PASS |
| TC-035 | AdminCommercialWorkflowTest / test_agreement_shows_only_its_claimed_enterprise_code_users | PASS |
| TC-036 | AdminCommercialWorkflowTest / test_payment_toggle_on_a_new_deal_activates_seats_and_the_enterprise_code_after_save | PASS |
| TC-037 | AdminCommercialWorkflowTest / test_admin_can_rotate_an_enterprise_code_without_changing_seat_usage | PASS |
| TC-038 | AdminCommercialWorkflowTest / test_agreements_list_shows_claimed_seat_usage_and_the_requested_sidebar_order | PASS |
| TC-039 | AdminInsightsPagesTest / test_redesigned_admin_pages_are_available_to_admins | PASS |
| TC-040 | AdminInsightsPagesTest / test_insight_pages_require_an_admin_session | PASS |


---

Appendix / Executed case register

Cases 41-60 of 132. Source identifiers map directly to E04 and E06.

| Case ID | Source class / test method (including dataset) | Result |
| --- | --- | --- |
| TC-041 | AdminUserManagementVisibilityTest / test_admin_sees_registered_voucher_user_on_plan_and_status_pages | PASS |
| TC-042 | AssessmentResumeTest / test_standard_assessment_resumes_at_the_next_unanswered_question | PASS |
| TC-043 | AssessmentResumeTest / test_dimensional_assessment_resumes_after_a_completed_standard_assessment | PASS |
| TC-044 | AssessmentResumeTest / test_completed_assessments_do_not_offer_resume | PASS |
| TC-045 | AssessmentResumeTest / test_landing_shows_resume_only_for_a_signed_in_user_with_saved_progress | PASS |
| TC-046 | CheckoutAndLoginOwnershipTest / test_guest_cannot_login_using_a_checkout_url | PASS |
| TC-047 | CheckoutAndLoginOwnershipTest / test_other_members_checkout_is_rejected_without_changes | PASS |
| TC-048 | CheckoutAndLoginOwnershipTest / test_legacy_checkout_without_an_owner_cannot_select_account_by_email | PASS |
| TC-049 | CheckoutAndLoginOwnershipTest / test_missing_checkout_id_never_claims_payment_success | PASS |
| TC-050 | CheckoutAndLoginOwnershipTest / test_paid_owner_keeps_registered_identity_and_receives_access | PASS |
| TC-051 | CheckoutAndLoginOwnershipTest / test_unpaid_complete_subscription_does_not_grant_access | PASS |
| TC-052 | CheckoutAndLoginOwnershipTest / test_login_preserves_answers_and_checks_attempt_ownership with data set "own unfinished attempt" | PASS |
| TC-053 | CheckoutAndLoginOwnershipTest / test_login_preserves_answers_and_checks_attempt_ownership with data set "another members attempt" | PASS |
| TC-054 | CheckoutAndLoginOwnershipTest / test_login_preserves_answers_and_checks_attempt_ownership with data set "guest adopted without generating results" | PASS |
| TC-055 | CheckoutAndLoginOwnershipTest / test_login_preserves_answers_and_checks_attempt_ownership with data set "guest preserved when member has an attempt" | PASS |
| TC-056 | ExampleTest / test_the_application_returns_a_successful_response | PASS |
| TC-057 | LandingProgramsTest / test_saved_package_changes_appear_on_cards_and_details | PASS |
| TC-058 | LandingProgramsTest / test_card_visibility_and_order_follow_admin_catalog | PASS |
| TC-059 | NativeLoginCompatibilityTest / test_verified_user_without_a_legacy_identity_is_repaired_on_login | PASS |
| TC-060 | NativeLoginCompatibilityTest / test_mirror_only_account_cannot_crash_native_sign_in | PASS |


---

Appendix / Executed case register

Cases 61-80 of 132. Source identifiers map directly to E04 and E06.

| Case ID | Source class / test method (including dataset) | Result |
| --- | --- | --- |
| TC-061 | NativeLoginCompatibilityTest / test_mirror_only_account_is_activated_after_email_reset | PASS |
| TC-062 | NativeRegistrationTest / test_signup_page_loads | PASS |
| TC-063 | NativeRegistrationTest / test_login_page_sends_new_visitors_to_the_access_choice | PASS |
| TC-064 | NativeRegistrationTest / test_valid_registration_creates_account_and_logs_in | PASS |
| TC-065 | NativeRegistrationTest / test_pay_first_registration_with_selected_plan_redirects_to_checkout | PASS |
| TC-066 | NativeRegistrationTest / test_new_public_purchase_registration_reaches_checkout | PASS |
| TC-067 | NativeRegistrationTest / test_age_ineligible_plan_selection_does_not_create_an_account | PASS |
| TC-068 | NativeRegistrationTest / test_duplicate_email_is_rejected | PASS |
| TC-069 | NativeRegistrationTest / test_duplicate_username_is_rejected | PASS |
| TC-070 | NativeRegistrationTest / test_duplicate_username_reopens_the_public_purchase_registration_modal | PASS |
| TC-071 | NativeRegistrationTest / test_underage_is_rejected | PASS |
| TC-072 | NativeRegistrationTest / test_future_dob_is_rejected | PASS |
| TC-073 | NativeRegistrationTest / test_iso_date_of_birth_format_is_rejected | PASS |
| TC-074 | NativeRegistrationTest / test_password_mismatch_is_rejected | PASS |
| TC-075 | NativeRegistrationTest / test_supported_country_phone_numbers_are_normalized with data set "United Arab Emirates" | PASS |
| TC-076 | NativeRegistrationTest / test_supported_country_phone_numbers_are_normalized with data set "India" | PASS |
| TC-077 | NativeRegistrationTest / test_supported_country_phone_numbers_are_normalized with data set "USA" | PASS |
| TC-078 | NativeRegistrationTest / test_phone_country_and_digits_are_required_and_length_checked | PASS |
| TC-079 | NativeRegistrationTest / test_new_user_can_log_in_natively_after_signup | PASS |
| TC-080 | NativeRegistrationTest / test_login_with_selected_plan_redirects_to_checkout | PASS |


---

Appendix / Executed case register

Cases 81-100 of 132. Source identifiers map directly to E04 and E06.

| Case ID | Source class / test method (including dataset) | Result |
| --- | --- | --- |
| TC-081 | OrganizationCodeServiceTest / test_paid_quote_shared_code_claims_exactly_one_available_seat | PASS |
| TC-082 | OrganizationCodeServiceTest / test_organisation_code_rejects_an_out_of_range_age_without_consuming_a_seat | PASS |
| TC-083 | OrganizationCodeServiceTest / test_out_of_range_dob_is_rejected_before_native_signup_creates_an_account | PASS |
| TC-084 | OrganizationCodeServiceTest / test_member_code_is_accepted_through_the_actual_user_access_form | PASS |
| TC-085 | OrganizationCodeServiceTest / test_guest_can_validate_an_organisation_code_before_registration_then_claim_it_after_sign_in | PASS |
| TC-086 | OrganizationCodeServiceTest / test_organisation_code_confirmation_cannot_be_opened_by_another_user | PASS |
| TC-087 | OrganizationCodeServiceTest / test_admin_can_disable_and_reenable_the_same_existing_organisation_code | PASS |
| TC-088 | OrganizationCodeServiceTest / test_admin_creates_an_unpaid_agreement_from_an_enquiry_then_payment_activates_the_shared_code | PASS |
| TC-089 | OtpFlowTest / test_registration_requires_otp_then_creates_account | PASS |
| TC-090 | OtpFlowTest / test_registration_wrong_otp_does_not_create_account | PASS |
| TC-091 | OtpFlowTest / test_pending_signup_is_not_trapped_when_otp_is_disabled | PASS |
| TC-092 | OtpFlowTest / test_verified_purchase_signup_reaches_checkout | PASS |
| TC-093 | OtpFlowTest / test_login_does_not_send_or_require_an_otp | PASS |
| TC-094 | OtpFlowTest / test_login_wrong_password_never_sends_otp | PASS |
| TC-095 | PayFirstGateTest / test_free_first_lets_free_user_into_intro | PASS |
| TC-096 | PayFirstGateTest / test_pay_first_redirects_free_user_to_landing | PASS |
| TC-097 | PayFirstGateTest / test_pay_first_redirects_guest_to_sign_in | PASS |
| TC-098 | PayFirstGateTest / test_pay_first_lets_paid_user_into_intro | PASS |
| TC-099 | PayFirstGateTest / test_paid_user_can_reach_legacy_brain_results_without_wordpress_subscription_api | PASS |
| TC-100 | PayFirstGateTest / test_free_user_is_blocked_from_legacy_brain_results | PASS |


---

Appendix / Executed case register

Cases 101-120 of 132. Source identifiers map directly to E04 and E06.

| Case ID | Source class / test method (including dataset) | Result |
| --- | --- | --- |
| TC-101 | PayFirstGateTest / test_small_group_user_can_reach_report_download | PASS |
| TC-102 | PayFirstGateTest / test_guest_checkout_preserves_package_and_redirects_to_signup | PASS |
| TC-103 | PaymentInvoiceTest / test_confirmed_payment_sends_one_invoice_to_registered_email | PASS |
| TC-104 | PaymentInvoiceTest / test_unpaid_session_waits_for_settlement | PASS |
| TC-105 | PaymentInvoiceTest / test_delivery_failure_preserves_payment_for_retry | PASS |
| TC-106 | PermanentVoucherDatabaseTest / test_permanent_voucher_is_single_use_and_grants_the_selected_package | PASS |
| TC-107 | PlanAgeEligibilityTest / test_ineligible_logged_in_user_cannot_select_or_directly_checkout_a_plan | PASS |
| TC-108 | PlanAgeEligibilityTest / test_eligible_logged_in_user_can_continue_to_checkout | PASS |
| TC-109 | PublicAccessChoiceTest / test_landing_assessment_choice_is_public_and_pay_myself_reaches_plans | PASS |
| TC-110 | PublicAccessChoiceTest / test_invalid_public_code_stays_on_choice_screen_with_an_error | PASS |
| TC-111 | PublicPlanSelectionTest / test_signed_in_customer_selecting_a_plan_reaches_checkout | PASS |
| TC-112 | PublicPlanSelectionTest / test_guest_cannot_use_the_signed_in_plan_continuation_route | PASS |
| TC-113 | PublicPlanSelectionTest / test_invalid_or_free_plan_cannot_enter_the_purchase_flow | PASS |
| TC-114 | RegistrationAccessFlowTest / test_organisation_code_replaces_old_purchase_and_voucher_context | PASS |
| TC-115 | RegistrationAccessFlowTest / test_existing_mixed_session_ignores_old_form_fields | PASS |
| TC-116 | RegistrationAccessFlowTest / test_organisation_still_rejects_adults | PASS |
| TC-117 | RegistrationAccessFlowTest / test_pay_myself_restores_plan_age_validation | PASS |
| TC-118 | RegistrationAccessFlowTest / test_invalid_code_preserves_existing_flow | PASS |
| TC-119 | RegistrationAccessFlowTest / test_voucher_replaces_organisation_context | PASS |
| TC-120 | RegistrationAccessFlowTest / test_register_cta_uses_access_choice | PASS |


---

Appendix / Executed case register

Cases 121-132 of 132. Source identifiers map directly to E04 and E06.

| Case ID | Source class / test method (including dataset) | Result |
| --- | --- | --- |
| TC-121 | StripeWebhookEntitlementTest / test_checkout_session_completed_grants_package_via_metadata | PASS |
| TC-122 | StripeWebhookEntitlementTest / test_paid_checkout_is_recorded_once_with_customer_and_package | PASS |
| TC-123 | StripeWebhookEntitlementTest / test_checkout_billing_name_does_not_replace_the_registered_profile_name | PASS |
| TC-124 | StripeWebhookEntitlementTest / test_admin_payments_prefer_the_registered_customer_for_recorded_checkout | PASS |
| TC-125 | StripeWebhookEntitlementTest / test_unpaid_checkout_session_does_not_grant | PASS |
| TC-126 | StripeWebhookEntitlementTest / test_subscription_active_grants_via_price_id_when_no_metadata_package | PASS |
| TC-127 | StripeWebhookEntitlementTest / test_subscription_deleted_downgrades_to_free | PASS |
| TC-128 | StripeWebhookEntitlementTest / test_past_due_keeps_access_during_dunning | PASS |
| TC-129 | StripeWebhookEntitlementTest / test_canceled_subscription_revokes | PASS |
| TC-130 | StripeWebhookEntitlementTest / test_unpaid_checkout_with_complete_status_does_not_grant | PASS |
| TC-131 | StripeWebhookEntitlementTest / test_entitlement_service_creates_mirror_when_missing | PASS |
| TC-132 | StripeWebhookEntitlementTest / test_unknown_user_is_ignored_safely | PASS |
