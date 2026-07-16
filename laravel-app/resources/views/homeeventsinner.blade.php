@include('layouts.header')


<section class="container mt-5 section-margin-bottom d-none d-md-none d-lg-none d-xl-block d-xxl-block">
<h3 class="section-title text-purple">Our Events</h3>
<h6 class=" text-purple">{{$event_details->name}}<h6>

    <div class="row">
        <div class="col-md-6">
       <?php echo $event_details->description ?>
        </div>
        <div class="col-md-6">
        <img src="{{ asset('db_files/events/featured/'.$event_details->featured_image) }}" class="w-100 h-100"  >
        </div>
  </div>
</section>

<!-- ipad pro -->

<section class="container section-margin-top section-margin-bottom d-none d-xl-none d-lg-block  ">
<h3 class="section-title text-purple">Our Events</h3>
<h6 class=" text-purple">{{$event_details->name}}<h6>

    <div class="row">
        <div class="col-md-6">
      <?php echo $event_details->description ?>
            
        </div>
        <div class="col-md-6">
        <img src="{{ asset('db_files/events/featured/'.$event_details->featured_image) }}" class="w-100 h-100"  >
        </div>
  </div>
</section>



<!-- tablet -->

<section class="container section-margin-top section-margin-bottom d-none d-lg-none d-md-block ">
<h3 class="section-title text-purple">Our Events</h3>
<h6 class=" text-purple">{{$event_details->name}}<h6>

    <div class="row">
        <div class="col-md-6">
       <?php echo $event_details->description ?>
        </div>
        <div class="col-md-6">
        <img src="{{ asset('db_files/events/featured/'.$event_details->featured_image) }}" class="w-100 h-100"  >
        </div>
  </div>
</section>




<section class="container section-margin-top section-margin-bottom d-none d-md-block d-lg-block d-xl-block d-xxl-block">
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
            <h3 class="section-title text-purple">Find out your child or<br> your brain !</h3>
            <button class="yellow-btn mt-4">Lets's find out </button>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-60"  >
        </div>
  </div>
</section>




<!-- mobile -->

<section class="container section-margin-top section-margin-bottom d-lg-none d-md-none d-lg-none d-xl-none d-xxl-none">
<h3 class="section-title text-purple">Our Events</h3>
<h6 class=" text-purple">{{$event_details->name}}<h6>

    <div class="row">
    <div class="col-md-6">
         <img src="{{ asset('db_files/events/featured/'.$event_details->featured_image) }}" class="w-100 h-100"  >
        </div>
        <div class="col-md-6">
       <?php echo $event_details->description ?>
            
        </div>
        
  </div>
</section>

<!-- mobile -->
<div class="position-relative d-lg-none d-md-none d-lg-none d-xl-none d-xxl-none">
                <img src="{{ asset('assets/images/2.PNG') }}" class="w-100" style="border-radius: 20px 20px 0 0;">
                
            </div>

            <div class="position-fixed d-lg-none d-md-none d-xl-none d-xxl-none" style="bottom: 300px; left: 0; width: 100%;">
    <button class="yellow-btn mt-4 w-100" style="font-size: 19px; font-weight: 400; border-radius: 20px 20px 0px 0px;">Check your brain's potential, it's FREE!</button>
</div>





<section class="container  section-margin-bottom d-lg-none d-md-none d-xl-none d-xxl-none">
    <div class="row align-items-center position-relative">
        <div class="col-md-6">
           
        </div>
        <div class="col-md-6 text-center">
            <h3 class="section-title text-purple">Find out your child or<br> your brain!</h3>
            <button class="yellow-btn mt-4">Start for FREE!</button>
        </div>
    </div>
</section>











@include('layouts.footer')


  