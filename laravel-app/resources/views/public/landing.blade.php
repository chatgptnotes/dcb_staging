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




<dialog class="info-dialog" id="resource-cases" aria-label="Cases"><div class="dialog-bar"><span class="logo">@include('public.partials.brand')</span><button type="button" class="btn" data-close-dialog>Close ✕</button></div>

  <section class="resource-hero"><div class="wrap">
    <span class="eyebrow">Case Studies</span>
    <h1>Case Studies</h1>
    <p>Explore how the DecodeMyBrain approach has been applied to family communication, teamwork and career decisions.</p>

  </div></section>
  <section><div class="wrap case-grid">
    <article class="case-card"><h3>Family Dynamics</h3><p><b>Challenge:</b> recurring conflict and misunderstanding linked to different communication and emotional-response styles.</p><p><b>Approach:</b> family brain compatibility assessment, individualized profiles, a tailored communication plan, and coaching.</p><p><b>Reported outcome:</b> the case study states a 60% reduction in conflicts, with better harmony and constructive conversations.</p></article>
    <article class="case-card"><h3>Corporate · Healthcare</h3><p><b>Challenge:</b> communication issues, lower productivity, burnout and retention pressure.</p><p><b>Approach:</b> team brain assessments, resilience workshops, focus tools and leadership training.</p><p><b>Reported outcome:</b> the case study states a 45% boost in team productivity alongside reduced burnout and improved collaboration.</p></article>
    <article class="case-card"><h3>Career Development</h3><p><b>Challenge:</b> uncertainty about career fit despite existing skills and interests.</p><p><b>Approach:</b> personalized brain assessment, career discovery roadmap, resilience tools and one-to-one coaching.</p><p><b>Reported outcome:</b> the individual moved into a career described as better aligned with strengths, values and long-term goals.</p></article>
  </div></section>

</dialog>
<dialog class="info-dialog" id="resource-report" aria-label="Report"><div class="dialog-bar"><span class="logo">@include('public.partials.brand')</span><button type="button" class="btn" data-close-dialog>Close ✕</button></div>

  <section class="resource-hero"><div class="wrap">
    <span class="eyebrow">Sample Report</span>
    <h1>Brain Blueprint — Sample Report</h1>
    <p>Explore the contents of the 18-page Brain Blueprint sample. This overview introduces the report structure and the kinds of insights it covers. Available reports depend on your package.</p>

  </div></section>
  <section><div class="wrap report-pages"><article class="report-page"><div class="num">Page 1</div><h3>Brain Blueprint</h3><p>Cover: decoding the brain blueprint for holistic success and happiness.</p></article><article class="report-page"><div class="num">Page 2</div><h3>Participant Profile</h3><p>Sample participant details, assessment date and report code.</p></article><article class="report-page"><div class="num">Page 3</div><h3>Introduction</h3><p>What DecodeMyBrain is designed to help a user understand about thinking, learning, decisions and growth.</p></article><article class="report-page"><div class="num">Page 4</div><h3>Four Brain Types</h3><p>Analytical, Creative, Practical and Relational cognitive preferences.</p></article><article class="report-page"><div class="num">Page 5</div><h3>Analytical Thinking</h3><p>Precision, logic, facts, strategy and structured problem-solving.</p></article><article class="report-page"><div class="num">Page 6</div><h3>Organizer Thinking</h3><p>Planning, reliability, systems, execution and detail orientation.</p></article><article class="report-page"><div class="num">Page 7</div><h3>Relational Thinking</h3><p>Empathy, communication, team building and emotional insight.</p></article><article class="report-page"><div class="num">Page 8</div><h3>Creative Thinking</h3><p>Innovation, imagination, future orientation and adaptability.</p></article><article class="report-page"><div class="num">Page 9</div><h3>Flow &amp; Grow</h3><p>Developing less-dominant thinking styles while building from natural strengths.</p></article><article class="report-page"><div class="num">Page 10</div><h3>Growth Indices</h3><p>A personalized view across leadership, creativity, adaptability, entrepreneurship and collaboration.</p></article><article class="report-page"><div class="num">Page 11</div><h3>Learning Styles</h3><p>Preferred learning methods and techniques aligned to the participant&#x27;s brain profile.</p></article><article class="report-page"><div class="num">Page 12</div><h3>Extracurricular Activities</h3><p>Sports and activities suggested to match strengths and stretch growth.</p></article><article class="report-page"><div class="num">Page 13</div><h3>Communication &amp; Behaviour</h3><p>Typical communication patterns, strengths, challenges and improvement tips.</p></article><article class="report-page"><div class="num">Page 14</div><h3>Diet &amp; Nutrition</h3><p>Preferred habits and approaches to structure, mindful eating and consistency.</p></article><article class="report-page"><div class="num">Page 15</div><h3>Job &amp; Work</h3><p>Work environments, roles and decision styles aligned to the profile.</p></article><article class="report-page"><div class="num">Page 16</div><h3>Relationship Styles</h3><p>How communication, independence, logic and empathy may influence relationships.</p></article><article class="report-page"><div class="num">Page 17</div><h3>Develop Your Brain</h3><p>Flow &amp; Grow actions: use strengths, build weaker areas and practise whole-brain development.</p></article><article class="report-page"><div class="num">Page 18</div><h3>Future-Ready You</h3><p>Closing guidance: dominant style is a starting point, not a fixed limit.</p></article></div></section>

