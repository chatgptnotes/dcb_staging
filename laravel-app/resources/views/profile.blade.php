@extends('layouts.dashboard-layout')

@section('title', 'Careers')

@section('content')
<style>
.content-main{
    background-color: #fff !important;
}
.badge-row .badge{
    padding: 10px 20px !important;
    border-radius: 8px  !important;
}
.progress-bar{
    background-color: #F1935D !important;
}
.profile-card .section{
    border-bottom: 1px solid #7070701A !important;
}

.rounded-phill-button{
    padding: 10px 15px !important;
    font-weight: 600 !important;
    min-width: 140px !important;
}
</style>
<div>
        <div class="mb-4">
            <h2 class="page-title">Profile</h2>
            <p class="page-description">Overview of profile details.</p>
            
                    @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
        @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif
        </div>

        <div class="card profile-card" style="border: 1px solid #7070701A; border-radius: 16px;">
            <div class="card-body px-0 pt-0">
                <!-- Profile Head Section -->
                <div class="section profile-head-section pb-3 ">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6 mt-0">
                            <div class="d-flex flex-column flex-lg-row align-items-center text-center text-lg-start">
                                <div class="col-4 col-lg-2 mb-3 mb-lg-0 d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/images/user.png') }}" alt="" class="rounded" style="width:70px;">
                                </div>
                                <div class="col-12 col-lg-10 d-flex flex-column justify-content-center ps-2">
                                    <h5 class="profile-name mb-0" style="font-weight: 600 !important;">{{session('user_details')['display_name']}}</h5>
                                    <!--<p class="profile-email mb-0">Consectetur adipiscing elit</p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-0  d-flex flex-column justify-content-center">
                            <div class="d-flex flex-column flex-lg-row justify-content-lg-end gap-2 button-row">
                                <!--<button class="rounded-phill-button outlined">Share my Profile</button>-->
                                <a href="{{url('profile-settings')}}" class="d-flex justify-content-center align-items-center"><button class="rounded-phill-button background">Profile Setting</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Overview Section -->
                <div class="section profile-overview-section py-0 mb-0"  style="border-bottom: none !important;">
                    <div class="row g-3">
                        <!--<div class="col-12 col-lg-6 order-1 order-lg-1">-->
                        <!--    <h5 class="definition-text mb-1" style="font-weight: 600 !important;">Basic Details</h5>-->
                        <!--    <p class="definition-detail" style="font-weight: 400 !important;" >Consectetur adipiscing elit</p>-->
                        <!--</div>-->
                        <!--<div class="col-12 col-lg-6 order-2 order-lg-2">-->
                        <!--    <div class="d-flex justify-content-lg-end justify-content-start">-->
                        <!--        <a href="#" class="text-decoration-none">-->
                        <!--            <p class="edit-details">-->
                        <!--                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512"><path fill="#f1935d" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>-->
                        <!--                Edit Details-->
                        <!--            </p>  -->
                        <!--        </a>-->
                        <!--    </div>   -->
                        <!--</div>-->
                    </div>
                </div>
<!--<pre>-->
<!--    {{ print_r(session('user_details'), true) }}-->
<!--</pre>-->
                <!-- Profile Edit Section -->
                <div class="section profile-edit-section mt-0" >
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-12 col-12">
                            <div class="d-lg-flex d-block">
                                <div class="row">
                                    <p class="definition-detail mb-1" style="font-weight: 400 !important;">Full Name</p>
                                    <h5 class="definition-text"  style="font-weight: 600 !important;">{{session('user_details')['display_name']}}</h5>
                                </div>

                                <div class="row">
                                    <p class="definition-detail mb-1" style="font-weight: 400 !important;">Email address</p>
                                    <h5 class="definition-text"  style="font-weight: 600 !important;">{{session('user_details')['email']}}</h5>
                                </div>

                                <div class="row">
                                    <p class="definition-detail mb-1" style="font-weight: 400 !important;">Phone number</p>
                                   <h5 class="definition-text" style="font-weight:600 !important;">
                                        {{ trim(session('user_details')['billing_phone'] ?? '') !== '' ? session('user_details')['billing_phone'] : '-' }}
                                    </h5>
                                </div>

                                <div class="row">
                                    <p class="definition-detail mb-1" style="font-weight: 400 !important;">Country</p>

                                     <h5 class="definition-text" style="font-weight:600 !important;">
                                        {{ trim(session('user_details')['billing_country'] ?? '') !== '' ? session('user_details')['billing_country'] : '-' }}
                                    </h5>
                                </div>   
                                <div class="row">
                                    <p class="definition-detail mb-1" style="font-weight: 400 !important;">Date of Birth</p>
                                    <h5 class="definition-text"  style="font-weight: 600 !important;">{{session('user_details')['date_of_birth']}}</h5>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Interest Section -->
                <div class="section profile-interest-section py-0 mb-0"  style="border-bottom: none !important;">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <!--<h5 class="definition-text" style="font-weight: 600 !important;">Your Interests</h5>-->
                            <!--<p class="definition-detail" style="font-weight: 400 !important;">Consectetur adipiscing elit</p>-->
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <span class="progress-text">Interest completion</span>
                                <div class="progress flex-grow-1" style="height: 5px">
                                    <div class="progress-bar" style="width: 25%"></div>
                                </div>
                                <span class="progress-percentage">70%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Careers Section -->
                <!--<div class="section profile-interest-section py-0 mt-0"  style="border-bottom: none !important;">-->
                <!--    <div class="row">-->
                <!--        <div class="col-12">-->
                <!--            <h5 class="definition-text" style="font-weight: 400 !important;">Careers</h5>-->
                <!--            <div class="badge-row d-flex flex-wrap gap-2">-->
                <!--                <span class="badge text-bg-danger" style="font-weight: 400 !important;">Doctor</span>-->
                <!--                <span class="badge text-bg-danger" style="font-weight: 400 !important;">Pilot</span>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <!-- Card Footer -->
            <div class="card-footer py-2" style="border-radius: 0px 0px 16px 16px; background-color: #85D6A51A">
                <div class="d-flex flex-column flex-lg-row py-2">
                    <div class="col-12 col-lg-6">
                        <h6 class="definition-text" style="color: #000814 !important; font-weight: 600 !important;">Let’s get more information — your details are incomplete.</h6>
                        <p class="definition-detail">Let’s gather a bit more information about you to personalize your journey ahead. The more we understand you, the better we can help unlock your potential. Your profile will help us tailor recommendations that align with your goals and abilities.</p>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-lg-end justify-content-start">
                        <div class="mb-lg-0 mb-3 d-flex align-items-center">
                            <a href="{{ url('complete-profile') }}"><button class="complete-button">Complete Profile</button></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection



