@extends('public.layout')
@section('show_public_nav','yes')
@section('title','How would you like to continue?')
@push('styles')
<style>.choice{max-width:760px;margin:0 auto;text-align:center}.choice .lead{margin:20px auto 34px}.choice-cards{display:grid;grid-template-columns:1fr 1fr;gap:18px;text-align:left}.choice-card{padding:28px;border:1px solid var(--line);border-radius:16px;background:#fff;cursor:pointer}.choice-card.active{background:#fff2b9;border-color:#f0bf23}.choice-card h2{margin:16px 0 12px;font:600 24px 'Playfair Display',serif}.choice-card p{margin:0;color:var(--muted);line-height:1.5}.choice-icon{display:grid;place-items:center;width:50px;height:50px;border:1px solid var(--line);border-radius:12px;font-size:27px}.code-form{text-align:left;margin-top:28px}.code-form .button,.pay-form .button{width:100%;margin-top:20px}.pay-form{margin-top:28px}.fine{color:var(--muted);font-size:14px}@media(max-width:620px){.choice-cards{grid-template-columns:1fr}}</style>
@endpush
@section('body')
<main class="page">
  <div class="choice">
    @if(session('fail'))
      <div class="alert">{{ session('fail') }}</div>
    @endif
    @if(session('success'))
      <div class="alert success">{{ session('success') }}</div>
    @endif
    <h1 class="heading">One quick question before you start</h1>
    <p class="lead">Some people join through an organization and receive a code. Others pay directly. Which are you?</p>
    <div class="choice-cards">
      <button class="choice-card active" type="button" data-choice="code"><span class="choice-icon">#</span><h2>I have a code</h2><p>My school or company gave me a code to enter.</p></button>
      <button class="choice-card" type="button" data-choice="pay"><span class="choice-icon">$</span><h2>I'll pay myself</h2><p>Continue to an individual assessment plan.</p></button>
    </div>
    <form class="code-form" id="code-panel" method="post" action="{{ route('access.code.begin') }}">
      @csrf
      <label class="field"><span>Enter your code</span><input name="code" value="{{ old('code') }}" placeholder="DMB-K7F2-QX9M" required autocomplete="off"></label>
      <button class="button" type="submit">Check code</button><p class="fine">No code? Choose "I'll pay myself" to select an assessment.</p>
    </form>
    <form class="pay-form hidden" id="pay-panel" method="post" action="{{ route('access.pay') }}">@csrf<button class="button" type="submit">Choose an assessment</button></form>
  </div>
</main>
@include('public.partials.footer')
@endsection
@push('scripts')
<script>document.querySelectorAll('[data-choice]').forEach(function(card){card.addEventListener('click',function(){document.querySelectorAll('[data-choice]').forEach(function(item){item.classList.remove('active')});card.classList.add('active');document.getElementById('code-panel').classList.toggle('hidden',card.dataset.choice!=='code');document.getElementById('pay-panel').classList.toggle('hidden',card.dataset.choice!=='pay')})})</script>
@endpush
