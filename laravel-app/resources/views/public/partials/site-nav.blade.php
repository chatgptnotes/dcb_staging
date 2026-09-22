  <header class="site-nav">
    <a class="logo" href="{{ route('landing') }}">
      @include('public.partials.brand')
    </a>
    <nav class="nav-links" id="landing-navigation" aria-label="Main navigation">
      <a @class(['active' => request()->routeIs('landing')]) href="{{ route('landing') }}">Home</a>
      <a href="{{ route('landing') }}#programs">Programs</a>
      <a @class(['active' => request()->routeIs('public.science')]) href="{{ route('public.science') }}">Science</a>
      <a href="{{ route('public.plans') }}">Pricing</a>
      <a class="organization-link" href="{{ route('organization.enquiry.create') }}">For organizations</a>

      @if(session('user_id'))<a class="mobile-account" href="{{ url('dashboard') }}">Dashboard</a><a class="mobile-account" href="{{ url('logout') }}">Log out</a>@else<a class="mobile-account" href="{{ url('sign-in') }}">Log in</a>@endif
    </nav>
    <div class="nav-actions">
      @if(session('user_id'))
      <a class="btn" href="{{ url('dashboard') }}">Dashboard</a>
      @if($resumeRoute ?? null)<a class="btn dark" href="{{ route('assessment.resume') }}">Resume assessment</a>@else<a class="btn dark" href="{{ url('logout') }}">Log out</a>@endif
      @else
      <a class="btn" href="{{ url('sign-in') }}">Log in</a>
      <a class="btn dark" href="{{ route('access.choice') }}">REGISTER</a>
      @endif
      <button class="mobile-menu" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="landing-navigation" data-menu-toggle>☰</button>
    </div>
  </header>
