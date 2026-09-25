@php
    $sciencePage = $sciencePage ?? 'science';
    $pageTitle = $sciencePage === 'method' ? 'My Limitless Method' : 'The Science';
@endphp
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $pageTitle }} — DecodeMyBrain</title>
<meta name="description" content="{{ $sciencePage === 'method' ? 'Discover, direct, develop and drive: explore the four pillars of the DecodeMyBrain My Limitless Method.' : 'Explore the science behind DecodeMyBrain, the four brain types and whole-brain personal growth.' }}">
<link rel="stylesheet" href="{{ asset('assets/landing-v5/landing.css') }}">
<link rel="stylesheet" href="{{ asset('assets/landing-reference/information-base.css') }}">
<link rel="stylesheet" href="{{ asset('assets/landing-reference/'.$sciencePage.'.css') }}">
<script src="{{ asset('assets/landing-v5/landing.js') }}" defer></script>
</head>
<body>
<div class="site">
@include('public.partials.site-nav')
<main class="reference-landing reference-information elementor-kit-5">
@include('public.partials.'.$sciencePage.'-content')
</main>
@include('public.partials.site-footer')
</div>
</body>
</html>
