@include('layouts.header')
<style>
body {
    font-family: 'Arial', sans-serif;
}

.left-panel {
    background-color: #F1935D;
    /* Orange background color */
    color: white;
    text-align: center;
    padding: 50px 20px;
    min-height: 650px;
    
}

.left-panel img {
    max-width: 100%;
    height: auto;
}

.right-panel {
    padding: 50px 20px;
    min-height: 500px;
}

.form-control,
.btn-custom {
    margin-bottom: 20px;
}

.btn-custom {
    background-color: black;
    color: white;
    border: none;
    padding: 10px 0;
    width: 100%;
}

.btn-custom:hover {
    color: #FFFFFF;
}

.form-label-signup {
    font-weight: 600 !important;
}

.signup-form-placeholder::placeholder {
    color: rgb(202, 203, 205);
}

.custom-underline {
    position: relative;
    color: #F1935D; /* Yellow text */
    text-decoration: none; /* Remove default underline */
}

.custom-underline::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0px; /* Adjust thickness */
    width: 100%;
    height: 1.5px; /* Thickness of the underline */
    background-color: #F1935D; /* Yellow underline */
}

@media (max-width: 768px) {

    .left-panel,
    .right-panel {
        padding: 20px; 
    }
}
@media screen and (min-height: 768px) and (min-width: 1024px) {
  .left-panel {
    height: calc(100vh - 92px);
  }

  .row-container {
    height: calc(100vh - 92px);
  }
}

@media screen and (min-height: 620px) and (min-width: 1024px) {
  .left-panel {
    height: calc(100vh - 92px);
  }

  .row-container {
    height: calc(100vh - 92px);
  }
}

@media screen and (max-width: 1200px) {
  .left-panel {
    height: auto;
  }
  
  .row-container {
    height:auto;
  }
}

/*  @media screen and (max-width: 1200px) {*/
/* .left-panel {*/
/*    height: auto !important;*/
/*  }*/
/*}*/
/*@media screen and (min-height: 768px) {*/
/*  .left-panel {*/
/*    height: calc(100vh - 92px);*/
/*  }*/
/*  .row-container{*/
/*       height: calc(100vh - 92px);*/
/*  }*/
/*}*/

.left-panel-space{
    padding-left: 108px;
    padding-right: 108px;
     background-color: #F1935D;
     color: white;
    text-align: center;
    flex: 1;
    height: 100%;
}
.right-panel-space{
    padding-left: 24px;
    padding-right: 108px;
}

@media screen and (max-width: 992px) {
    .left-panel-space{
        padding-left: 60px;
        padding-right: 60px;
    }
    .right-panel-space{
        padding-left: 60px;
        padding-right: 60px;
        padding-bottom: 40px;
        padding-top: 40px;
    }
}

@media screen and (max-width: 600px) {
    .left-panel-space{
        padding-left: 20px;
        padding-right: 20px;
    }
    .right-panel-space{
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 40px;
        padding-top: 40px;
    }
}

</style>

<div class="container-fluid px-0">
    <div class="row align-items-center row-container">
        <div class="col-xl-6 left-panel-space" >
            <div class="row px-0 mx-0">
                <div class="col-12 text-center  px-0 mx-0">
                    <img src="{{ asset('assets/images/signupimg.png') }}" alt="Signup Image" class="img-fluid">
                </div>
                <div class="col-12 text-start pt-5 pb-3  px-0 mx-0">
                    <img src="{{ asset('assets/images/DecodemyBrain new logo-03.png') }}" alt="Logo Image" class="img-fluid"
                        style="width: 250px; height: auto;">
                </div>
                <div class="col-12 text-start  px-0 mx-0">
                    <p >A comprehensive and holistic approach to
                        self-discovery and personal development through
                        cutting-edge Neuroscience.</p>
                </div>
            </div>
        </div>

        <div class="col-xl-6 right-panel-space">
            <h2 class="pt-3 pb-5" style="color: #F1935D; font-weight: 600 !important">Forgot Password</h2>
            @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
            @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif
            <form action=""  method="post" enctype="multipart/form-data">
            @csrf
                <div class="row px-0 mx-0">
                    <div class="col-lg-12 px-0 ps-lg-0 pe-lg-1">
                        <label for="first-name" class="pb-2 form-label-signup" style="font-weight: 600">User Name or Email</label>
                        <input type="text" class="form-control signup-form-placeholder" id="first-name"
                            placeholder="User Name or Email" required
                            style="border-radius:10px; border-color:rgb(233, 232, 232);"  name="identifier">
                            @if($errors->has("identifier")) <p style="color:red;font-size:14px;">{{ $errors->first('identifier') }}</p>@endif
                    </div>
                  
                </div>
                <div class="row px-0 mx-0  mt-3 mb-2">
                    <div class="col-12">
                        <h3 class="small-link text-purple text-start"  style="font-weight: 600">Back to sign in ? <a href="{{url('sign-in')}}" style="color:#F1935D;">Sign In</a></h3>
                    </div>
                   
                </div>
                
                <button type="submit" class="btn btn-custom" style="border-radius: 20px; font-weight: 600">Send OTP</button>
            </form>
        </div>
    </div>
</div>
@include('layouts.footer')