</dialog>
<dialog class="info-dialog" id="resource-publication" aria-label="Publication"><div class="dialog-bar"><span class="logo">@include('public.partials.brand')</span><button type="button" class="btn" data-close-dialog>Close ✕</button></div>

  <section class="resource-hero"><div class="wrap">
    <span class="eyebrow">Publication</span>
    <h1>Future Ready Now</h1>
    <p><b>Neuroscience-based Career and Life Design</b> by Dr. Sweta Adatia. Explore the ideas about career discovery and personal development behind the DecodeMyBrain approach.</p>

  </div></section>
  <section><div class="wrap">
    <h2 style="font-size:32px;margin:0 0 22px">Publication structure</h2>
    <div class="book-toc"><div class="book-chapter">Chapter 1 · Arranged-Cum-Love Career: What a Dilemma!</div><div class="book-chapter">Chapter 2 · What’s all the Fuss About Career Discovery?</div><div class="book-chapter">Chapter 3 · The Who, What, When, Where and How of Generation Alpha</div><div class="book-chapter">Chapter 4 · The World of Work in the 21st Century: Expect the Unexpected</div><div class="book-chapter">Chapter 5 · Is There a Perfect Career Tool?</div><div class="book-chapter">Chapter 6 · What is the Difference in the Difference?</div><div class="book-chapter">Chapter 7 · Mybraindesign®: The Secret Source to ‘Know Thyself’</div><div class="book-chapter">Chapter 8 · The End Point for Your Career Choice is the New Beginning for Your Life</div><div class="book-chapter">Chapter 9 · Let’s Live By Purpose, and Not By Accident</div><div class="book-chapter">Chapter 10 · Flow and Grow: Stretching the Thinking through New Hobbies and Activities</div><div class="book-chapter">Chapter 11 · Adult Bonus Chapter</div><div class="book-chapter">Conclusion · About the Author · Extras · Resources · Testimonials</div></div>
  </div></section>

</dialog>
<dialog class="info-dialog" id="resource-frameworks" aria-label="Frameworks"><div class="dialog-bar"><span class="logo">@include('public.partials.brand')</span><button type="button" class="btn" data-close-dialog>Close ✕</button></div>

  <section class="resource-hero"><div class="wrap">
    <span class="eyebrow">DecodeMyBrain® Frameworks</span>
    <h1>From knowing your brain to developing it.</h1>
    <p>Explore the concepts behind DecodeMyBrain: understand your thinking preferences, build on your strengths and put that awareness into practice.</p>
  </div></section>
  <section><div class="wrap framework-grid">
    <article class="framework-card"><h3>Self-Knowledge → Self-Mastery</h3><p>Start by understanding natural brain preferences, then build the capabilities required to grow beyond them.</p></article>
    <article class="framework-card"><h3>Four Brain Preferences</h3><p>Analytical, Practical, Relational and Creative preferences provide a working lens for how people process information and make decisions.</p></article>
    <article class="framework-card"><h3>Flow &amp; Grow</h3><p>Build confidence through existing strengths, then deliberately develop less-dominant thinking styles for whole-brain growth.</p></article>
    <article class="framework-card"><h3>Brain Connect</h3><p>Use brain-pattern understanding to improve communication and connection with family, friends and colleagues.</p></article>
  </div></section>

</dialog>


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
