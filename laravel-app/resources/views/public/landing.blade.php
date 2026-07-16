@extends('public.layout')
@section('title','DecodeMyBrain — Understand how your mind works')
@push('styles')
<style>.hero{padding:104px 48px 72px;text-align:center;background:linear-gradient(115deg,#fff0b8 0%,#fff 55%,#def7f3 100%)}.hero .lead{max-width:650px;margin:25px auto 34px}.hero-actions{display:flex;justify-content:center;gap:16px;flex-wrap:wrap}.benefits{display:flex;justify-content:center;gap:70px;padding:44px 30px}.benefit strong{display:block;font:600 29px 'Playfair Display',serif}.benefit span{color:var(--muted);font-size:15px}.bulk{display:flex;align-items:center;justify-content:space-between;gap:30px;margin:0 50px 44px;padding:40px 42px;background:#fffaf1;border:1px solid #f2e5d1}.bulk h2{margin:0 0 12px;font:600 28px 'Playfair Display',serif}.bulk p{max-width:630px;margin:0;line-height:1.55;font-size:16px}@media(max-width:700px){.hero{padding:74px 23px 48px}.benefits{gap:25px;padding:32px 20px;flex-wrap:wrap}.bulk{margin:0 22px 30px;padding:28px;align-items:flex-start;flex-direction:column}}</style>
@endpush
@section('body')
@include('public.partials.nav')
@if(session('fail'))<div class="alert">{{ session('fail') }}</div>@endif
@if(session('success'))<div class="alert success">{{ session('success') }}</div>@endif
<main><section class="hero"><span class="eyebrow">Understand how your mind works</span><h1 class="display" style="max-width:690px;margin:28px auto 0">A clear read on how<br>you think, decide, and focus</h1><p class="lead">DecodeMyBrain turns a guided assessment into a plain-language profile you can actually use. Buy once as an individual, or run it across your whole team.</p><div class="hero-actions">@if($resumeRoute)<a class="button" href="{{ route('assessment.resume') }}">Resume assessment</a><a class="button secondary" href="{{ url('dashboard') }}">Go to dashboard</a>@else<a class="button" href="{{ route('public.plans') }}">Take the assessment</a><a class="button secondary" href="{{ route('organization.enquiry.create') }}">Assess a group</a>@endif</div></section>
<section id="how-it-works" class="benefits"><div class="benefit"><strong>18 min</strong><span>average to complete</span></div><div class="benefit"><strong>Save &amp; resume</strong><span>pick up where you left off</span></div><div class="benefit"><strong>Instant</strong><span>results on submit</span></div></section>
<section class="bulk"><div><h2>Running this for a school or company?</h2><p>Tell us your group size. We agree a price, send you one code, and your people register themselves. No per-seat purchases.</p></div><a class="button dark" href="{{ route('organization.enquiry.create') }}">Request a bulk quote</a></section></main>
@include('public.partials.footer')
@endsection
