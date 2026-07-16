@include('layouts.header')

<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;padding:20px;">
    <div style="width:100%;max-width:420px;background:#fff;border-radius:16px;border:1px solid #ececec;padding:32px;">
        <h2 style="color:#F1935D;font-weight:600;font-size:22px;margin-bottom:8px;">Enter your login code</h2>
        <p style="font-size:14px;color:#555;margin-bottom:22px;">
            For your security, we emailed a 6-digit code to <strong>{{ $email }}</strong>.
        </p>

        @if(Session::has('success')) <p style="color:#1a7f37;font-size:14px;">{{ Session::get('success') }}</p>@endif
        @if(Session::has('fail')) <p style="color:red;font-size:14px;">{{ Session::get('fail') }}</p>@endif
        @if($errors->has('otp')) <p style="color:red;font-size:14px;">{{ $errors->first('otp') }}</p>@endif

        <form action="{{ url('verify-login-otp') }}" method="post">
            @csrf
            <input type="text" name="otp" inputmode="numeric" maxlength="6" autocomplete="one-time-code" required
                placeholder="------"
                style="width:100%;text-align:center;letter-spacing:10px;font-size:26px;padding:14px;border-radius:10px;border:1px solid #e0e0e0;margin-bottom:18px;">
            <button type="submit" class="w-100" style="background:#000;color:#fff;border:none;border-radius:10px;padding:13px;width:100%;font-weight:600;">Verify &amp; sign in</button>
        </form>

        <form action="{{ url('resend-otp') }}" method="post" style="margin-top:14px;text-align:center;">
            @csrf
            <button type="submit" style="background:none;border:none;color:#F1935D;font-weight:600;font-size:14px;cursor:pointer;">Resend code</button>
        </form>
    </div>
</div>

@include('layouts.footer')
