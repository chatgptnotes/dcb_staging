@include('layouts.header')

<style>
    .number {
        font-size: 16px;
        color: #fff5ba;
        font-weight: 600;
        background-color: #5a559d;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        margin-right: 10px;
    }
    .tab-section {
        background: #fff;
        border: 1px solid #F0F0F0;
        box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);
        border-radius: 30px;
        padding: 20px;
        text-align: left;
    }
    .tab-section img {
        border-radius: 8px;
        max-width: 100%;
        height: auto;
    }
    .tab-section .btn {
        margin-top: 15px;
        background: #5a559d;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
    }

    .heading1 {
        color: #000814;
        font-weight: 400;
        font-size: 24px;


    }

    .p1 {
        color: #000;
        font-weight: 500;
        font-size: 16px;


    }

    .heading2 {
        color: #000814;
        font-weight: 400;
        font-size: 16px;


    }

    .p2 {
        color: #3B3B3B;
        font-weight: 400;
        font-size: 16px;


    }

    .q1 {
        color: #000814;
        font-weight: 400;
        font-size: 16px;


    }

    .qp1 {
        color: #8c8c8c;
        font-weight: 400;
        font-size: 16px;


    }

    .home-slider-btn {
        background-color: #F6C94D;
        color: #000814;
        font-weight: 400;
        font-size: 18px;

    }

    .clock {
        color: #C6C8CA;
        font-weight: 400;
        font-size: 15px;
    }
</style>
<?php 

    $dob = session('user_dob'); 
    $age = \Carbon\Carbon::parse($dob)->age; 
?>
<section class="">
    <div class="container text-center"  style="margin-top: 80px !important;">
        <h3 class="heading1 text-purple" style="font-weight: 600">Find Your Brain Code - Discover How You Think!</h3>
        <p class="p1 ">This fun and insightful test takes just <strong>a few minutes</strong> to complete. Be <strong>honest and spontaneous</strong> — there are no right or wrong answers!</p>
    </div>

    <div class="container" style="margin-top: 48px !important;">
        <div class="tab-section mx-auto col-md-8 col-lg-6">
            <h3 class="heading2" style="font-weight: 600">These are the assessments you are required to complete.</h3>
            <!--<p class="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
            <hr style="border: 1px solid #7070701A;opacity: 0.05">
            <div class="row align-items-center text-md-start text-center">
                <div class="col-md-3 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/img223.png') }}" alt="Example Image" class="img-fluid">
                </div>
                <div class="col-md-9 ">
                    <h4 class="q1" style="font-weight: 600">Assessment 1: Mind over Matter assessment &nbsp; &nbsp;<span class="clock"><i class="bi bi-clock"></i>&nbsp;                    10min</span></h4>
                    <!--<p class="qp1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                </div>
            </div>
            <?php
            if ($age >= 15){
            ?> 
                  
            <div class="row align-items-center text-md-start mt-3 text-center">
                <div class="col-md-3 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/img224.png') }}" alt="Example Image" class="img-fluid">
                </div>
                <div class="col-md-9 ">
                    <h4 class="q1" style="font-weight: 600">Assessment 2: Dimensions Analysis &nbsp; &nbsp;<span class="clock"><i class="bi bi-clock"></i>&nbsp;                    10min</span></h4>
                    <!--<p class="qp1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                </div>
            </div>
            <?php   } ?>
           <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="{{url('questions/q1')}}"><button class="home-slider-btn mt-4" style="font-weight: 600">Get started</button></a>
           </div>

        </div>
    </div>
</section>

@include('layouts.footer')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">