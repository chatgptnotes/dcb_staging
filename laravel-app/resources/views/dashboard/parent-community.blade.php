@extends('layouts.dashboard-layout')

@section('title', 'Careers')

@section('content')

<style>
.content-main{
    background-color: #fff !important;
}
.form-padding{
    padding: 24px;
}
input, textarea{
    border: 1px solid #0008141A;
border-radius: 8px;
}
.yellow-btn{
    font-size: 18px !important;
    color: #fff !important;
}
</style>
<div>

<div class="p-0 w-100">
        <h3 class="section-title text-purple mt-0 mb-4" style="font-weight: 600 !important;">
            Parent Community 
        </h3>
        @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
        @if(Session::has('success')) <p style="color:green;font-size:14px; border: 2px solid green; padding: 10px; width: fit-content; font-weight: 600;"><?php echo Session::get('success') ?></p>@endif
 <form action="" method="post" enctype="multipart/form-data" class="w-100 d-flex flex-column flex-lg-row justify-content-center">
@csrf
                    
        <div class="row w-100 form-padding" style="border-radius: 16px; border: 1px solid #7070701A;">
                        <div class="mb-3 col-md-6 pe-0 pe-md-2 ps-0">
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400 !important; font-size: 16px !important">First Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="first_name" value="">
                            @if($errors->has("first_name")) <p style="color:red;font-size:14px;">{{ $errors->first('first_name') }}
                            </p>
                            @endif
                        </div>
                        <div class="mb-3 col-md-6  pe-0 pe-md-2 ps-0">
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400 !important; font-size: 16px !important">Last Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="last_name" value="">
                            @if($errors->has("last_name")) <p style="color:red;font-size:14px;">{{ $errors->first('last_name') }}
                            </p>
                            @endif
                        </div>
                        <div class="mb-3 col-md-6 pe-0 pe-md-2  ps-0">
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400 !important; font-size: 16px !important">Email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="">
                            @if($errors->has("email")) <p style="color:red;font-size:14px;">{{ $errors->first('email') }}
                            </p>
                            @endif
                        </div>
                        <div class="mb-3 col-md-6  pe-0 pe-md-2 ps-0">
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400 !important; font-size: 16px !important">Subject</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" value="">
                            @if($errors->has("subject")) <p style="color:red;font-size:14px;">{{ $errors->first('subject') }}</p>
                            @endif
                        </div>
                        <div class="mb-3 mt-3 col-md-12  pe-0 pe-md-2 ps-0">
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400 !important; font-size: 16px !important">Message</label>
                            <textarea  class="form-control"  name="message" rows="5"></textarea>
                            @if($errors->has("message")) <p style="color:red;font-size:14px;">{{ $errors->first('message') }}
                            </p>
                            @endif
                        </div>
                    <div class="col-md-3 col-lg-2  pe-0 ps-0 d-flex justify-content-center justify-content-lg-start">

                        <button class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5 w-100 mb-5" style="max-width: 138px;">Send</button>
                    </div>
                
  
        </div>

</form>

       

    </div>
