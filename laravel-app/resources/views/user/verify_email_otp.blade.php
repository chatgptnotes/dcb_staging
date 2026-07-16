@include('layouts.header')

<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;padding:20px;">
    <div style="width:100%;max-width:420px;background:#fff;border-radius:16px;border:1px solid #ececec;padding:32px;">
        <h2 style="color:#F1935D;font-weight:600;font-size:22px;margin-bottom:8px;">Verify your email</h2>
        @if(!config('app.otp_enabled'))
            <p style="font-size:14px;color:#555;margin-bottom:22px;">
                Email verification is not enabled on this local site. Continue to create your account.
            </p>
        @else
            <p style="font-size:14px;color:#555;margin-bottom:22px;">
                Enter the 6-digit code we sent to <strong>{{ $email }}</strong>.
            </p>
        @endif

        @if(Session::has('success')) <p style="color:#1a7f37;font-size:14px;">{{ Session::get('success') }}</p>@endif
        @if(Session::has('fail')) <p style="color:red;font-size:14px;">{{ Session::get('fail') }}</p>@endif
        @if($errors->has('otp')) <p style="color:red;font-size:14px;">{{ $errors->first('otp') }}</p>@endif

        <form action="{{ url('verify-email-otp') }}" method="post">
            @csrf
            @if(config('app.otp_enabled'))
                <input type="text" name="otp" inputmode="numeric" maxlength="6" autocomplete="one-time-code" required
                    placeholder="------"
                    style="width:100%;text-align:center;letter-spacing:10px;font-size:26px;padding:14px;border-radius:10px;border:1px solid #e0e0e0;margin-bottom:18px;">
            @endif
            <button type="submit" class="w-100" style="background:#000;color:#fff;border:none;border-radius:10px;padding:13px;width:100%;font-weight:600;">{{ config('app.otp_enabled') ? 'Verify & create account' : 'Continue & create account' }}</button>
        </form>

        @if(config('app.otp_enabled'))
            <form action="{{ url('resend-otp') }}" method="post" style="margin-top:14px;text-align:center;">
                @csrf
                <button type="submit" style="background:none;border:none;color:#F1935D;font-weight:600;font-size:14px;cursor:pointer;">Resend code</button>
            </form>
        @endif
    </div>
</div>

@include('layouts.footer')
