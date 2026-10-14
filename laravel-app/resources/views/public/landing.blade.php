<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DecodeMyBrain — Understand how your mind works</title>
<meta name="description" content="Discover your natural strengths with DecodeMyBrain. Explore whole-brain development programs for learning, work, relationships and personal growth.">
<link rel="stylesheet" href="{{ asset('assets/landing-v5/landing.css') }}">
<link rel="stylesheet" href="{{ asset('assets/landing-v5/refresh.css') }}">
<script src="{{ asset('assets/landing-v5/landing.js') }}" defer></script>
</head>
<body>
<div id="screen-home" class="screen site">
@include('public.partials.site-nav')

  @if(session('fail'))<div class="notice" role="alert">{{ session('fail') }}</div>@endif
  @if(session('success'))<div class="notice success" role="status">{{ session('success') }}</div>@endif
  <main>
  <div class="hero-shell">
    <section class="hero" aria-label="DecodeMyBrain introduction">
      <article class="slide yellow active">
        <div class="slide-copy">
          <div class="kicker">A whole-brain ecosystem</div>
          <h1>Decode Your Brain, Unleash Your Strengths &amp; Master Your Life.</h1>
          <p>A Whole Brain Ecosystem for Lifetime of Clarity, Confidence &amp; Success.</p>
          <div class="actions">
            <a class="btn dark" href="#what-is-dmb">Understand DecodeMyBrain</a>
            <a class="btn" href="{{ route('public.plans') }}">Explore packages</a>
          </div>
        </div>
        <div class="hero-art">
          <svg viewBox="0 0 420 380" fill="none">
            <path d="M201 108c-42-58-136-14-109 57-39 33-21 101 28 108 10 56 86 65 114 21 48 22 101-24 82-72 45-31 30-105-23-115-7-47-66-66-92 1Z" stroke="#111" stroke-width="7"/>
            <path d="M177 111c-29 18-29 55-5 69-21 12-21 43-5 59M244 104c27 20 26 55 3 72 22 14 18 47-2 60M135 163c26 0 39 13 40 34M285 164c-27 1-38 14-40 34" stroke="#111" stroke-width="6" stroke-linecap="round"/>
            <path d="M206 50l-3-35M259 62l19-31M306 95l30-18M334 146l36-3M154 62l-18-31M111 99L78 83" stroke="#111" stroke-width="6" stroke-linecap="round"/>
            <circle cx="210" cy="190" r="29" stroke="#111" stroke-width="6"/>
            <path d="M197 191l11 12 18-27" stroke="#111" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </article>

      <article class="slide mint">
        <div class="slide-copy">
          <div class="kicker">Clarity for real decisions</div>
          <h1>Understand your unique capabilities and strengths.</h1>
          <p>Make informed future choices with greater clarity and confidence.</p>
          <div class="actions"><a class="btn dark" href="#how-it-helps">See how it helps</a></div>
        </div>
        <div class="hero-art">
          <svg viewBox="0 0 420 380" fill="none">
            <circle cx="210" cy="190" r="120" stroke="#111" stroke-width="6"/>
            <path d="M120 190h180M210 100v180" stroke="#111" stroke-width="6" stroke-linecap="round"/>
            <path d="M151 145c18-25 53-34 80-18 28-9 60 10 66 40 18 22 8 58-19 70-12 27-48 38-73 20-30 9-61-11-65-41-20-18-15-54 11-71Z" stroke="#111" stroke-width="5"/>
            <path d="M188 151c-14 11-14 29 0 40-10 12-6 31 8 39M237 147c13 11 13 29 1 39 10 14 5 32-9 40" stroke="#111" stroke-width="4" stroke-linecap="round"/>
          </svg>
        </div>
      </article>

      <article class="slide aqua">
        <div class="slide-copy">
          <div class="kicker">Assessment + insight</div>
          <h1>Powered by a Forbes-recognized assessment battery.</h1>
          <p>Meaningful insights designed to support informed decision-making.</p>
          <div class="actions"><a class="btn dark" href="{{ route('public.science') }}">Explore the science</a></div>
        </div>
        <div class="hero-art">
          <svg viewBox="0 0 420 380" fill="none">
            <rect x="90" y="65" width="240" height="250" rx="24" stroke="#111" stroke-width="6"/>
            <path d="M135 125h150M135 165h150M135 205h95M135 245h120" stroke="#111" stroke-width="6" stroke-linecap="round"/>
            <circle cx="280" cy="245" r="44" fill="#F5C94C" stroke="#111" stroke-width="6"/>
            <path d="M260 245l13 14 28-35" stroke="#111" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </article>

      <article class="slide orange">
        <div class="slide-copy">
          <div class="kicker">For every stage of life</div>
          <h1>Built for all age groups.</h1>
          <p>Advancing human understanding in the age of AI.</p>
          <div class="actions"><a class="btn dark" href="#programs">Find your program</a></div>
        </div>
        <div class="hero-art">
          <svg viewBox="0 0 420 380" fill="none">
            <path d="M91 296V149l78-58v205M169 296V112l82-55v239M251 296V150l78-46v192" stroke="#111" stroke-width="6" stroke-linejoin="round"/>
            <circle cx="131" cy="130" r="25" fill="#F5C94C" stroke="#111" stroke-width="5"/>
            <circle cx="210" cy="96" r="25" fill="#84D6A5" stroke="#111" stroke-width="5"/>
            <circle cx="290" cy="132" r="25" fill="#9EDDDF" stroke="#111" stroke-width="5"/>
            <path d="M78 296h266" stroke="#111" stroke-width="7" stroke-linecap="round"/>
          </svg>
        </div>
      </article>

      <div class="hero-arrows"><button type="button" data-slide-prev aria-label="Previous banner">←</button><button type="button" data-slide-next aria-label="Next banner">→</button></div>
      <div class="hero-dots" id="heroDots"></div><button type="button" class="hero-pause" aria-pressed="false">Pause banners</button>
    </section>
  </div>

  @include('public.partials.reference-content')
  </main>
