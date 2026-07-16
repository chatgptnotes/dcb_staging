@include('admin::layouts.header')
<div class="content-wrapper"><div class="container-xxl flex-grow-1 container-p-y">
  <h4>Create business agreement</h4><p class="text-muted">From enquiry: {{ $enquiry->organization_name }}. Saving creates an unpaid agreement; seats and the shared enterprise code are generated only after payment is received.</p>
  @if(session('fail')) <div class="alert alert-danger">{{ session('fail') }}</div>@endif
  @if($errors->any()) <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
  <form method="post" action="{{ url('admin/organization-quotes') }}"><div class="card"><div class="card-body row g-3">@csrf
    <input type="hidden" name="organization_enquiry_id" value="{{ $enquiry->id }}">
    <div class="col-12"><div class="alert alert-light border mb-0"><strong>Received enquiry</strong><br>{{ $enquiry->contact_name }} · {{ $enquiry->contact_email }} · {{ $enquiry->group_size }} requested assessments @if($enquiry->message)<br><span class="text-muted">{{ $enquiry->message }}</span>@endif</div></div>
    <div class="col-md-6"><label class="form-label">Organisation name</label><input class="form-control" name="organization_name" value="{{ old('organization_name', $enquiry->organization_name) }}" required></div>
    <div class="col-md-6"><label class="form-label">Contact name</label><input class="form-control" name="contact_name" value="{{ old('contact_name', $enquiry->contact_name) }}" required></div>
    <div class="col-md-6"><label class="form-label">Contact email</label><input class="form-control" name="contact_email" type="email" value="{{ old('contact_email', $enquiry->contact_email) }}" required></div>
    <div class="col-md-6"><label class="form-label">Contact phone</label><input class="form-control" name="contact_phone" value="{{ old('contact_phone', $enquiry->contact_phone) }}"></div>
    <div class="col-md-4"><label class="form-label">Package</label><select class="form-select" name="package_slug" required><option value="">Choose package</option>@foreach($packages as $package)<option value="{{ $package->slug }}" @selected(old('package_slug') === $package->slug)>{{ $package->title }}</option>@endforeach</select></div>
    <div class="col-md-4"><label class="form-label">Assessments / seats</label><input class="form-control" name="seat_count" type="number" min="1" value="{{ old('seat_count', $enquiry->group_size) }}" required></div>
    <div class="col-md-4"><label class="form-label">USD per seat</label><input class="form-control" name="unit_amount" placeholder="40.00" value="{{ old('unit_amount') }}" required></div>
    <div class="col-md-4"><label class="form-label">Total discount USD</label><input class="form-control" name="discount_amount" placeholder="0.00" value="{{ old('discount_amount') }}"></div>
    <div class="col-md-4"><label class="form-label">Billing type</label><select class="form-select" name="billing_type"><option value="one_time" @selected(old('billing_type') === 'one_time')>One-time</option><option value="subscription" @selected(old('billing_type') === 'subscription')>Subscription</option></select></div>
    <div class="col-md-4"><label class="form-label">Access term</label><select class="form-select" name="access_term"><option value="permanent" @selected(old('access_term') === 'permanent')>Permanent</option><option value="fixed_term" @selected(old('access_term') === 'fixed_term')>Fixed term</option><option value="subscription_active" @selected(old('access_term') === 'subscription_active')>While subscription paid</option></select></div>
    <div class="col-md-6"><label class="form-label">Access end date <small class="text-muted">fixed term only</small></label><input class="form-control" type="datetime-local" name="access_ends_at" value="{{ old('access_ends_at') }}"></div>
    <div class="col-md-6"><label class="form-label">Agreement expiry</label><input class="form-control" type="datetime-local" name="expires_at" value="{{ old('expires_at') }}"></div>
    <div class="col-md-6"><label class="form-label">Internal notes</label><textarea class="form-control" name="internal_notes" rows="3">{{ old('internal_notes') }}</textarea></div>
    <div class="col-md-6"><label class="form-label">Customer-facing notes</label><textarea class="form-control" name="customer_notes" rows="3">{{ old('customer_notes') }}</textarea></div>
    <div class="col-12"><button class="btn btn-primary">Save agreement</button> <a class="btn btn-outline-secondary" href="{{ url('admin/organization-enquiries') }}">Cancel</a></div>
  </div></div></form>
</div></div>
@include('admin::layouts.footer')
