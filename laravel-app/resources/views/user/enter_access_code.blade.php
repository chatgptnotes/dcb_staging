@include('layouts.header')
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">



        <div class="row mt-5  vh-100">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 ">
                <div class="text-center">
                <img src="{{ asset('assets/images/zebra_logo.PNG') }}" class="d-inline-block align-top" alt="Logo">
                <h3 class="section-title text-purple mt-5">Enter Access Code</h3>
                @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
                @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif
                </div>
                <form action=""  method="post" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3 mt-5">
                    <label for="exampleFormControlInput1" class="form-label">Access Code</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="access_code">
                    @if($errors->has("access_code")) <p style="color:red;font-size:14px;">{{ $errors->first('access_code') }}</p>@endif
                  </div>
                  <div class="text-center">
                  <button type="submit" class="yellow-btn mt-4 ">Confirm</button>
                </div>
            </form>
               
            </div>
            <div class="col-md-4">

            </div>
        </div>


    </div>
    </section>
@include('layouts.footer')
