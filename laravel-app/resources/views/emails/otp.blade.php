<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
<body style="margin:0;background:#f5f5f7;font-family:-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;color:#1d1d1f;">
    <div style="max-width:480px;margin:32px auto;background:#ffffff;border-radius:16px;overflow:hidden;border:1px solid #ececec;">
        <div style="padding:28px 32px 8px;">
            <h1 style="margin:0;font-size:20px;font-weight:700;color:#5a559d;">DecodeMyBrain</h1>
        </div>
        <div style="padding:8px 32px 32px;">
            <p style="font-size:15px;line-height:1.5;margin:0 0 18px;">
                @if($purpose === 'register') Use this code to verify your email and finish creating your account.
                @elseif($purpose === 'login') Use this code to finish signing in.
                @else Use this code to reset your password.
                @endif
            </p>
            <div style="text-align:center;margin:22px 0;">
                <span style="display:inline-block;font-size:34px;letter-spacing:10px;font-weight:700;color:#1d1d1f;background:#f1935d22;border:1px solid #f1935d55;border-radius:12px;padding:14px 22px;">{{ $code }}</span>
            </div>
            <p style="font-size:13px;color:#6e6e73;line-height:1.5;margin:18px 0 0;">
                This code expires in {{ $ttlMinutes }} minutes. If you didn't request it, you can safely ignore this email.
            </p>
        </div>
    </div>
    <p style="text-align:center;font-size:12px;color:#a1a1a6;margin:0 0 32px;">&copy; {{ date('Y') }} DecodeMyBrain</p>
</body>
</html>
