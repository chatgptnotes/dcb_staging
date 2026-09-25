<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $programTitle }} — DecodeMyBrain</title>
<meta name="description" content="Explore the DecodeMyBrain {{ $programTitle }} program, its approach to personal growth, and how to get started.">
<link rel="stylesheet" href="{{ asset('assets/landing-v5/landing.css') }}">
<link rel="stylesheet" href="{{ asset('assets/landing-reference/'.$program.'.css') }}">
<script src="{{ asset('assets/landing-v5/landing.js') }}" defer></script>
</head>
<body>
<div class="site">
@include('public.partials.site-nav')
<main>
@include('public.partials.program-'.$program)
<section class="section" style="background:#fff7e8">
<div class="wrap center">
<h2>Explore {{ $programTitle }} with DecodeMyBrain</h2>
@if($programPackage->subtitle)<p>{{ $programPackage->subtitle }}</p>@endif
@if($programPackage->featureList())
<ul class="catalog-program-features program-detail-features">
@foreach($programPackage->featureList() as $feature)<li>{{ $feature }}</li>@endforeach
</ul>
@endif
<div class="actions" style="justify-content:center">
<a class="btn dark" href="{{ ($programPackage->cta_mode ?? 'purchase') === 'enquiry' ? route('organization.enquiry.create') : route('public.plans').'#package-'.$programPackage->slug }}">{{ $programPackage->button_text ?: 'View plans & pricing' }}</a>
<a class="btn" href="{{ route('organization.enquiry.create') }}">Contact us</a>
</div>
</div>
</section>
</main>
@include('public.partials.site-footer')
</div>
</body>
</html>
