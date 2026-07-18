<!doctype html>
<html lang="en">
<body style="margin:0;background:#f5f5f7;font-family:Arial,sans-serif;color:#1d1d1f;">
  <div style="max-width:560px;margin:32px auto;padding:32px;background:#fff;border:1px solid #ececec;border-radius:16px;">
    <h1 style="margin:0 0 20px;font-size:22px;color:#5a559d;">DecodeMyBrain</h1>
    <p>Hello {{ $quote->enquiry->contact_name }},</p>
    <p>Here is the latest assessment code usage update for <strong>{{ $quote->organization->name }}</strong>.</p>
    <div style="margin:28px 0;padding:22px;border-radius:12px;background:#fff3c6;text-align:center;">
      <div style="font-size:30px;font-weight:700;line-height:1.2;">{{ $claimedSeats }} of {{ $issuedSeats }}</div>
      <div style="margin-top:7px;font-size:16px;">people have claimed the assessment code</div>
    </div>
    <p>Regards,<br>DecodeMyBrain</p>
  </div>
</body>
</html>
