<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
  <title>DecodeMyBrain</title>
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <style>
    @font-face {
    font-family: 'Aptos';
    src: url('{{ asset('fonts/Aptos-Light.ttf') }}') format('truetype');
    font-weight: normal;
    font-style: normal;
}
 body {
        font-family: 'Aptos', sans-serif !important;
        ;
        ;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    div,
    a,
    li {
        font-family: 'Aptos', sans-serif !important;
        ;
        ;
    }
        .dropdown-toggle::after{
            display: none !important;
        }
        .bottom-box-shadow{
           box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1) !important;
           border-bottom: none !important;
        }
        .footer-nav{
          margin-bottom: 25px !important;
        }
    </style>
    <!-- <div class="container text-end">
        <p class="nav-signin" data-bs-toggle="modal" data-bs-target="#login_modal"><i class="fa-solid fa-circle-user"></i> Sign In</p>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bottom-box-shadow">
        <div class="container">
          <a class="navbar-brand" href="{{ route('landing') }}">
            <img src="{{ asset('assets/images/DecodemyBrain new logo-03.png') }}" class="d-inline-block align-top" alt="Logo" style="width: 200px; height: auto;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="width:25px;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
   <!--         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">-->
   <!--           <li class="nav-item">-->
   <!--             <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>-->
   <!--           </li>-->
   <!--           <li class="nav-item dropdown">-->
   <!--             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"-->
   <!--data-bs-toggle="dropdown" aria-expanded="false">-->

   <!--              Programs <i style="font-size:12px" class="fa">&#xf107;</i>-->
   <!--             </a>-->
   <!--             <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
   <!--               <a class="dropdown-item" href="#">Action</a>-->
                 
   <!--             </div>-->
   <!--           </li>-->

   <!--           <li class="nav-item">-->
   <!--             <a class="nav-link" href="{{url('about-us')}}">About</a>-->
   <!--           </li>-->
   <!--           <li class="nav-item dropdown">-->
   <!--            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"-->
   <!--data-bs-toggle="dropdown" aria-expanded="false">-->
   <!--              Our Method <i style="font-size:12px" class="fa">&#xf107;</i>-->
   <!--             </a>-->
   <!--             <div class="dropdown-menu" aria-labelledby="navbarDropdown2">-->
   <!--               <a class="dropdown-item" href="#">Action</a>-->
                  
   <!--             </div>-->
   <!--           </li>-->
   <!--           <li class="nav-item">-->
   <!--             <a class="nav-link " href="{{url('home-events')}}">Contact</a>-->
   <!--           </li>-->
<?php
           if(session('user_id')){ ?>
   <!--              <li class="nav-item">-->
   <!--                 <a class="nav-link nav-btn" href="{{url('dashboard')}}">Dashboard</a>-->
   <!--             </li>-->
            
 <?php } else{ ?>
   <!--                 <li class="nav-item">-->
   <!--                 <a class="nav-link nav-btn" href="{{url('sign-in')}}">Lets Begin</a>-->
   <!--                 </li>-->
     <?php }
           ?>
             
   <!--         </ul>-->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">Home</a></li>
              @if(session('user_id'))
                <li class="nav-item"><a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}">Log out</a></li>
              @else
                <li class="nav-item"><a class="nav-link" href="{{ url('sign-in') }}">Sign in</a></li>
              @endif
            </ul>
          </div>
        </div>

      </nav>
