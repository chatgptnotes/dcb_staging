<nav class="nav">
  <a class="brand" href="{{ route('landing') }}">@include('public.partials.brand')</a>
  <div class="nav-links"><a href="{{ route('landing') }}">Home</a><a style="display: none;" href="{{ route('landing') }}#how-it-works">How it works</a><a href="{{ route('public.plans') }}">Plans</a><a href="{{ route('organization.enquiry.create') }}">For organizations</a>@if(session('user_id'))<a href="{{ url('dashboard') }}">Dashboard</a><a class="button secondary" style="min-height:44px;padding:9px 18px" href="{{ url('logout') }}">Log out</a>@else<a class="button secondary" style="min-height:44px;padding:9px 18px" href="{{ url('sign-in') }}">Log in</a>@endif</div>
</nav>
