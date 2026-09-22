@extends('admin::layouts.insights')
@section('title','New business agreement')
@section('eyebrow','Corporate · Agreements')
@section('active','agreements')
@section('content')
  @if(session('fail'))<div class="alert fail">{{ session('fail') }}</div>@endif
  @if($errors->any())<div class="alert fail">{{ $errors->first() }}</div>@endif
  <form id="create-deal-form" method="post" action="{{ url('admin/organization-quotes') }}"><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="hidden" name="organization_enquiry_id" value="{{ $enquiry->id }}"><div class="split">
    <section class="panel"><div class="panel-head"><h2 class="panel-title">Deal details</h2><span class="muted">From inquiry: {{ $enquiry->organization_name }}</span></div><div style="padding:25px"><div class="form-grid">
      <div class="field full"><label>Entity name</label><input name="organization_name" value="{{ old('organization_name',$enquiry->organization_name) }}" required></div>
      <div class="field"><label>Contact person</label><input name="contact_name" value="{{ old('contact_name',$enquiry->contact_name) }}" required></div>
      <div class="field"><label>Contact email</label><input name="contact_email" type="email" value="{{ old('contact_email',$enquiry->contact_email) }}" required></div>
      <div class="field"><label>Contact phone</label><input name="contact_phone" value="{{ old('contact_phone',$enquiry->contact_phone) }}"></div>
      <div class="field"><label>Package</label><select name="package_slug" required><option value="">Choose package</option>@foreach($packages as $package)<option value="{{ $package->slug }}" @selected(old('package_slug')===$package->slug)>{{ $package->title }}</option>@endforeach</select></div>
      <div class="field"><label>Number of assessments</label><input name="seat_count" type="number" min="1" value="{{ old('seat_count',$enquiry->group_size) }}" required></div>
      <div class="field"><label>Agreed price (USD)</label><input name="agreed_amount" value="{{ old('agreed_amount') }}" placeholder="240.00" required></div>
      <div class="field"><label>Billing type</label><input value="One-time payment" disabled></div>
      <div class="field"><label>Access</label><input value="Permanent" disabled></div>
      <div class="field full"><label>Payment notes</label><textarea name="internal_notes" minlength="3" required>{{ old('internal_notes') }}</textarea></div>
    </div></div></section>
    <aside><section class="panel payment-card"><h2 class="panel-title">Payment</h2><div class="notice" style="margin-top:18px">Payment received activates the requested assessment seats and securely generates the enterprise access code and emails a paid invoice to the contact after this deal is saved.</div><label class="toggle-row"><input class="toggle" type="checkbox" name="payment_received" value="1" @checked(old('payment_received'))> Payment received</label><button id="save-deal-button" type="submit" class="primary-button" style="width:100%;margin-top:20px"><span class="deal-spinner" aria-hidden="true" hidden></span><span data-save-label aria-live="polite">Save deal</span></button></section></aside>
  </div></form>
@endsection

@push('scripts')
<style>
  #save-deal-button { gap: 9px; }
  #save-deal-button:disabled { cursor: wait; opacity: .75; }
  .deal-spinner { width: 18px; height: 18px; border: 2px solid currentColor; border-right-color: transparent; border-radius: 50%; animation: deal-spin .75s linear infinite; }
  .deal-spinner[hidden] { display: none; }
  @keyframes deal-spin { to { transform: rotate(360deg); } }
  @media (prefers-reduced-motion: reduce) { .deal-spinner { animation: none; } }
</style>
<script>
(() => {
    const form = document.getElementById('create-deal-form');
    const button = document.getElementById('save-deal-button');
    const spinner = button.querySelector('.deal-spinner');
    const label = button.querySelector('[data-save-label]');
    let submitting = false;

    form.addEventListener('submit', (event) => {
        if (submitting) {
            event.preventDefault();
            return;
        }
        // Native validation runs before this event. Keep form fields enabled
        // so every value, including payment_received, is included in the POST.
        submitting = true;
        button.disabled = true;
        button.setAttribute('aria-busy', 'true');
        spinner.hidden = false;
        label.textContent = 'Saving deal…';
    });

    window.addEventListener('pageshow', () => {
        submitting = false;
        button.disabled = false;
        button.removeAttribute('aria-busy');
        spinner.hidden = true;
        label.textContent = 'Save deal';
    });
})();
</script>
@endpush
