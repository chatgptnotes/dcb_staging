<?php
use App\Models\CustomerDetails;
use App\Models\Events;
use App\Models\WPUsers;
$customer_name = session('user_details')['display_name'];
$customer_email = session('user_details')['email'];
$events = Events::where('status', 'active')->get();

$dob = session('user_dob'); 
$age = \Carbon\Carbon::parse($dob)->age; 

$wp_user =  WPUsers::where('user_id', session('user_id'))->first();
$user_current_age = $wp_user->age ?? 0;
$user_package = $wp_user->package ?? null;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <title>DecodeMyBrain</title>
    <link href="{{ asset('assets/css/style.css') }}?v={{ time() }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard_styles.css') }}?v={{ time() }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS for full calender -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />


    {{-- google font nunito --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    {{-- google font poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<!--{{session('user_id')}}-->
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

    .btn-retake {

        background-color: #ffcc66;
        color: black;
        border-radius: 30px;
        width: 140px;
        height: 42px;
        border: none;
        /*border-color:#ffcc66;*/
    }

    .header-notification ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .header-notification .notification-drop {
        font-family: 'Ubuntu', sans-serif;
        color: #444;
    }

    .header-notification .notification-drop .item {
        padding: 10px;
        font-size: 18px;
        position: relative;
        border-bottom: 1px solid #ddd;
    }

    .header-notification .notification-drop .item:hover {
        cursor: pointer;
    }

    .header-notification .notification-drop .item i {
        margin-left: 10px;
    }

    .header-notification .notification-drop .item ul {
        display: none;
        position: absolute;
        top: 100%;
        background: #fff;
        left: -200px;
        right: 0;
        z-index: 1;
        border-top: 1px solid #ddd;
    }

    .header-notification .notification-drop .item ul li {
        font-size: 12px;
        padding: 15px 15px 15px 15px;
    }

    .header-notification .notification-drop .item ul li:hover {
        background: #ddd;
        color: rgba(0, 0, 0, 0.8);
    }

    @media screen and (min-width: 500px) {
        .header-notification .notification-drop {
            display: flex;
            justify-content: flex-end;
        }

        .header-notification .notification-drop .item {
            border: none;
        }
    }



    .header-notification .notification-bell {
        font-size: 20px;
    }

    .header-notification .btn__badge {
        background: #000;
        color: white;
        font-size: 12px;
        position: absolute;
        top: 0;
        right: 0px;
        padding: 1px 6px;
        border-radius: 50%;
    }

    .header-notification .pulse-button {
        box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.5);

    }

    .header-notification .pulse-button:hover {}

    .header-notification .notification-text {
        font-size: 14px;
        font-weight: bold;
    }

    .header-notification .notification-text span {
        float: right;
    }

    .dashHeader::placeholder {
        color: #949A92 !important;
        font-size: 14px !important;
    }

    .dashboard-top {
        border-bottom: solid 1px #E3E7DD !important;
    }

    .dashboard-nav {
        border-right: 1px solid #E3E7DD !important;
    }

    .main-wrapper {
        padding: 115px 20px;
    }






    .notification-container {
        display: none;
        position: absolute;
    }

    .header-notification ul {
        list-style: none;
    }

    header {
        max-height: 68px;
        height: 68px;
    }

    .header-search {
        max-width: 525px;
        height: 40px;
        border: 1px solid #DBDDDA;
        border-radius: 8px;
    }

    .aside-logo {
        padding: 24px 24px 62px 24px;
    }

    .aside-ul {
        padding: 0px 24px 24px;
        flex: 1;
    }

    .aside-ul .nav-link {
        background-color: transparent;
        padding: 9px 10px 9px 16px;
        color: #141414;
        font-size: 16px;
        border-radius: 5px;
        font-weight: 400;
    }

    .aside-ul .active {
        background-color: #F6C94D;
        color: #000814;
        font-weight: 600;
    }

    .aside-ul .logout {
        background-color: #000;
        color: #fff;
        font-weight: 600;
        display: flex;
        justify-content: center;
        width: 100%;
        align-items: center;
        border-radius: 5px;
    }

    .content-wrapper {
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .content-main {
        flex: 1;
        min-height: calc(100% - 68px);
        overflow-y: auto;
        padding: 32px 108px 32px 40px !important;
        background-color: #FCFCFC !important;
    }

    .header-styles {
        padding-left: 40px !important;
        padding-right: 108px !important;
    }

    .toggle-button:focus {
        outline: none;
        box-shadow: none;
    }

    @media screen and (max-width: 992px) {
        .content-main {
            padding: 32px 40px 32px 40px !important;
        }

        .header-styles {
            padding-left: 40px !important;
            padding-right: 40px !important;
        }
    }

    @media screen and (max-width: 600px) {
        .content-main {
            padding: 32px 20px 32px 20px !important;
        }

        .header-styles {
            padding-left: 20px !important;
            padding-right: 20px !important;
        }
    }
.question-nav-next .question-nav-back{
    min-width: 100px !important;
}
.notification-container{
        z-index: 1000 !important;
}
header{
        z-index: 1000 !important;
}
.text-muted {

    color: #000 !important;
}
.btn-accept {
    border-color: #000;
    background-color: #000;
    color: #FFFFFF;
}

.btn-accept:hover {
    color: #FFFFFF!important;

}
.btn-reject {
    border-color: #F1935D;
    color: #fff;
    background-color: #F1935D;
    margin-right: 8px;
}
.page-title {
    color: #000!important;
}
.dashbaord-section-title {
     color: #000!important;
}
:root {
--bs-body-color: #000!important;
}
.dashboard-highlight-text{
    color: #000!important;
}
.careers-sub-title-description {
   color: #000!important;
}
</style>

<body>

    <div class="d-lg-flex">
        <!-- Desktop Sidebar -->
        <aside class="d-none d-lg-flex flex-column bg-white" style="width: 258px !important; min-width: 258px; min-height: 100vh; position: sticky; top: 0; border-right: 1px solid #E3E7DD">
            <div class="aside-logo">
                <div class="logo">
                    <img src="{{ asset('assets/images/DecodemyBrain new logo-03.png') }}" alt="Logo" class="img-fluid">
                </div>
            </div>
            <ul class="nav flex-column aside-ul d-flex flex-column justify-content-between">

                <div>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{url('dashboard')}}">Dashboard</a>
                    </li>
                    <?php if($user_package == 'decodemybrain-deep-dive' || $user_package == 'decodemybrain-guided-friend-and-family-connect'){ ?>
                    <li class="nav-item" style="display: none;"> {{-- Hidden from navigation; keep route available. --}}
                        <a class="nav-link {{ request()->is('careers') ? 'active' : '' }}" aria-current="page" href="{{url('careers')}}">Careers</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" aria-current="page" href="{{url('profile')}}">Profile</a>
                    </li>
                    <?php if($user_package == 'decodemybrain-deep-dive' || $user_package == 'decodemybrain-guided-friend-and-family-connect'){ ?>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('skill-assestment') ? 'active' : '' }}" aria-current="page" href="{{url('skill-assestment')}}">Skill Assessment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('introvert-or-extrovert') ? 'active' : '' }}" aria-current="page" href="{{url('introvert-or-extrovert')}}">Introvert or Extrovert</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ request()->is('events') ? 'active' : '' }}" aria-current="page" href="{{url('events')}}">Our Events</a>
                    </li> -->
                    <?php } ?>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->is('billing') ? 'active' : '' }}" aria-current="page" href="{{url('billing')}}">Billing</a>
                    </li> --}}

                    <li class="nav-item" style="display: none;"> {{-- Hidden from navigation; keep route available. --}}
                        <a class="nav-link" aria-current="page" href="{{url('billing')}}" target="_blank">Billing</a>
                    </li>
                    <?php if($user_package == 'decodemybrain-deep-dive' || $user_package == 'decodemybrain-guided-friend-and-family-connect'){ ?>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('parent-community') ? 'active' : '' }}" aria-current="page" href="https://chat.whatsapp.com/BfbLYVu9xkj1iSHFSmbY6O" target="_blank">Parent Community</a>
                    </li>
                    <?php } ?>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link {{ request()->is('brain-performance') ? 'active' : '' }}" aria-current="page" href="{{url('brain-performance')}}">Brain Performance</a>-->
                    <!--</li>-->
                </div>
                <div>
                    <!--<li class="nav-item mb-4">-->
                    <!--    <a class="nav-link {{ request()->is('test-attempt') ? 'active' : '' }}" aria-current="page" href="{{url('test-attempt')}}">My Test Attempts</a>-->
                    <!--</li>-->
                    <li class="nav-item logout">
                        <a class="nav-link logout" aria-current="page" href="{{url('logout')}}">
                            <img src="{{ asset('assets/images/cfff540f-be4c-4d43-8bab-746e32189bb7.png') }}" alt="Logo" style="height: 20px; width: 20px; border-radius: 100%; margin-right: 8px;">
                            Logout
                        </a>
                    </li>
                </div>
            </ul>
        </aside>

        <!-- Content Area -->
        <div class="flex-grow-1 content-wrapper">
            <!-- Header -->
            <header class="d-flex justify-content-between align-items-center py-3 bg-white position-sticky top-0 z-3 header-styles" style="border-bottom: 1px solid #E3E7DD">
                <div class="d-flex align-items-center">
                    <!-- Mobile Sidebar Toggle -->
                    <button class="btn d-lg-none me-3 p-0 toggle-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarDrawer" aria-controls="sidebarDrawer">
                        <i class="bi bi-list" style="font-size: 1.5rem;"></i>
                    </button>
                    <!-- Logo -->
                    <div class="logo d-lg-none">
                        <img src="{{ asset('assets/images/zebranewlogo.png') }}" alt="Logo" style="width: 150px;">
                    </div>
                </div>

                <!--<div class="d-none d-lg-block flex-grow-1">-->
                <!--    <input type="search" class="form-control header-search" placeholder="Type what you need to know">-->
                <!--</div>-->

                <div class="d-flex align-items-center gap-3">
                    <div class="header-notification" style="display: none;"> {{-- Hidden from the dashboard header; notification data remains available. --}}
                        <ul class="notification-drop">
                            <li class="item">
                                <i class="fa-solid fa-bell notification-bell" style="color: #85D6A5 !important" aria-hidden="true"></i> <span class="btn__badge pulse-button ">{{count($events)}}</span>
                                <ul class="notification-container">
                                    <?php foreach($events as $event){ ?>
                                    <li>New Event - {{$event->name}}<br>On - {{$event->date}}<br>From {{$event->start_time}} To {{$event->end_time}}</li>
                                    <?php } ?>
                                    <?php
                            if ($user_current_age != $age) {

                                if (($user_current_age <= 14 && $age >= 15) || ($user_current_age <= 18 && $age > 18)) { ?>
                                    <li>Retake the test as you now belong to a new age group <a href="{{url('retake')}}"><button type="submit" class="btn-retake  retake-btn">Retake</button></a></li>
                                    <?php }}
                            ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                     <a href="{{url('profile')}}"><img src="{{ asset('assets/images/dummy-profile-pic-300x300.jpg') }}" alt="Logo"
                            style="height: 30px; width: 30px; border-radius: 100% " class="ms-md-3"></a>
                    <div class="d-none d-lg-block">
                        <div>{{$customer_name}}</div>
                        <small class="text-muted">{{$customer_email}}</small>
                    </div>
                    <a href="{{url('logout')}}">
                        <img src="{{ asset('assets/images/cfff540f-be4c-4d43-8bab-746e32189bb7.png') }}" alt="Logo" style="height: 20px; width: 20px; border-radius: 100%">
                    </a>
                </div>
            </header>

            <!-- Page Content -->
            <main class="content-main" >
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Mobile Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="sidebarDrawer" aria-labelledby="sidebarDrawerLabel" style="width: 300px;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" style="visibility: hidden" id="sidebarDrawerLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="nav flex-column aside-ul d-flex flex-column justify-content-between h-100">
                <div>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{url('dashboard')}}">Dashboard</a>
                    </li>
                    <?php if($user_package == 'decodemybrain-deep-dive' || $user_package == 'decodemybrain-guided-friend-and-family-connect'){ ?>
                    <li class="nav-item" style="display: none;"> {{-- Hidden from navigation; keep route available. --}}
                        <a class="nav-link {{ request()->is('careers') ? 'active' : '' }}" aria-current="page" href="{{url('careers')}}">Careers</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" aria-current="page" href="{{url('profile')}}">Profile</a>
                    </li>
                    <?php if($user_package == 'decodemybrain-deep-dive' || $user_package == 'decodemybrain-guided-friend-and-family-connect'){ ?>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('skill-assestment') ? 'active' : '' }}" aria-current="page" href="{{url('skill-assestment')}}">Skill Assessment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('introvert-or-extrovert') ? 'active' : '' }}" aria-current="page" href="{{url('introvert-or-extrovert')}}">Introvert or Extrovert</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ request()->is('events') ? 'active' : '' }}" aria-current="page" href="{{url('events')}}">Our Events</a>
                    </li> -->
                    <?php } ?>
                    <li class="nav-item" style="display: none;"> {{-- Hidden from navigation; keep route available. --}}
                        <a class="nav-link {{ request()->is('billing') ? 'active' : '' }}" aria-current="page" href="{{url('billing')}}">Billing</a>
                    </li>
                    <?php if($user_package == 'decodemybrain-deep-dive' || $user_package == 'decodemybrain-guided-friend-and-family-connect'){ ?>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('parent-community') ? 'active' : '' }}" aria-current="page" href="https://chat.whatsapp.com/BfbLYVu9xkj1iSHFSmbY6O" target="_blank">Parent Community</a>
                    </li>
                    <?php } ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ request()->is('brain-performance') ? 'active' : '' }}" aria-current="page" href="{{url('brain-performance')}}">Brain Performance</a>
                    </li> -->
                </div>
                <div>
                    <!--<li class="nav-item mb-4">-->
                    <!--    <a class="nav-link {{ request()->is('test-attempt') ? 'active' : '' }}" aria-current="page" href="{{url('test-attempt')}}">My Test Attempts</a>-->
                    <!--</li>-->
                    {{-- <li class="nav-item mt-2">
                    <a class="nav-link  " aria-current="page" href="{{url('reset-questions')}}" >Retake Questions </a>
                    </li> --}}
                    <li class="nav-item logout">
                        <a class="nav-link logout " aria-current="page" href="{{url('logout')}}">
                            <img src="{{ asset('assets/images/cfff540f-be4c-4d43-8bab-746e32189bb7.png') }}" alt="Logo" style="height: 20px; width: 20px; border-radius: 100%; margin-right: 8px;">
                            Logout </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
<script>
    $(document).ready(function() {
        $(".notification-drop .item").on('click', function() {
            $(this).find('ul').toggle();
        });
    });

</script>
</body>
</html>
@if(Session::has('package-fail'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myModal = new bootstrap.Modal(document.getElementById('toggleMyModal'), {
            keyboard: false
        });
        myModal.show();
    });

</script>
<div class="modal fade" id="toggleMyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="login_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mt-4 mb-4"><?php echo Session::get('package-fail') ?></p>
                <a href="{{url('packages')}}"><button class="btn-yellow">Upgrade</button></a>
            </div>

        </div>
    </div>
</div>
@endif
<script>
function protectVideos() {
    document.querySelectorAll("video").forEach(video => {
        video.controlsList = "nodownload noremoteplayback";
        video.disablePictureInPicture = true;
    });
}

document.addEventListener("DOMContentLoaded", protectVideos);

// Optional: re-run when new content appears
const observer = new MutationObserver(protectVideos);
observer.observe(document.body, { childList: true, subtree: true });
</script>
