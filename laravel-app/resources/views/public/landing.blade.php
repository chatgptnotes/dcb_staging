<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DecodeMyBrain — Understand how your mind works</title>
<meta name="description" content="Discover your natural strengths with DecodeMyBrain. Explore whole-brain development programs for learning, work, relationships and personal growth.">
<link rel="stylesheet" href="{{ asset('assets/landing-v5/landing.css') }}">
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

  <section id="what-is-dmb" class="section">
    <div class="wrap split">
      <div class="copy">
        <span class="eyebrow">What is DecodeMyBrain?</span>
        <h3>A practical way to understand how your brain naturally works.</h3>
        <p>DecodeMyBrain helps people understand their natural strengths, preferences and patterns so they can make better decisions about learning, work, relationships and personal growth.</p>
        <p>It is designed to move beyond a one-time personality label. The idea is simple: <b>know yourself first, then build the skills and choices that help you grow.</b></p>
        <div class="actions">
          <a class="btn dark" href="{{ route('public.plans') }}">Start with your age group</a>
          <a class="btn" href="{{ route('public.science') }}">Why this approach?</a>
        </div>
      </div>
      <div>
        <ul class="list-clean">
          <li><span class="dot-icon y">1</span><div><b>Unlock your natural potential</b><br><span class="muted">Align strengths with personal goals for a more confident path forward.</span></div></li>
          <li><span class="dot-icon a">2</span><div><b>Overcome emotional challenges</b><br><span class="muted">Build emotional resilience, manage stress and improve focus.</span></div></li>
          <li><span class="dot-icon o">3</span><div><b>Achieve holistic growth</b><br><span class="muted">Connect academics, career, relationships and well-being.</span></div></li>
          <li><span class="dot-icon m">4</span><div><b>Build stronger connections</b><br><span class="muted">Understand communication patterns and make relationships easier to navigate.</span></div></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="statement">
    <div class="wrap">
      <div>
        <span class="eyebrow">From self-knowledge to self-mastery</span>
        <h2>We are not just another personality test.</h2>
        <p>Traditional assessments often tell you who you are. DecodeMyBrain is positioned as a whole-brain evolution system: discover your natural preferences, understand the skills you need to build, and use practical tools to grow over time.</p>
      </div>
      <div class="brain-evolution">
        <div class="brain-bubble small">Self<br>Knowledge</div>
        <div style="font-size:32px;font-weight:900">→</div>
        <div class="brain-bubble">Self<br>Mastery</div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="icon-grid">
        <article class="icon-card"><div class="icon-line">◎</div><h4>Advanced Neuro Tools</h4><p>Insights designed to reveal brain preferences and support practical growth.</p></article>
        <article class="icon-card"><div class="icon-line">◉</div><h4>Designed For You</h4><p>A personalized approach around age, goals and stage of life.</p></article>
        <article class="icon-card"><div class="icon-line">⌁</div><h4>Backed by Neuroscience</h4><p>Grounded in a brain-based approach and the supplied DecodeMyBrain frameworks.</p></article>
        <article class="icon-card"><div class="icon-line">↗</div><h4>Measurable Impact</h4><p>Track progress, confidence and practical outcomes over time.</p></article>
        <article class="icon-card"><div class="icon-line">⌂</div><h4>Built for Families</h4><p>Help parents, children and adults understand one another more clearly.</p></article>
      </div>
    </div>
  </section>

  <section id="how-it-helps" class="section">
    <div class="wrap center">
      <span class="eyebrow">Lifelong applications</span>
      <h2>Simple tools. Useful across life.</h2>
      <p class="section-intro">The same brain understanding can support very different real-world decisions — from school and career to relationships, leadership and well-being.</p>
      <div class="app-grid" style="margin-top:38px">
        <article class="app-card"><div><h4>Academic Success</h4><p>Use brain preferences to improve learning, attention and academic choices.</p></div><div class="line-illo">✎</div></article>
        <article class="app-card"><div><h4>Relationships &amp; Communication</h4><p>Understand emotional and cognitive preferences to build stronger bonds.</p></div><div class="line-illo">◌◌</div></article>
        <article class="app-card"><div><h4>Leadership</h4><p>Build self-awareness, decision confidence and better people understanding.</p></div><div class="line-illo">↗</div></article>
        <article class="app-card"><div><h4>Peak Performance</h4><p>Know your natural operating style and focus development where it matters.</p></div><div class="line-illo">◎</div></article>
        <article class="app-card"><div><h4>Holistic Development</h4><p>Connect learning, emotional strength, relationships and personal growth.</p></div><div class="line-illo">✺</div></article>
        <article class="app-card"><div><h4>Stress</h4><p>Recognize triggers and build practical resilience strategies.</p></div><div class="line-illo">◒</div></article>
        <article class="app-card"><div><h4>Attention &amp; Focus</h4><p>Use personalized strategies to work with your brain rather than against it.</p></div><div class="line-illo">◎</div></article>
        <article class="app-card"><div><h4>Career Success</h4><p>Align aptitudes, interests and strengths with better future choices.</p></div><div class="line-illo">★</div></article>
      </div>
    </div>
  </section>

  <section id="programs" class="section" style="background:#fffaf0">
    <div class="wrap center">
      <span class="eyebrow">Customized to your need</span>
      <h2>Choose the offering that fits your stage.</h2>
      <p class="section-intro">Our guided programs use the same core idea — understand the brain, then apply that understanding to the decisions that matter now.</p>
      <div class="programs" style="margin-top:38px;text-align:left">
        @foreach($packages as $package)
          @php($art = ['decodemybrain-deep-dive' => 'quest', 'decodemybrain-guided-friend-and-family-connect' => 'evolve', 'small-group' => 'summit'][$package->slug] ?? 'quest')
          <article class="program-card {{ $art }}" data-package="{{ $package->slug }}">
            <div>
              <h3>{{ $package->title }}</h3>
              @if($package->ageRangeLabel())<div class="age">{{ $package->ageRangeLabel() }}</div>@endif
              @if($package->subtitle)<p>{{ $package->subtitle }}</p>@endif
              <ul class="program-features">@foreach($package->featureList() as $feature)<li>{{ $feature }}</li>@endforeach</ul>
            </div>
            <div class="program-art">@include('public.partials.program-art-'.$art)</div>
            <a class="btn square" href="#program-{{ $package->slug }}" data-info-dialog="program-{{ $package->slug }}">Read More</a>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section id="how-it-works" class="section">
    <div class="wrap platform">
      <div class="platform-box">
        <span class="eyebrow">How does this work?</span>
        <h3>Meet the DecodeMyBrain® Platform</h3>
        <p>Helping each brain discover its natural strengths, boost performance and reach its potential through personalized whole-brain development guidance.</p>
        <div class="platform-points">
          <b>＋ Decode Your Brain</b>
          <b>＋ Flow &amp; Grow</b>
          <b>＋ Stay A Step Ahead</b>
        </div>
        <a class="btn dark" href="{{ $resumeRoute ? route('assessment.resume') : route('access.choice') }}">{{ $resumeRoute ? 'Resume assessment' : 'Unlock Brain' }}</a>
      </div>
      <div>
        <img loading="lazy" decoding="async" class="actual-dashboard" src="{{ asset('assets/landing-v5/d96a2038232e.jpg') }}" alt="Actual DecodeMyBrain dashboard views shown on the current website">
        <div class="dashboard-note">Explore your strengths and personalized guidance with the DecodeMyBrain dashboard.</div>
      </div>
    </div>
  </section>

  <section class="impact">
    <div class="wrap">
      <span class="eyebrow">Proven Results, Real Impact</span>
      <h2>What the supplied DecodeMyBrain material reports.</h2>
      <div class="stats">
        <div class="stat"><b>85%</b><p>became self-aware of their brain's natural preferences.</p></div>
        <div class="stat"><b>90%</b><p>of students felt confident in choosing the right career path.</p></div>
        <div class="stat"><b>78%</b><p>of families reported stronger emotional bonds and communication.</p></div>
        <div class="stat"><b>82%</b><p>of parents felt more confident understanding and supporting their child's needs.</p></div>
        <div class="stat"><b>65%</b><p>of parents and children reported lower stress and greater harmony at home.</p></div>
      </div>
      <div class="source-note">These figures are reproduced from the supplied DecodeMyBrain change material and should be validated with the underlying studies before production publication.</div>
    </div>
  </section>

