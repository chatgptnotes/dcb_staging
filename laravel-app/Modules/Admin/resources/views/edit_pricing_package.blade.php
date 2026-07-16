@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard / <a href="{{url('admin/pricing-packages')}}">Pricing Packages</a> /</span> Edit Package
</h4>

<!-- Card Border Shadow -->
<div class="row">
        <div class="card mb-4">
          <h5 class="card-header">Edit Pricing Package</h5>
          @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</div>@endif
          @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</div>@endif
          @if(Session::has('warning')) <div class="alert alert-warning mt-2 mb-2">{{ Session::get('warning') }}</div>@endif
          <div class="card-body">
            <form action="" method="post">
            @csrf
            <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Slug (fixed &mdash; not editable)</label>
              <input type="text" class="form-control" value="{{$package->slug}}" disabled readonly/>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Title</label>
              <input type="text" class="form-control" name="title" value="{{ old('title', $package->title) }}"/>
              @if($errors->has("title")) <div class="alert alert-danger mt-2">{{ $errors->first('title') }}</div>@endif
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Subtitle <span class="text-muted">(optional)</span></label>
              <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle', $package->subtitle) }}"/>
            </div>

            <div class="col-md-3 mb-3">
              <label class="form-label">Price</label>
              <input type="number" step="0.01" min="0.01" class="form-control" name="amount" value="{{ old('amount', $package->amount) }}"/>
              <small class="text-success">Change this to update the public card immediately. When Stripe is configured, saving also updates what online checkout charges.</small>
              @if($errors->has("amount")) <div class="alert alert-danger mt-2">{{ $errors->first('amount') }}</div>@endif
            </div>

            <div class="col-md-3 mb-3">
              <label class="form-label">Old Price <span class="text-muted">(strikethrough, optional)</span></label>
              <input type="text" class="form-control" name="old_price_label" value="{{ old('old_price_label', $package->old_price_label) }}" placeholder="e.g. $499"/>
              <small class="text-muted">Shown crossed-out next to the price (marketing only, never charged).</small>
            </div>

            <div class="col-md-3 mb-3">
              <label class="form-label">Currency</label>
              <select class="form-select" name="currency">
                @foreach(['usd' => 'USD ($)', 'eur' => 'EUR (€)', 'gbp' => 'GBP (£)', 'inr' => 'INR (₹)', 'aud' => 'AUD (A$)', 'cad' => 'CAD (C$)'] as $code => $lbl)
                  <option value="{{ $code }}" {{ strtolower(old('currency', $package->currency)) === $code ? 'selected' : '' }}>{{ $lbl }}</option>
                @endforeach
              </select>
              @if($errors->has("currency")) <div class="alert alert-danger mt-2">{{ $errors->first('currency') }}</div>@endif
            </div>

            <div class="col-md-3 mb-3">
              <label class="form-label">Button Text</label>
              <input type="text" class="form-control" name="button_text" value="{{ old('button_text', $package->button_text) }}"/>
              @if($errors->has("button_text")) <div class="alert alert-danger mt-2">{{ $errors->first('button_text') }}</div>@endif
            </div>

            <div class="col-md-3 mb-3">
              <label class="form-label">Type</label>
              <select class="form-select" name="type" id="pkgType">
                <option value="subscription" {{ old('type', $package->type) === 'subscription' ? 'selected' : '' }}>Subscription (recurring)</option>
                <option value="one_time" {{ old('type', $package->type) === 'one_time' ? 'selected' : '' }}>One-time payment</option>
              </select>
              @if($errors->has("type")) <div class="alert alert-danger mt-2">{{ $errors->first('type') }}</div>@endif
            </div>

            <div class="col-md-3 mb-3" id="intervalWrap">
              <label class="form-label">Billing Interval</label>
              <select class="form-select" name="billing_interval">
                <option value="month" {{ old('billing_interval', $package->billing_interval) === 'month' ? 'selected' : '' }}>Monthly</option>
                <option value="year" {{ old('billing_interval', $package->billing_interval) === 'year' ? 'selected' : '' }}>Yearly</option>
              </select>
              <small class="text-muted">Only used for subscriptions.</small>
              @if($errors->has("billing_interval")) <div class="alert alert-danger mt-2">{{ $errors->first('billing_interval') }}</div>@endif
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Current Stripe price</label>
              <input type="text" class="form-control" value="{{ $package->stripe_price_id ?: 'none yet — will be created on first save' }}" disabled readonly/>
              <small class="text-muted">Auto-managed from this page. A new Stripe price is created whenever you save a package with no price, or change the amount, currency, type, or interval.</small>
              @if(!$package->stripe_price_id)
                <div class="alert alert-warning mt-2 mb-0">The public price can still be managed here. Online checkout remains disabled until valid Stripe keys are configured and this package is saved.</div>
              @endif
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Features <span class="text-muted">(one per line)</span></label>
              <textarea class="form-control" name="features" rows="8">{{ old('features', $package->features) }}</textarea>
            </div>

            <div class="col-md-3 mb-3">
              <label class="form-label">Display Order</label>
              <input type="number" class="form-control" name="sort_order" value="{{ old('sort_order', $package->sort_order) }}" min="0"/>
              @if($errors->has("sort_order")) <div class="alert alert-danger mt-2">{{ $errors->first('sort_order') }}</div>@endif
            </div>

            <div class="col-md-12 mb-3">
              <label class="switch">
                <input type="checkbox" class="switch-input" name="is_visible" value="1" {{ old('is_visible', $package->is_visible) ? 'checked' : '' }}/>
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Visible on pricing page</span>
              </label>
            </div>

            <div class="col-md-12">
            <button type="submit" class="btn btn-primary mb-4 mt-4" style="width:250px; ">
                <span class="bx bxs-save me-1"></span>Save
            </button>
            </div>
            </div>
            </form>
          </div>
        </div>
</div>
<!--/ Card Border Shadow -->



      </div>
      <!-- / Content -->

@include('admin::layouts.footer')
<script>
  (function () {
    var type = document.getElementById('pkgType');
    var wrap = document.getElementById('intervalWrap');
    function sync() { if (wrap) { wrap.style.display = (type && type.value === 'one_time') ? 'none' : ''; } }
    if (type) { type.addEventListener('change', sync); sync(); }
  })();
</script>
