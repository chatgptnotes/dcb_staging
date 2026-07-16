@include('layouts.header')
<style>
.number {
    font-size: 16px;
    color: #FFCC66;
    font-weight: 600;
    background-color: #9CD2A5;
    margin-bottom: 10px;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    padding-top: 3px;
    margin-right: 10px;
}

.step-txt {
    color: #f5c84c;
    background-color:#fffaed; /* Light yellow */
    padding: 8px 16px;
    font-size: 16px;
    font-weight: 400;
    border-radius: 30px;
    display: inline-block; /* Makes it look like a button */
}

.question-count {
    color: green;
    background-color:rgb(178, 247, 169); /* Light yellow */
    padding: 8px 16px;
    border-radius: 8px;
    display: inline-block; /* Makes it look like a button */
}

.tab3 {
    border: 2px solid #f5f5f5; /* Blue border, change color as needed */
    border-radius: 30px; /* Rounded corners */
    padding: 20px;
    margin-left: 100px;
    margin-right: 100px; /* Optional: Adds some spacing inside the border */
}

.question-nav-back {
    border: 2px solid green;
    color: green;
    background-color: white;
    border-radius: 30px;
    padding: 8px 16px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    min-width: 100px !important;
}

.question-nav-back:hover {
    background-color: green;
    color: white;
}

.question-nav-next {
    border: 2px solid #F6C94D;
    color: white;
    background-color: #F6C94D;
    border-radius: 30px;
    padding: 8px 16px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    min-width: 100px !important;
}

.question-nav-next:hover {
    background-color: darkgoldenrod;
    border-color: darkgoldenrod;
}

.section-title {
    color: #F1935D;
    font-size: 24px;
    font-weight: 600;
}

p {
    font-size: 16px;
    color: #000;
    font-weight: 400;
}

.question-title {
    color:#080C06;
    font-size: 20px;
    font-weight: 600;
}

h4 {
    color:#080C06;
    font-size: 16px;
    font-weight: 600;
}

.clock {
        color: #C6C8CA;
        font-weight: 400;
        font-size: 14px;
    }

    .section-margin-bottom {
    margin-bottom: 100px;
}
.section-margin-top {
    margin-top: 30px;
}

@media only screen and (max-width: 768px) {


.tab3 {
border: 2px solid #F0F0F0;
border-radius: 30px;
padding: 20px;
margin-left: 10px;
margin-right: 10px;
}
}





</style>
<?php 
    $dob = session('user_dob'); 
    $age = \Carbon\Carbon::parse($dob)->age; 
?>
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">
    <?php
    if ($age >= 15){
    ?> 
    <h5 class="step-txt">Step 02/02</h5>
    <?php } else{ ?> 
    <h5 class="step-txt">Step 01</h5>
    <?php } ?>
        <h3 class="section-title text-purple" style="font-weight: 600 !important;">Hurray! You Did It!</h3>

        <div class="tab3  d-flex flex-column-reverse flex-lg-row  row mt-5 " style="border: 1px solid #F0F0F0;">
           
            <div class="col-lg-8">
                     <p class="p1 ">You have completed your<strong>My Brain Design Assessment.</strong> — now get ready to discover <strong>what your brain is really like!</strong><br>
                     It’s time to <strong>unleash your strengths</strong> and <strong>master your life </strong>with your unique <strong>brain power!</strong></p>

               
                <br>
                <div class="row align-items-center text-md-start text-center">
                <div class="col-md-3 mb-3 mb-md-0">
                   
                </div>
                <div class="col-md-9">
                   
                </div>
            </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
    <img src="{{ asset('assets/images/img4445.png') }}" alt="Question Image" class="img-fluid ">
</div>

        </div>
    </div>
</section>
<section class="footer-nav  border-top bg-light" style="border: none !important;">

<!-- Progress Bar -->
<div class="progress " style="height: 2px; background-color: #e0e0e0; width: 100%;">
            <div class="progress-bar" role="progressbar" 
                style="width: 100%; background-color:rgb(19, 19, 19);"
                >
            </div>
        </div>
   <br>
    <div class="container">
        
            <!-- Left Side: Question Number -->
            
            <!-- Right Side: Navigation Buttons -->
            <div class="col-12 text-end">
           

                           

                            <a href="{{url('dashboard')}}"><button class="question-nav-next text-purple">Dashboard</button></a>
                
                
            </div>
                            
        
    </div>
</section>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">