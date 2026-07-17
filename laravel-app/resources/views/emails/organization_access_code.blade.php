<!doctype html>
<html lang="en">
<body style="margin:0;background:#f5f5f7;font-family:Arial,sans-serif;color:#1d1d1f;">
  <div style="max-width:560px;margin:32px auto;padding:32px;background:#fff;border:1px solid #ececec;border-radius:16px;">
    <h1 style="margin:0 0 20px;font-size:22px;color:#5a559d;">DecodeMyBrain</h1>
    <p>Hello {{ $quote->enquiry->contact_name }},</p>
    <p>Your organisation, <strong>{{ $quote->organization->name }}</strong>, can now access the DecodeMyBrain assessment.</p>
    <p style="margin:28px 0;text-align:center;"><span style="display:inline-block;padding:14px 22px;border:1px solid #f1935d55;border-radius:12px;background:#f1935d22;font-size:24px;font-weight:700;letter-spacing:3px;">{{ $code }}</span></p>
    <p>Share this code with your group. Each person should create or sign in to a DecodeMyBrain account, then enter the code when asked how they will access their assessment.</p>
    <p>This code can be used until all available organisation seats have been claimed.</p>
    <p>Regards,<br>DecodeMyBrain</p>
  </div>
</body>
</html>