</div>
@endsection








    <!--<div class="p-3 w-100">-->
    <!--    <h3 class="section-title text-purple mt-3">-->
    <!--        Parent community-->
    <!--    </h3>-->
    <!--    <div class="d-flex flex-row mt-5">-->
    <!--        <input type="text" placeholder="What's on your mind?" class="parentInput me-2">-->
    <!--        <button class="postbutton  me-2">Post</button>-->
    <!--        <button class="AddImage hideOnMobile">-->
    <!--            + Add Image-->
    <!--        </button>-->
    <!--    </div>-->
    <!--    {{-- sec 1 --}}-->
    <!--    <div class="d-flex flex-column w-100 mb-5">-->

    <!--        <div class="d-flex flex-column w-100">-->
    <!--            <div class="d-flex flex-row mb-3 mt-5">-->
    <!--                <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                    style="border-radius: 100%; width: 80px; height: 80px;">-->
    <!--                <div class="d-flex flex-column px-3">-->
    <!--                    <p class="parentName mb-0">Name</p>-->
    <!--                    <span class="parentCareer">Career path name</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="d-flex flex-column flex-lg-row w-100">-->
    <!--                <div class="col-12 col-lg-6">-->


    <!--                    <p class="parentName mb-0">Post title name</p>-->
    <!--                    <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                        style="border-radius: 12px; width: 100%; height: auto;">-->
    <!--                    <div class="d-flex w-100 justify-content-between">-->
    <!--                        <p class="eventDateTimePurple"><i class="bi bi-chat-left-text pe-2"></i>20 comments</p>-->
    <!--                        <p class="eventDateTimePurple">2hrs agos</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-12 col-lg-6 px-2 px-lg-5 d-flex flex-column">-->
    <!--                    <div class="scrollSec">-->
    <!--                        <div class="d-flex flex-column flex-lg-row">-->
    <!--                            <div class="col-12 col-lg-2 px-2">-->
    <!--                                <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                                    style="border-radius: 100%; width: 70px; height: 70px;">-->
    <!--                            </div>-->
    <!--                            <div class="col-12 col-lg-10 px-2">-->
    <!--                                <p class="parentName mb-0">Name</p>-->
    <!--                                <p class="section-description-intentship">-->
    <!--                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,-->
    <!--                                    dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam-->
    <!--                                    laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt-->
    <!--                                </p>-->
    <!--                                <p class="eventDateTimePurple">2 hrs ago</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="d-flex flex-column flex-lg-row">-->
    <!--                            <div class="col-12 col-lg-2 px-2">-->
    <!--                                <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                                    style="border-radius: 100%; width: 70px; height: 70px;">-->
    <!--                            </div>-->
    <!--                            <div class="col-12 col-lg-10 px-2">-->
    <!--                                <p class="parentName mb-0">Name</p>-->
    <!--                                <p class="section-description-intentship">-->
    <!--                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,-->
    <!--                                    dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam-->
    <!--                                    laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt-->
    <!--                                </p>-->
    <!--                                <p class="eventDateTimePurple">2hrs agos</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="d-flex flex-column flex-lg-row">-->
    <!--                            <div class="col-12 col-lg-2 px-2">-->
    <!--                                <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                                    style="border-radius: 100%; width: 70px; height: 70px;">-->
    <!--                            </div>-->
    <!--                            <div class="col-12 col-lg-10 px-2">-->
    <!--                                <p class="parentName mb-0">Name</p>-->
    <!--                                <p class="section-description-intentship">-->
    <!--                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,-->
    <!--                                    dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam-->
    <!--                                    laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt-->
    <!--                                </p>-->
    <!--                                <p class="eventDateTimePurple">2hrs agos</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <button class="parentComment mt-2">+ Add your comment</button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="d-flex flex-column w-100">-->
    <!--            <div class="d-flex flex-row mb-3 mt-5">-->
    <!--                <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                    style="border-radius: 100%; width: 80px; height: 80px;">-->
    <!--                <div class="d-flex flex-column px-3">-->
    <!--                    <p class="parentName mb-0">Name</p>-->
    <!--                    <span class="parentCareer">Career path name</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="d-flex flex-column flex-lg-row w-100">-->
    <!--                <div class="col-12 col-lg-6">-->


    <!--                    <p class="parentName mb-0">Post title name</p>-->
    <!--                    <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                        style="border-radius: 12px; width: 100%; height: auto;">-->
    <!--                    <div class="d-flex w-100 justify-content-between">-->
    <!--                        <p class="eventDateTimePurple"><i class="bi bi-chat-left-text pe-2"></i>20 comments</p>-->
    <!--                        <p class="eventDateTimePurple">2hrs agos</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-12 col-lg-6 px-2 px-lg-5 d-flex flex-column">-->
    <!--                    <div class="scrollSec">-->
    <!--                        <div class="d-flex flex-column flex-lg-row">-->
    <!--                            <div class="col-12 col-lg-2 px-2">-->
    <!--                                <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                                    style="border-radius: 100%; width: 70px; height: 70px;">-->
    <!--                            </div>-->
    <!--                            <div class="col-12 col-lg-10 px-2">-->
    <!--                                <p class="parentName mb-0">Name</p>-->
    <!--                                <p class="section-description-intentship">-->
    <!--                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,-->
    <!--                                    dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam-->
    <!--                                    laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt-->
    <!--                                </p>-->
    <!--                                <p class="eventDateTimePurple">2 hrs ago</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="d-flex flex-column flex-lg-row">-->
    <!--                            <div class="col-12 col-lg-2 px-2">-->
    <!--                                <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                                    style="border-radius: 100%; width: 70px; height: 70px;">-->
    <!--                            </div>-->
    <!--                            <div class="col-12 col-lg-10 px-2">-->
    <!--                                <p class="parentName mb-0">Name</p>-->
    <!--                                <p class="section-description-intentship">-->
    <!--                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,-->
    <!--                                    dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam-->
    <!--                                    laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt-->
    <!--                                </p>-->
    <!--                                <p class="eventDateTimePurple">2hrs agos</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="d-flex flex-column flex-lg-row">-->
    <!--                            <div class="col-12 col-lg-2 px-2">-->
    <!--                                <img src="{{ asset('assets/images/zebra1.PNG') }}"-->
    <!--                                    style="border-radius: 100%; width: 70px; height: 70px;">-->
    <!--                            </div>-->
    <!--                            <div class="col-12 col-lg-10 px-2">-->
    <!--                                <p class="parentName mb-0">Name</p>-->
    <!--                                <p class="section-description-intentship">-->
    <!--                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,-->
    <!--                                    dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam-->
    <!--                                    laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt-->
    <!--                                </p>-->
    <!--                                <p class="eventDateTimePurple">2hrs agos</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <button class="parentComment mt-2">+ Add your comment</button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->