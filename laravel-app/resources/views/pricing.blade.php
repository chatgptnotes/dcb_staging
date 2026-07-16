@extends('layouts.dashboard-layout')

@section('title', 'Pricing')

@section('content')

<style>
    .pricing-card {
        border: 1px solid #C6C8CA;
        background-color: #fff
    }
    .pricing-card .plan-select-button{
        font-weight: 600 !important;
    }
    .pricing-container{
        display: flex;
        justify-content: space-between !important;
    }
    .button-container-top{
        margin-top: 67px !important;
    }
    .pricing-card{
        max-width: 33% !important;
    }
    .pricing-container{
        gap: 30px !important;
    }
    .pricing-list-item{
        margin-top: 16px !important;
    }

    @media screen and (max-width: 992px) {
  .pricing-card{
        max-width: 49% !important;
        min-height: 500px !important;
    }
     .pricing-container{
        display: flex;
        justify-content: center !important;
        gap: 10px !important;
    }

}
@media screen and (max-width: 600px) {
  .pricing-card{
        max-width: 100% !important;
    }
}
.active-package{
    text-align: center;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Aptos', sans-serif !important;
    color: #fff;
    background: #85D6A5;
    width: max-content;
    padding: 10px 15px;
    border: 1px solid #85D6A5;
    border-radius: 45px;
    width: 100%;
    margin-bottom: 0;
}
</style>
<?php
use App\Models\WPUsers;

$wp_user = WPUsers::where('user_id', session('user_id'))->first();
$user_package = $wp_user->package ?? 'free';

$packages = $packages ?? \App\Models\PricingPackage::where('is_visible', 1)->orderBy('sort_order')->get();
?>
<div>
    <div>
         @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
        @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif
        <h2 class="page-title">Pricing Package</h2>
        <p class="page-description" style="margin-bottom: 24px !important;">Overview of all pricing packages</p>
        <div class="card mb-4" style="max-width:760px; border:1px solid #f1935d;">
            <div class="card-body">
                <h5 class="mb-2">Have an individual voucher or organisation code?</h5>
                <p class="text-muted mb-3">Enter the code before checkout. New users can register first; the code will be kept securely until their account is verified.</p>
                <form method="post" action="{{ route('voucher.start') }}" class="row g-2 align-items-end">
                    @csrf
                    <div class="col-md-5">
                        <label class="form-label" for="voucher-code">Voucher code</label>
                        <input id="voucher-code" name="code" class="form-control" maxlength="64" value="{{ old('code') }}" autocomplete="off" required>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label" for="voucher-package">Package</label>
                        <select id="voucher-package" name="package" class="form-select" required>
                            <option value="">Choose a package</option>
                            @foreach($packages as $voucherPackage)
                                <option value="{{ $voucherPackage->slug }}" @selected(old('package') === $voucherPackage->slug)>{{ $voucherPackage->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2"><button class="plan-select-button w-100" type="submit">Apply</button></div>
                </form>
            </div>
        </div>
    </div>

    <div class="pricing-container pricing-new ">
        @foreach($packages as $package)
            <?php $plan_config = config('packages.plans')[$package->slug] ?? []; ?>
            <div class="card pricing-card">
                <div class="card-body d-flex flex-column justify-content-between">
                    <!-- Card Content -->
                    <div>
                        <h5 class="text-center pricing-title">{{ $package->title }}</h5>
                        @if(!empty($package->subtitle))
                        <p class="text-center pricing-title-description">{{ $package->subtitle }}</p>
                        @endif
                        <h1 class="text-center price-plan">{{ $package->price_label }}</h1>
                        <div class="text-center">
                            @foreach($package->featureList() as $feature)
                            <div class="pricing-list-item">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                        <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                    </svg>
                                </span>
                                <span class="pricing-text">{{ $feature }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Button Container -->
                    @if($user_package === $package->slug)
                        <div class="d-flex justify-content-center button-container-top">
                            <p class="active-package">Active</p>
                        </div>
                    @else
                        @if(config('packages.driver') === 'cashier')
                            <div class="d-flex justify-content-center button-container-top">
                                @if(!empty($package->stripe_price_id))
                                    <a href="{{ route('checkout.start', $package->slug) }}" class="w-100">
                                        <button class="plan-select-button">{{ $package->button_text }}</button>
                                    </a>
                                @else
                                    <button class="plan-select-button" disabled style="opacity:.6; cursor:not-allowed;">Unavailable</button>
                                @endif
                            </div>
                        @elseif(session('sso_link') && !empty($plan_config['wc_product_id']))
                            <div class="d-flex justify-content-center button-container-top">
                                <a href="{{ session('sso_link') }}&path=https%3A%2F%2Fdecodemybrain.com%2Fcheckout%2F%3Fclear-cart%3D1%26add-to-cart%3D{{ $plan_config['wc_product_id'] }}"
                                target="_blank"
                                class="w-100">
                                    <button class="plan-select-button">{{ $package->button_text }}</button>
                                </a>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
