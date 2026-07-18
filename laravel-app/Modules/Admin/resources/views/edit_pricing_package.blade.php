@extends('admin::layouts.insights')
@section('title','Edit plan')
@section('eyebrow','Individual · Plans')
@section('active','plans')
@section('actions')<a class="export" href="{{ url('admin/pricing-packages') }}">Back to plans</a>@endsection
@section('content')
  @if($errors->any())<div class="alert fail">{{ $errors->first() }}</div>@endif
  <section class="panel form-panel"><div class="panel-head"><div><h2 class="panel-title">{{ $package->title }}</h2><p class="panel-sub">The slug is fixed because it is the entitlement key used by existing customers.</p></div></div><div style="padding:25px">
    <form method="post"><input type="hidden" name="_token" value="{{ csrf_token() }}"><div class="form-grid">
      <div class="field"><label>Package slug</label><input value="{{ $package->slug }}" disabled></div>
      <div class="field"><label>Display order</label><input name="sort_order" type="number" min="0" value="{{ old('sort_order', $package->sort_order) }}" required></div>
      <div class="field"><label>Title</label><input name="title" value="{{ old('title', $package->title) }}" required></div>
      <div class="field"><label>Call-to-action</label><input name="button_text" value="{{ old('button_text', $package->button_text) }}" required></div>
      <div class="field"><label>Minimum age</label><input name="minimum_age" type="number" min="0" max="120" value="{{ old('minimum_age', $package->minimum_age) }}" placeholder="12"></div>
      <div class="field"><label>Maximum age <span class="muted">(optional)</span></label><input name="maximum_age" type="number" min="0" max="120" value="{{ old('maximum_age', $package->maximum_age) }}" placeholder="Leave empty for 18+"></div>
      <div class="field"><label>Charge amount</label><input name="amount" type="number" step="0.01" min="0" value="{{ old('amount', $package->amount) }}" required><span class="help">Used by individual purchase cards only.</span></div>
      <div class="field"><label>Currency</label><select name="currency">@foreach(['usd'=>'USD ($)','inr'=>'INR (₹)','eur'=>'EUR (€)','gbp'=>'GBP (£)'] as $code=>$label)<option value="{{ $code }}" @selected(strtolower(old('currency',$package->currency))===$code)>{{ $label }}</option>@endforeach</select></div>
      <div class="field"><label>Visible price label</label><input name="price_label" value="{{ old('price_label', $package->price_label) }}" placeholder="$29 or 5–6"></div>
      <div class="field"><label>Price suffix</label><input name="price_suffix" value="{{ old('price_suffix', $package->price_suffix) }}" placeholder="once or people"></div>
      <div class="field"><label>Action type</label><select name="cta_mode" id="cta_mode"><option value="purchase" @selected(old('cta_mode',$package->cta_mode ?? 'purchase') === 'purchase')>Individual purchase</option><option value="enquiry" @selected(old('cta_mode',$package->cta_mode ?? 'purchase') === 'enquiry')>Redirect to enquiry form</option></select></div>
      <div class="field full"><label>Subtitle</label><input name="subtitle" value="{{ old('subtitle', $package->subtitle) }}"></div>
      <div class="field full"><label>Features <span class="muted">(one per line)</span></label><textarea name="features">{{ old('features', $package->features) }}</textarea></div>
      <div class="field" id="billing_type"><label>Billing type</label><select name="type" id="pkg_type"><option value="one_time" @selected(old('type',$package->type)==='one_time')>One-time payment</option><option value="subscription" @selected(old('type',$package->type)==='subscription')>Subscription</option></select></div>
      <div class="field" id="billing_interval"><label>Billing interval</label><select name="billing_interval"><option value="month" @selected(old('billing_interval',$package->billing_interval)==='month')>Monthly</option><option value="year" @selected(old('billing_interval',$package->billing_interval)==='year')>Yearly</option></select></div>
      <div class="field full"><label><input type="checkbox" name="is_visible" value="1" @checked(old('is_visible',$package->is_visible))> Visible on the public pricing page</label></div>
    </div><div class="button-row" style="margin-top:26px"><button class="primary-button">Save changes</button><a class="secondary-button" href="{{ url('admin/pricing-packages') }}">Cancel</a></div></form>
  </div></section>
@endsection
@push('scripts')<script>document.addEventListener('DOMContentLoaded',function(){var c=document.getElementById('cta_mode'),t=document.getElementById('pkg_type'),a=document.getElementById('billing_type'),b=document.getElementById('billing_interval');function sync(){var enquiry=c.value==='enquiry';a.style.display=enquiry?'none':'';b.style.display=enquiry||t.value==='one_time'?'none':''}c.onchange=sync;t.onchange=sync;sync()})</script>@endpush
