  <header class="site-nav">
    <a class="logo" href="{{ route('landing') }}">
      @include('public.partials.brand')
    </a>
    <nav class="nav-links" id="landing-navigation" aria-label="Main navigation">
      <a @class(['active' => request()->routeIs('landing')]) href="{{ route('landing') }}">Home</a>
      @if($publicPrograms->isNotEmpty())
      <details class="nav-dropdown" data-nav-dropdown>
        <summary @class(['active' => request()->routeIs('public.program.*')])>Programs</summary>
        <div class="nav-submenu">
          @foreach($publicPrograms as $programPackage)
          <a href="{{ route('public.program.'.$programPackage->publicProgramKey()) }}" @if(request()->routeIs('public.program.'.$programPackage->publicProgramKey())) aria-current="page" @endif>{{ $programPackage->title }}</a>
          @endforeach
        </div>
      </details>
      @endif
      <details class="nav-dropdown" data-nav-dropdown>
        <summary @class(['active' => request()->routeIs('public.science', 'public.method')])>Science</summary>
        <div class="nav-submenu">
          <a href="{{ route('public.science') }}#science" @if(request()->routeIs('public.science')) aria-current="page" @endif>Science</a>
          <a href="{{ route('public.method') }}" @if(request()->routeIs('public.method')) aria-current="page" @endif>My Limitless Method</a>
        </div>
      </details>
      <a href="{{ route('public.plans') }}">Pricing</a>
      <a class="organization-link" href="{{ route('organization.enquiry.create') }}">For organizations</a>

      @if(session('user_id'))<a class="mobile-account" href="{{ $assessmentAction['url'] }}">{{ $assessmentAction['label'] }}</a><a class="mobile-account" href="{{ url('logout') }}">Log out</a>@else<a class="mobile-account" href="{{ url('sign-in') }}">Log in</a>@endif
    </nav>
    <div class="nav-actions">
      @if(session('user_id'))
      <a class="btn" href="{{ $assessmentAction['url'] }}">{{ $assessmentAction['label'] }}</a>
      <a class="btn dark" href="{{ url('logout') }}">Log out</a>
      @else
      <a class="btn" href="{{ url('sign-in') }}">Log in</a>
      <a class="btn dark" href="{{ route('access.choice') }}">REGISTER</a>
      @endif
      <button class="mobile-menu" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="landing-navigation" data-menu-toggle>☰</button>
    </div>
  </header>