<section class="resources-section">
      <div class="wrap">
        <div class="center">
          <span class="eyebrow">Resources from the current website</span>
          <h2>See what DecodeMyBrain actually delivers.</h2>
          <p class="section-intro">Explore case studies, the sample report, publications and the DecodeMyBrain frameworks.</p>
        </div>
        <div class="resource-grid"><article class="resource-card r1">
          <div class="resource-icon">◎</div>
          <h3>Case Studies</h3>
          <p>Real-world applications of the methods in family, corporate and career contexts.</p>
          <a class="btn dark square" href="#resource-cases" data-info-dialog="resource-cases">Open resource</a>
        </article><article class="resource-card r2">
          <div class="resource-icon">◉</div>
          <h3>Sample Report</h3>
          <p>Current DecodeMyBrain Brain Blueprint sample report.</p>
          <a class="btn dark square" href="#resource-report" data-info-dialog="resource-report">Open resource</a>
        </article><article class="resource-card r3">
          <div class="resource-icon">⌁</div>
          <h3>Publication</h3>
          <p>Future Ready Now by Dr. Sweta Adatia.</p>
          <a class="btn dark square" href="#resource-publication" data-info-dialog="resource-publication">Open resource</a>
        </article><article class="resource-card r4">
          <div class="resource-icon">✺</div>
          <h3>DecodeMyBrain® Frameworks</h3>
          <p>Current DecodeMyBrain framework booklet.</p>
          <a class="btn dark square" href="#resource-frameworks" data-info-dialog="resource-frameworks">Open resource</a>
        </article></div>
      </div>
    </section>
  </main>