@include('public.partials.site-footer')
</div>




@php
  $resources = [
    ['id' => 'cases', 'title' => 'Case Studies', 'url' => asset('assets/documents/dmb-case-studies.pdf')],
    ['id' => 'report', 'title' => 'Sample Report', 'url' => asset('assets/documents/dmb-sample-report.pdf')],
    ['id' => 'publication', 'title' => 'Publication — Future Ready Now',
      'url' => 'https://drive.google.com/file/d/1DaEXzIKm0H1TpVsSgeotSO_gNNlvI692/preview',
      'openUrl' => 'https://drive.google.com/file/d/1DaEXzIKm0H1TpVsSgeotSO_gNNlvI692/view'],
    ['id' => 'frameworks', 'title' => 'DecodeMyBrain® Frameworks', 'url' => asset('assets/documents/dmb-main-booklet.pdf')],
  ];
@endphp
@foreach($resources as $resource)
<dialog class="info-dialog pdf-dialog" id="resource-{{ $resource['id'] }}" aria-labelledby="resource-{{ $resource['id'] }}-title">
  <div class="dialog-bar">
    <h2 id="resource-{{ $resource['id'] }}-title">{{ $resource['title'] }}</h2>
    <button type="button" class="btn" data-close-dialog>Close ✕</button>
  </div>
  <div class="pdf-toolbar">
    <p>If the PDF does not display, open it in a new tab.</p>
    <a class="btn" href="{{ $resource['openUrl'] ?? $resource['url'] }}" target="_blank" rel="noopener">Open PDF ↗</a>
  </div>
  <iframe class="resource-pdf" data-pdf-src="{{ $resource['url'] }}" title="{{ $resource['title'] }} PDF viewer" allow="fullscreen"></iframe>
</dialog>
@endforeach

@foreach($packages as $package)
<dialog class="info-dialog" id="program-{{ $package->slug }}" aria-label="{{ $package->title }}">
  <div class="dialog-bar"><span class="logo">@include('public.partials.brand')</span><button type="button" class="btn" data-close-dialog>Close ✕</button></div>
  <section class="section"><div class="wrap copy">
    @if($package->ageRangeLabel())<span class="eyebrow">{{ $package->ageRangeLabel() }}</span>@endif
    <h2>{{ $package->title }}</h2>
    @if($package->subtitle)<p>{{ $package->subtitle }}</p>@endif
    <ul class="program-features">@foreach($package->featureList() as $feature)<li>{{ $feature }}</li>@endforeach</ul>
    <a class="btn dark" href="{{ ($package->cta_mode ?? 'purchase') === 'enquiry' ? route('organization.enquiry.create') : route('public.plans').'#package-'.$package->slug }}">{{ $package->button_text }}</a>
  </div></section>
</dialog>
@endforeach

</body>
</html>
