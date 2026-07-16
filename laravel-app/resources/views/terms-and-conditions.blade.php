
@include('layouts.header')
<style>
    .accordion-button:not(.collapsed) {
    color: #fff;
    background-color: #000;
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .125);
}
</style>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
          <h1 class="h3 mb-0">Terms &amp; Conditions</h1>
          <small class="text-muted">Effective Date: <strong>2025-10-01</strong>
            &middot; Last Updated: <strong>2025-10-01</strong>
          </small>
        </div>

        <div class="btn-group">
          <a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
          <!-- <button class="btn btn-outline-primary" onclick="window.print()">
            <i class="bi bi-printer"></i> Print
          </button> -->
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <p class="lead">Welcome to <strong>DecodeMyBrain.com</strong> (“DecodeMyBrain,” “we,” “our,” or “us”). These Terms and Conditions (“Terms”) govern your access to and use of the DecodeMyBrain website, digital tools, assessments, reports, and any related services (collectively, the “Platform”). By accessing or using the Platform, you agree to be bound by these Terms. If you do not agree, you may not use the Platform.</p>

          <div class="accordion" id="termsAccordion">
            {{-- 1. Purpose --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingPurpose">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePurpose" aria-expanded="true" aria-controls="collapsePurpose">
                  1. Purpose of the Platform
                </button>
              </h2>
              <div id="collapsePurpose" class="accordion-collapse collapse show" aria-labelledby="headingPurpose" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  DecodeMyBrain provides self-assessment tools, personality and brain profile analyses, and educational resources designed to help users understand cognitive preferences and behavioral tendencies. These assessments are for <strong>informational and educational purposes only</strong> and are <strong>not a substitute for medical, psychological, or professional advice</strong>.
                </div>
              </div>
            </div>

            {{-- 2. Eligibility --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEligibility">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEligibility" aria-expanded="false" aria-controls="collapseEligibility">
                  2. Eligibility
                </button>
              </h2>
              <div id="collapseEligibility" class="accordion-collapse collapse" aria-labelledby="headingEligibility" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  You must be at least <strong>16 years old</strong> to use this Platform. If you are under 18, you must use the Platform with parental or guardian consent. By using the Platform, you confirm that you meet these eligibility requirements.
                </div>
              </div>
            </div>

            {{-- 3. User Accounts --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingAccounts">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccounts" aria-expanded="false" aria-controls="collapseAccounts">
                  3. User Accounts
                </button>
              </h2>
              <div id="collapseAccounts" class="accordion-collapse collapse" aria-labelledby="headingAccounts" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  To access certain features, you may need to create an account. You agree to:
                  <ul>
                    <li>Provide accurate and complete information.</li>
                    <li>Maintain the confidentiality of your login credentials.</li>
                    <li>Notify us immediately if you suspect unauthorized use of your account.</li>
                  </ul>
                  DecodeMyBrain is not liable for losses arising from unauthorized access to your account due to your negligence.
                </div>
              </div>
            </div>

            {{-- 4. Services and Payments --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingPayments">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePayments" aria-expanded="false" aria-controls="collapsePayments">
                  4. Services &amp; Payments
                </button>
              </h2>
              <div id="collapsePayments" class="accordion-collapse collapse" aria-labelledby="headingPayments" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  DecodeMyBrain may offer both free and paid services. All prices are displayed in applicable currencies and may vary based on location. By purchasing any service, you agree to:
                  <ul>
                    <li>Provide accurate billing information.</li>
                    <li>Authorize DecodeMyBrain (or its payment processor) to charge your payment method.</li>
                  </ul>
                  All payments are <strong>non-refundable</strong> unless otherwise stated under our Refund Policy.
                </div>
              </div>
            </div>

            {{-- 5. Intellectual Property --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingIP">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIP" aria-expanded="false" aria-controls="collapseIP">
                  5. Intellectual Property
                </button>
              </h2>
              <div id="collapseIP" class="accordion-collapse collapse" aria-labelledby="headingIP" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  All content, algorithms, assessments, text, graphics, logos, and software on the Platform are the <strong>intellectual property of DecodeMyBrain</strong> or its licensors. You may not copy, modify, distribute, reproduce, or create derivative works without written permission. The DecodeMyBrain name and logo are registered or unregistered trademarks of DecodeMyBrain and may not be used without authorization.
                </div>
              </div>
            </div>

            {{-- 6. User Content --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingUserContent">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUserContent" aria-expanded="false" aria-controls="collapseUserContent">
                  6. User Content
                </button>
              </h2>
              <div id="collapseUserContent" class="accordion-collapse collapse" aria-labelledby="headingUserContent" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  You may provide input data, answers, comments, or feedback through the Platform (“User Content”). By submitting User Content, you grant DecodeMyBrain a <strong>worldwide, royalty-free, non-exclusive license</strong> to use, analyze, and anonymize your data for improving our algorithms, research, and services. We do not sell or publicly share identifiable personal data.
                </div>
              </div>
            </div>

            {{-- 7. Privacy --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingPrivacy">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrivacy" aria-expanded="false" aria-controls="collapsePrivacy">
                  7. Privacy
                </button>
              </h2>
              <div id="collapsePrivacy" class="accordion-collapse collapse" aria-labelledby="headingPrivacy" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  Your privacy is important to us. Our Privacy Policy explains how we collect, use, and protect your personal data. By using the Platform, you consent to such data processing in accordance with the Privacy Policy.
                </div>
              </div>
            </div>

            {{-- 8. Disclaimer --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingDisclaimer">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDisclaimer" aria-expanded="false" aria-controls="collapseDisclaimer">
                  8. Disclaimer
                </button>
              </h2>
              <div id="collapseDisclaimer" class="accordion-collapse collapse" aria-labelledby="headingDisclaimer" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  DecodeMyBrain assessments are <strong>not medical or psychological diagnoses</strong>. All outputs, scores, and recommendations are <strong>interpretative insights</strong> based on algorithmic analysis and are intended for self-reflection and educational use only. DecodeMyBrain makes no guarantees about accuracy, completeness, or results derived from its reports.
                </div>
              </div>
            </div>

            {{-- 9. Limitation of Liability --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingLiability">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLiability" aria-expanded="false" aria-controls="collapseLiability">
                  9. Limitation of Liability
                </button>
              </h2>
              <div id="collapseLiability" class="accordion-collapse collapse" aria-labelledby="headingLiability" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  To the maximum extent permitted by law, DecodeMyBrain and its affiliates shall not be liable for:
                  <ul>
                    <li>Any indirect, incidental, or consequential damages.</li>
                    <li>Any loss of data, revenue, or profit.</li>
                    <li>Any decision made based on information from the Platform.</li>
                  </ul>
                  Your sole remedy for dissatisfaction is to stop using the Platform.
                </div>
              </div>
            </div>

            {{-- 10. User Conduct --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingConduct">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseConduct" aria-expanded="false" aria-controls="collapseConduct">
                  10. User Conduct
                </button>
              </h2>
              <div id="collapseConduct" class="accordion-collapse collapse" aria-labelledby="headingConduct" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  You agree not to:
                  <ul>
                    <li>Use the Platform for unlawful or harmful purposes.</li>
                    <li>Reverse-engineer or attempt to extract source code.</li>
                    <li>Interfere with system security or attempt unauthorized access.</li>
                    <li>Use automated tools (bots, crawlers) without permission.</li>
                  </ul>
                  Violation of these rules may result in account suspension or legal action.
                </div>
              </div>
            </div>

            {{-- 11. Third-Party Services --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThirdParty">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirdParty" aria-expanded="false" aria-controls="collapseThirdParty">
                  11. Third-Party Services
                </button>
              </h2>
              <div id="collapseThirdParty" class="accordion-collapse collapse" aria-labelledby="headingThirdParty" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  The Platform may include links to third-party websites or services. DecodeMyBrain is not responsible for the content, accuracy, or practices of such external sites.
                </div>
              </div>
            </div>

            {{-- 12. Termination --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTermination">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTermination" aria-expanded="false" aria-controls="collapseTermination">
                  12. Termination
                </button>
              </h2>
              <div id="collapseTermination" class="accordion-collapse collapse" aria-labelledby="headingTermination" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  DecodeMyBrain reserves the right to suspend or terminate your access to the Platform at any time for any violation of these Terms or for any other reason at its sole discretion.
                </div>
              </div>
            </div>

            {{-- 13. Changes to the Terms --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingChanges">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChanges" aria-expanded="false" aria-controls="collapseChanges">
                  13. Changes to the Terms
                </button>
              </h2>
              <div id="collapseChanges" class="accordion-collapse collapse" aria-labelledby="headingChanges" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  We may update these Terms from time to time. Updates will be posted on this page with a revised “Last Updated” date. Continued use of the Platform constitutes your acceptance of any changes.
                </div>
              </div>
            </div>

            {{-- 14. Governing Law --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingGoverning">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGoverning" aria-expanded="false" aria-controls="collapseGoverning">
                  14. Governing Law
                </button>
              </h2>
              <div id="collapseGoverning" class="accordion-collapse collapse" aria-labelledby="headingGoverning" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  These Terms are governed by and construed in accordance with the <strong>laws of England and Wales</strong>, without regard to its conflict of law principles. Users outside the UK agree that any disputes shall be resolved under the jurisdiction of competent courts in London, UK, unless otherwise required by local law.
                </div>
              </div>
            </div>

            {{-- 15. Contact --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingContact">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContact" aria-expanded="false" aria-controls="collapseContact">
                  15. Contact Information
                </button>
              </h2>
              <div id="collapseContact" class="accordion-collapse collapse" aria-labelledby="headingContact" data-bs-parent="#termsAccordion">
                <div class="accordion-body">
                  For questions, complaints, or inquiries about these Terms, contact:
                  <div class="mt-2">
                    <strong>DecodeMyBrain Legal Department</strong><br>
                    Email: <a href="mailto:legal@decodemybrain.com">legal@decodemybrain.com</a><br>
                    Website: <a href="https://www.decodemybrain.com" target="_blank" rel="noopener noreferrer">www.decodemybrain.com</a>
                  </div>
                </div>
              </div>
            </div>

          </div> {{-- end accordion --}}
        </div> {{-- card-body --}}
      </div> {{-- card --}}
    </div>
  </div>
</div>

@include('layouts.footer')

{{-- Optional small script to auto-open first accordion when JavaScript is disabled or to enhance behavior --}}
@push('scripts')
<script>
  // Bootstrap 5 tooltip/icon support (optional)
  document.addEventListener('DOMContentLoaded', function () {
    // nothing required here — kept for future enhancements
  });
</script>
@endpush
