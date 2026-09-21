<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Invoice {{ $number }}</title></head>
<body style="font-family:DejaVu Sans,Arial,sans-serif;color:#242238;font-size:14px;line-height:1.6;">
<div style="max-width:640px;margin:24px auto;padding:28px;border:1px solid #e7e5ef;">
    <h1 style="color:#5a559d;">DecodeMyBrain</h1>
    <h2>Payment confirmed</h2>
    <p>Hello {{ $payment->invoice_data['name'] ?: 'there' }},</p>
    <p>Thank you. Your payment was successful. Your paid invoice is below and attached as a PDF.</p>
    <p><strong>Invoice:</strong> {{ $number }}<br>
       <strong>Date:</strong> {{ $payment->paid_at?->format('d M Y') }}<br>
       <strong>Billed to:</strong> {{ $payment->invoice_data['name'] }}<br>
       {{ $payment->invoice_data['email'] }}<br>
       <strong>Status:</strong> Paid</p>
    <table style="width:100%;border-collapse:collapse;" cellpadding="10">
        <tr style="background:#f3f1f8;"><th align="left">Description</th><th align="right">Amount</th></tr>
        <tr><td>{{ $payment->invoice_data['package'] }}</td><td align="right">{{ \Laravel\Cashier\Cashier::formatAmount($payment->amount_subtotal_minor ?? $payment->amount_total_minor, $payment->currency) }}</td></tr>
        @if($payment->invoice_data['discount'] > 0)
        <tr><td>Discount</td><td align="right">-{{ \Laravel\Cashier\Cashier::formatAmount($payment->invoice_data['discount'], $payment->currency) }}</td></tr>
        @endif
        @if($payment->invoice_data['tax'] > 0)
        <tr><td>Tax</td><td align="right">{{ \Laravel\Cashier\Cashier::formatAmount($payment->invoice_data['tax'], $payment->currency) }}</td></tr>
        @endif
        <tr><td><strong>Total paid ({{ strtoupper($payment->currency) }})</strong></td><td align="right"><strong>{{ \Laravel\Cashier\Cashier::formatAmount($payment->amount_total_minor, $payment->currency) }}</strong></td></tr>
    </table>
    <p><strong>Payment reference:</strong><br>{{ $payment->stripe_payment_intent_id ?: $payment->checkout_session_id }}</p>
    <p>Please keep this invoice for your records.<br>The DecodeMyBrain team</p>
</div>
</body>
</html>
