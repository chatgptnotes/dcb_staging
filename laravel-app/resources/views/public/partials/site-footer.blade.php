  <footer class="footer">
    <div class="wrap footer-grid">
      <div>
        <a class="logo" href="{{ route('landing') }}" style="color:#fff">
          @include('public.partials.brand')
        </a>
        <p style="max-width:420px">Understand your brain. Build on your strengths. Make clearer choices across learning, work, relationships and life.</p>
      </div>
      <div><h4>Explore</h4><div class="footer-links"><a href="{{ route('landing') }}#programs">Programs</a><a href="{{ route('public.science') }}">Science</a><a href="{{ route('public.plans') }}">Pricing</a><a href="{{ route('organization.enquiry.create') }}">Organizations</a></div></div>
      <div><h4>Support</h4><div class="footer-links">@if(session('user_id'))<a href="{{ url('logout') }}">Log out</a>@else<a href="{{ url('sign-in') }}">Log in</a>@endif<a href="{{ url('terms-and-conditions') }}">Privacy</a><a href="{{ url('terms-and-conditions') }}">Terms</a></div></div>
    </div>
  </footer>
