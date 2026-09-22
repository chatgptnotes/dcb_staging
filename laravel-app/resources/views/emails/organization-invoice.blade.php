<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Invoice {{ $invoice['number'] }}</title></head>
<body style="font-family:DejaVu Sans,Arial,sans-serif;color:#242238;font-size:13px;line-height:1.6">
<div style="max-width:640px;margin:24px auto;padding:28px;border:1px solid #e7e5ef">
    <h1>DecodeMyBrain</h1>
    <h2>Paid invoice</h2>
    <p>Hello {{ $invoice['name'] ?: 'there' }},</p>
    <p>Thank you. We have received your payment for your business agreement. Your invoice is attached as a PDF for your records.</p>
    <p><strong>Invoice number:</strong> {{ $invoice['number'] }}<br>
       <strong>Payment date:</strong> {{ $invoice['paid_date'] ?: 'Not recorded' }}<br>
       <strong>Agreement:</strong> {{ $invoice['agreement'] }}<br>
       <strong>Status:</strong> Paid<br>
       <strong>Payment method:</strong> Offline payment</p>
    <p><strong>Billed to:</strong><br>{{ $invoice['organization'] }}<br>{{ $invoice['name'] }}<br>{{ $invoice['email'] }}</p>
    <table style="width:100%;border-collapse:collapse" cellpadding="9">
        <tr style="background:#f3f1f8"><th align="left">Description</th><th align="right">Assessments</th><th align="right">Agreed total</th></tr>
        <tr><td>{{ $invoice['package'] }}</td><td align="right">{{ $invoice['seats'] }}</td><td align="right">{{ \Laravel\Cashier\Cashier::formatAmount($invoice['amount'], $invoice['currency']) }}</td></tr>
        <tr><td colspan="2"><strong>Total paid ({{ strtoupper($invoice['currency']) }})</strong></td><td align="right"><strong>{{ \Laravel\Cashier\Cashier::formatAmount($invoice['amount'], $invoice['currency']) }}</strong></td></tr>
        <tr><td colspan="2">Balance due</td><td align="right">{{ \Laravel\Cashier\Cashier::formatAmount(0, $invoice['currency']) }}</td></tr>
    </table>
    @if($invoice['reference'])<p><strong>Payment reference:</strong> {{ $invoice['reference'] }}</p>@endif
    <p>The amount above is the agreed total for this agreement.<br>The DecodeMyBrain team</p>
</div>
</body>
</html>
