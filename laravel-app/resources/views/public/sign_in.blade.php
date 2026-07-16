@extends('public.layout')
@section('title','Welcome back — DecodeMyBrain')
@push('styles')<style>.auth-page{max-width:520px;margin:0 auto;min-height:560px}.auth-page .brand{margin-bottom:40px}.auth-page h1{margin:0 0 32px}.auth-page .button{width:100%;margin-top:22px}.bottom{text-align:center;color:var(--muted)}</style>@endpush
@section('body')@include('public.partials.nav')<main class="page"><div class="auth-page"><h1 class="heading">Welcome back</h1>
@if(session('fail'))<div class="alert">{{ session('fail') }}</div>@endif
@if(session('success'))<div class="alert success">{{ session('success') }}</div>@endif
<form method="post" action="{{ url('sign-in') }}">@csrf<input type="hidden" name="intended_package" value="{{ session('intended_package') }}"><input type="hidden" name="purchase_flow" value="{{ session('new_purchase_flow') ? 1 : '' }}"><div class="field"><label>Email or username</label><input name="user_name" required></div><div class="field" style="margin-top:22px"><label>Password</label><input type="password" name="password" required></div><p style="text-align:right"><a class="text-link" href="{{ url('forgot-password') }}">Forgot password?</a></p><button class="button" type="submit">Log in</button><p class="bottom">New here? <a class="text-link" href="{{ url('sign-up') }}">Create an account</a></p></form></div></main>@include('public.partials.footer')@endsection
