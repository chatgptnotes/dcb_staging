@extends('admin::layouts.insights')
@section('title','Business agreement')
@section('eyebrow','Corporate · Agreements')
@section('active','agreements')
@section('actions')<a class="export" href="{{ url('admin/organization-quotes') }}">All agreements</a>@endsection
@section('content')
  @if(session('success'))<div class="alert success">{{ session('success') }}</div>@endif
  @if(session('fail'))<div class="alert fail">{{ session('fail') }}</div>@endif
  <div class="split"><section class="panel"><div class="panel-head"><div><h2 class="panel-title">{{ $quote->organization->name }}</h2><p class="panel-sub">{{ $quote->quote_number }} · {{ $quote->organization->contact_email }}</p></div><span class="badge {{ $quote->status === 'paid' ? 'badge-paid' : 'badge-not-started' }}">{{ ucfirst($quote->status) }}</span></div><div style="padding:25px"><div class="form-grid">
    <div class="field full"><label>Entity name</label><input value="{{ $quote->organization->name }}" disabled></div>
    <div class="field"><label>Contact person</label><input value="{{ $quote->organization->contact_name }}" disabled></div><div class="field"><label>Contact email</label><input value="{{ $quote->organization->contact_email }}" disabled></div>
    <div class="field"><label>Package</label><input value="{{ $quote->package_slug }}" disabled></div><div class="field"><label>Number of assessments</label><input value="{{ $quote->seat_count }}" disabled></div>
    <div class="field"><label>Agreed price (total)</label><input value="${{ number_format($quote->total_amount_minor/100,2) }} USD" disabled></div><div class="field"><label>Access</label><input value="{{ ucfirst(str_replace('_',' ',$quote->access_term)) }}" disabled></div>
  <div class="field full"><label>Payment notes</label><textarea disabled>{{ $quote->internal_notes }}</textarea></div>
  </div></div></section><aside><section class="panel payment-card"><h2 class="panel-title">Payment</h2><div class="notice" style="margin-top:18px">Paid offline. Turn on payment received to generate the code and activate seats.</div>@if($quote->status !== 'paid')<form method="post" action="{{ url('admin/organization-quotes/'.$quote->id.'/mark-paid') }}">@csrf<label class="toggle-row"><input class="toggle" type="checkbox" onchange="if(this.checked){if(confirm('Confirm payment has been received?')){this.form.submit()}else{this.checked=false}}"> Payment received</label></form>@else<label class="toggle-row"><input class="toggle" type="checkbox" checked disabled> Payment received</label>@endif</section>
    <p class="muted" style="margin-top:17px">Enterprise code controls are available in the Enterprise codes tab.</p></aside></div>
@endsection