@include('public.partials.site-footer')
</div>




<dialog class="info-dialog" id="resource-cases" aria-label="Cases"><div class="dialog-bar"><span class="logo">@include('public.partials.brand')</span><button type="button" class="btn" data-close-dialog>Close ✕</button></div>

  <section class="resource-hero"><div class="wrap">
    <span class="eyebrow">Case Studies</span>
    <h1>Case Studies</h1>
    <p>Examples from the current DecodeMyBrain case-study material showing applications across family dynamics, a healthcare organization, and career development.</p>

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
    <p>The current website sample is an 18-page Brain Blueprint. This overview shows of the report structure and the kinds of insights a participant receives.</p>

  </div></section>
  <section><div class="wrap report-pages"><article class="report-page"><div class="num">Page 1</div><h3>Brain Blueprint</h3><p>Cover: decoding the brain blueprint for holistic success and happiness.</p></article><article class="report-page"><div class="num">Page 2</div><h3>Participant Profile</h3><p>Sample participant details, assessment date and report code.</p></article><article class="report-page"><div class="num">Page 3</div><h3>Introduction</h3><p>What DecodeMyBrain is designed to help a user understand about thinking, learning, decisions and growth.</p></article><article class="report-page"><div class="num">Page 4</div><h3>Four Brain Types</h3><p>Analytical, Creative, Practical and Relational cognitive preferences.</p></article><article class="report-page"><div class="num">Page 5</div><h3>Analytical Thinking</h3><p>Precision, logic, facts, strategy and structured problem-solving.</p></article><article class="report-page"><div class="num">Page 6</div><h3>Organizer Thinking</h3><p>Planning, reliability, systems, execution and detail orientation.</p></article><article class="report-page"><div class="num">Page 7</div><h3>Relational Thinking</h3><p>Empathy, communication, team building and emotional insight.</p></article><article class="report-page"><div class="num">Page 8</div><h3>Creative Thinking</h3><p>Innovation, imagination, future orientation and adaptability.</p></article><article class="report-page"><div class="num">Page 9</div><h3>Flow &amp; Grow</h3><p>Developing less-dominant thinking styles while building from natural strengths.</p></article><article class="report-page"><div class="num">Page 10</div><h3>Growth Indices</h3><p>A personalized view across leadership, creativity, adaptability, entrepreneurship and collaboration.</p></article><article class="report-page"><div class="num">Page 11</div><h3>Learning Styles</h3><p>Preferred learning methods and techniques aligned to the participant&#x27;s brain profile.</p></article><article class="report-page"><div class="num">Page 12</div><h3>Extracurricular Activities</h3><p>Sports and activities suggested to match strengths and stretch growth.</p></article><article class="report-page"><div class="num">Page 13</div><h3>Communication &amp; Behaviour</h3><p>Typical communication patterns, strengths, challenges and improvement tips.</p></article><article class="report-page"><div class="num">Page 14</div><h3>Diet &amp; Nutrition</h3><p>Preferred habits and approaches to structure, mindful eating and consistency.</p></article><article class="report-page"><div class="num">Page 15</div><h3>Job &amp; Work</h3><p>Work environments, roles and decision styles aligned to the profile.</p></article><article class="report-page"><div class="num">Page 16</div><h3>Relationship Styles</h3><p>How communication, independence, logic and empathy may influence relationships.</p></article><article class="report-page"><div class="num">Page 17</div><h3>Develop Your Brain</h3><p>Flow &amp; Grow actions: use strengths, build weaker areas and practise whole-brain development.</p></article><article class="report-page"><div class="num">Page 18</div><h3>Future-Ready You</h3><p>Closing guidance: dominant style is a starting point, not a fixed limit.</p></article></div></section>

</dialog>
<dialog class="info-dialog" id="resource-publication" aria-label="Publication"><div class="dialog-bar"><span class="logo">@include('public.partials.brand')</span><button type="button" class="btn" data-close-dialog>Close ✕</button></div>

  <section class="resource-hero"><div class="wrap">
    <span class="eyebrow">Publication</span>
    <h1>Future Ready Now</h1>
    <p><b>Neuroscience-based Career and Life Design</b> by Dr. Sweta Adatia. The current website presents this publication as part of the intellectual basis behind the DecodeMyBrain approach.</p>

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
    <p>The current website describes its frameworks as the foundation of its science-backed approach. This overview consolidates the framework concepts visible across the supplied website material and sample report.</p>
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
