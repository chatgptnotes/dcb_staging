@extends('public.layout')
@section('title','Code accepted')
@push('styles')
<style>
  .accepted-page{min-height:100vh;display:grid;place-items:center;padding:40px 20px;background:var(--cream)}
  .accepted-card{width:min(100%,720px);margin:0 auto;padding:46px 48px;border:1px solid var(--line);border-radius:24px;background:#fff;text-align:center;box-shadow:0 16px 40px rgba(78,58,29,.06)}
  .accepted-icon{width:92px;height:92px;margin:0 auto 24px;display:grid;place-items:center;border-radius:50%;background:#ddf7e7;color:#73dc94;font-size:48px;font-weight:700;line-height:1}
  .accepted-title{margin:0;font:600 clamp(36px,4vw,44px)/1.1 'Playfair Display',serif}
  .accepted-copy{max-width:590px;margin:20px auto 28px;font-size:20px;line-height:1.45;color:#39332d}.accepted-copy strong{font-weight:700}
  .accepted-note{display:flex;align-items:flex-start;gap:14px;margin:0 auto 28px;padding:18px 20px;border-radius:14px;background:#fff0b8;text-align:left;font-size:17px;line-height:1.45}.accepted-note-icon{font-size:23px;line-height:1.1}
  .accepted-form .button{width:100%;min-height:60px;border-radius:12px;font-size:18px}
  @media(max-width:700px){.accepted-page{align-items:start;padding:24px 16px}.accepted-card{padding:36px 22px;border-radius:18px}.accepted-icon{width:76px;height:76px;margin-bottom:20px;font-size:40px}.accepted-copy{font-size:18px}.accepted-note{font-size:16px}.accepted-form .button{min-height:56px;font-size:17px}}
</style>
@endpush
@section('body')
<main class="accepted-page">
  <section class="accepted-card" aria-labelledby="accepted-title">
    <div class="accepted-content">
      <div class="accepted-icon" aria-hidden="true">✓</div>
      <h1 class="accepted-title" id="accepted-title">Code accepted</h1>
      <p class="accepted-copy">You're joining through <strong>{{ $seat->quote?->organization?->name ?? 'your organization' }}</strong>. No payment needed. Your assessment is ready.</p>
      <div class="accepted-note"><span class="accepted-note-icon" aria-hidden="true">ⓘ</span><span>Your progress saves automatically. If you stop, log back in and pick up where you left off.</span></div>
      <form class="accepted-form" method="post" action="{{ route('access.code.accepted.start') }}">@csrf<button class="button" type="submit">Start the assessment</button></form>
    </div>
  </section>
</main>
@endsection
