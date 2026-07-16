@include('layouts.header')
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">



        <div class="row mt-5  vh-100">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 ">
                <div class="text-center">
                <img src="{{ asset('assets/images/Main_logo.png') }}" class="d-inline-block align-top" alt="Logo" style="height: auto; width: 250px;">
                <h3 class="section-title text-purple mt-5">Sign In</h3>
                @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
                @if(Session::has('message')) <p style="color:red;font-size:14px;"><?php echo Session::get('message') ?></p>@endif
                </div>
                <form action=""  method="post" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3 mt-5">
                    <label for="exampleFormControlInput1" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="user_name">
                    @if($errors->has("user_name")) <p style="color:red;font-size:14px;">{{ $errors->first('user_name') }}</p>@endif
                  </div>
                  <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password" >
                    @if($errors->has("password")) <p style="color:red;font-size:14px;">{{ $errors->first('password') }}</p>@endif
                  </div>
                  <div class="text-center">
                  <button type="submit" class="yellow-btn mt-4 ">Sign In</button>
                </div>
            </form>
                <h3 class="small-link text-purple text-start mt-5">I don't have a account ? <a href="{{url('sign-up')}}">Sign Up</a></h3>
            </div>
            <div class="col-md-4">

            </div>
        </div>


    </div>
    </section>
@include('layouts.footer')
