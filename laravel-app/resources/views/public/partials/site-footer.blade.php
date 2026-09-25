<footer class="reference-footer">
  <div class="reference-footer-main">
    <div class="reference-footer-wrap reference-footer-grid">
      <div class="reference-footer-welcome">
        <p class="reference-footer-eyebrow">Welcome to</p>
        <h2>DecodeMyBrain®</h2>
        <p class="reference-footer-tagline">Decode your brain for limitless success and happiness.</p>
        <a class="reference-footer-cta" href="{{ route('access.choice') }}">Start your journey today</a>
        <div class="reference-footer-socials" aria-label="Social media">
          <a href="https://web.facebook.com/zebrabrain" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.45 2.89h-2.33v6.99A10 10 0 0 0 22 12Z"/></svg></a>
          <a href="https://www.youtube.com/@drsweta.adatia" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21.6 7.2a2.8 2.8 0 0 0-2-2C17.8 4.7 12 4.7 12 4.7s-5.8 0-7.6.5a2.8 2.8 0 0 0-2 2A29 29 0 0 0 2 12a29 29 0 0 0 .4 4.8 2.8 2.8 0 0 0 2 2c1.8.5 7.6.5 7.6.5s5.8 0 7.6-.5a2.8 2.8 0 0 0 2-2A29 29 0 0 0 22 12a29 29 0 0 0-.4-4.8ZM10 15.2V8.8l5.5 3.2Z"/></svg></a>
          <a href="https://www.linkedin.com/in/drswetaadatia/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 2h-17A1.5 1.5 0 0 0 2 3.5v17A1.5 1.5 0 0 0 3.5 22h17a1.5 1.5 0 0 0 1.5-1.5v-17A1.5 1.5 0 0 0 20.5 2ZM8 19H5V9h3ZM6.5 7.7A1.7 1.7 0 1 1 6.5 4a1.7 1.7 0 0 1 0 3.7ZM19 19h-3v-5.2c0-1.3-.5-2.1-1.6-2.1-1.2 0-1.8.8-1.8 2.1V19h-3V9h2.9v1.4A3.3 3.3 0 0 1 15.4 9c2.3 0 3.6 1.4 3.6 4.2Z"/></svg></a>
          <a href="https://www.instagram.com/decodemybrain" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle class="instagram-dot" cx="17.5" cy="6.5" r="1"/></svg></a>
        </div>
      </div>
      <nav class="reference-footer-links" aria-label="Footer navigation">
        <a href="{{ route('landing') }}">Home</a>
        <a href="{{ route('landing') }}#programs">Programs</a>
        <a href="{{ route('public.science') }}">Science</a>
        <a href="{{ route('public.plans') }}">Pricing</a>
        <a href="{{ route('organization.enquiry.create') }}">Corporate (Contact Us)</a>
      </nav>
      <img class="reference-footer-art" src="{{ asset('assets/landing-reference/96e59ceac9-main-art-03-1-e1735878419999.png') }}" alt="" width="2347" height="2084" loading="lazy">
    </div>
  </div>
  <div class="reference-footer-bottom">
    <div class="reference-footer-wrap reference-footer-legal">
      <a class="logo" href="{{ route('landing') }}" aria-label="DecodeMyBrain home">@include('public.partials.brand')</a>
      <nav aria-label="Legal links"><a href="{{ url('terms-and-conditions') }}#headingPrivacy">Privacy Policy</a><a href="{{ url('terms-and-conditions') }}">Terms &amp; Conditions</a></nav>
      <p>Copyright © {{ date('Y') }} DecodeMyBrain® – All rights reserved</p>
    </div>
  </div>
  <a class="reference-footer-top" href="#" aria-label="Back to top"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m6 15 6-6 6 6"/></svg></a>
</footer>
