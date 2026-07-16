@extends('layouts.dashboard-layout')

@section('title', 'Careers')

@section('content')
<div>

    <div class="w-100 d-flex flex-column">
        <h3 class="section-title text-purple mt-0">
            Profile 
        </h3>
        @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
        @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif

        <div class="w-100 profileContent">

         
            <div class="row">
               
               
                    <div class="col-md-5">
                         <form action="" method="post" enctype="multipart/form-data" class="w-100 justify-content-center">
                        @csrf
                            <h5 class=" text-purple mt-4 mb-3"></h5>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{session('user_details')['email']}}" readonly>
                            @if($errors->has("email")) <p style="color:red;font-size:14px;">{{ $errors->first('email') }}
                            </p>
                            @endif
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{session('user_details')['display_name']}}">
                            @if($errors->has("name")) <p style="color:red;font-size:14px;">{{ $errors->first('name') }}
                            </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="date_of_birth" value="{{session('user_details')['date_of_birth']}}" readonly>
                            @if($errors->has("date_of_birth")) <p style="color:red;font-size:14px;">{{ $errors->first('date_of_birth') }}</p>
                            @endif
                        </div>
                         <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone_number" value="{{session('user_details')['billing_phone']}}">
                            @if($errors->has("phone_number")) <p style="color:red;font-size:14px;">{{ $errors->first('phone_number') }}
                            </p>
                            @endif
                        </div>
                         <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Your Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="password" value="">
                            @if($errors->has("password")) <p style="color:red;font-size:14px;">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                       
                          <button type="submit" name="submit_type" value="basic_details" class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5 mb-5">Save</button>
                          </form>
                    </div>
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-5">
                              <form action="" method="post" enctype="multipart/form-data" class="w-100 justify-content-center">
                        @csrf
                            <h5 class=" text-purple mt-4 mb-3">Change Password</h5>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="current_password" value="">
                            @if($errors->has("current_password")) <p style="color:red;font-size:14px;">{{ $errors->first('current_password') }}
                            </p>
                            @endif
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="password" value="">
                            @if($errors->has("password")) <p style="color:red;font-size:14px;">{{ $errors->first('password') }}
                            </p>
                            @endif
                        </div>
                        
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="password_confirmation" value="">
                            @if($errors->has("password_confirmation")) <p style="color:red;font-size:14px;">{{ $errors->first('password_confirmation') }}
                            </p>
                            @endif
                        </div>
                       
                        <button type="submit" name="submit_type" value="change_password" class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5 mb-5">Save</button>
                          </form>
                    </div>

               
            </div>
            <!--<div class="col-12 col-lg-4 hideOnMobile flex-column">-->
            <!--    <div class="d-flex flex-column justify-content-center align-items-center mb-3">-->
            <!--        <img src="{{ asset('assets/images/zebra1.PNG') }}" style="border-radius: 100%; width: 100px; height: 100px;">-->
            <!--        <p class="yellow-text mb-0">Name</p>-->
            <!--        <span class="yellow-text-small">Career path name</span>-->
            <!--    </div>-->
            <!--    <p class="section-description-intentship">-->
            <!--        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia repellat modi? Ullam laudantium-->
            <!--        reiciendis-->
            <!--        inventore explicabo quisquam error illo quidem, recusandae accusamus ducimus voluptatibus amet quibusdam-->
            <!--        officia-->
            <!--        enim non.-->
            <!--    </p>-->
            <!--</div>-->
        </div>



        <!--<div class="displayOnMobile d-flex flex-column mb-5">-->
        <!--    <p class="text-purple mb-0 text-center" style="font-weight: 600">You can add parent buddy</p>-->
        <!--    <button class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5 w-100">Add buddy</button>-->
        <!--</div>-->

        <!--<div class="row mt-5 mb-5 hideOnMobile">-->
        <!--    <div class="d-flex flex-row-reverse flex-lg-row">-->
        <!--        <div class="col-8 col-lg-6 p-2 p-lg-5 text-center d-flex flex-column justify-content-center align-items-center">-->
        <!--            <h3 class="section-title text-purple ">You can add parent <br> buddy</h3>-->
        <!--            <button class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5">Add budyy</button>-->
        <!--        </div>-->
        <!--        <div class="col-4 col-lg-6 p-2 p-lg-5">-->
        <!--            <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

    </div>
</div>
@endsection
