@include('admin::layouts.header')
<div class="content-wrapper"><div class="container-xxl flex-grow-1 container-p-y">
  <h4>Create Individual Voucher</h4><p class="text-muted">Every voucher is claimed once by its recipient email. Permanent vouchers grant access without payment.</p>
  @if(session('fail')) <div class="alert alert-danger">{{ session('fail') }}</div>@endif
  @if($errors->any()) <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
  <form method="post" action="{{ url('admin/vouchers') }}"><div class="card"><div class="card-body row g-3">@csrf
    <div class="col-md-6"><label class="form-label">Recipient email</label><input class="form-control" type="email" name="recipient_email" value="{{ old('recipient_email') }}" required></div>
    <div class="col-md-6"><label class="form-label">Custom code <small class="text-muted">(optional; secure code generated if blank)</small></label><input class="form-control" name="code" value="{{ old('code') }}" maxlength="64"></div>
    <div class="col-md-6"><label class="form-label">Package</label><select class="form-select" name="package_slug" required><option value="">Choose package</option>@foreach($packages as $package)<option value="{{ $package->slug }}" @selected(old('package_slug') === $package->slug)>{{ $package->title }}</option>@endforeach</select></div>
    <div class="col-md-6"><label class="form-label">Purpose</label><select class="form-select" name="purpose" id="voucher-purpose" required><option value="permanent_access" @selected(old('purpose') === 'permanent_access')>100% permanent access</option><option value="checkout_discount" @selected(old('purpose') === 'checkout_discount')>Stripe checkout discount</option></select></div>
    <div class="col-md-4 discount-field"><label class="form-label">Discount type</label><select class="form-select" name="discount_type"><option value="percentage">Percentage</option><option value="fixed">Fixed USD</option></select></div>
    <div class="col-md-4 discount-field"><label class="form-label">Percentage off</label><input class="form-control" type="number" name="percent_off" min="1" max="99" value="{{ old('percent_off') }}"></div>
    <div class="col-md-4 discount-field"><label class="form-label">Fixed USD off</label><input class="form-control" name="amount_off" value="{{ old('amount_off') }}" placeholder="25.00"></div>
    <div class="col-md-6 discount-field"><label class="form-label">Minimum order USD <small class="text-muted">optional</small></label><input class="form-control" name="minimum_order_amount" value="{{ old('minimum_order_amount') }}" placeholder="100.00"></div>
    <div class="col-md-6"><label class="form-label">Expiry <small class="text-muted">optional</small></label><input class="form-control" type="datetime-local" name="expires_at" value="{{ old('expires_at') }}"></div>
    <div class="col-12"><button class="btn btn-primary">Create secure voucher</button> <a href="{{ url('admin/vouchers') }}" class="btn btn-outline-secondary">Cancel</a></div>
  </div></div></form>
</div></div>
<script>document.addEventListener('DOMContentLoaded',function(){const purpose=document.getElementById('voucher-purpose'),fields=document.querySelectorAll('.discount-field');function toggle(){fields.forEach(function(field){field.style.display=purpose.value==='checkout_discount'?'block':'none';});}purpose.addEventListener('change',toggle);toggle();});</script>
@include('admin::layouts.footer')
