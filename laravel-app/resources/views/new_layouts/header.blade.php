<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <title>DecodeMyBrain – Unlock the Full Potential For Youngsters</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
    .bg-light22 {
        background-color: #fff !important;
        padding-top: 10px;
        padding-bottom: 10px;
        border-bottom: rgb(209, 76, 76) !important;
        /* -moz-box-shadow: 5px 5px 5px rgba(68, 68, 68, 0.2);
        -webkit-box-shadow: 5px 5px 5px rgba(68, 68, 68, 0.2);
        box-shadow: 5px 5px 5px rgba(68, 68, 68, 0.2); */

    }

    .navbar-light .navbar-nav .nav-link {
        color: #3b3b3b;
        font-weight: 550;
        font-size: 18px;
    }

    .custom-dropdown .dropdown-toggle {
        font-size: 24px;
        /* Adjust font size */
        font-weight: bold;
        color: black;
        /* Adjust text color */
        background: none;
        border: none;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* Custom dropdown arrow */
    .custom-dropdown .dropdown-toggle::after {
        content: "⌄";
        /* Unicode down arrow */
        border: none;
        font-size: 18px;
    }

    /* Dropdown menu styling */
    .custom-dropdown .dropdown-menu {
        min-width: 200px;
        border-radius: 8px;
        border: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Hover effect */
    .custom-dropdown .dropdown-item:hover {
        background-color: #f8f9fa;
    }

    .custom-dropdown-toggle {
        display: flex;
        align-items: center;
        font-size: 18px;
        font-weight: bold;
        color: black;
        text-decoration: none;
        gap: 8px;

    }

    .dropdown-icon {
        width: 13px;

        height: auto;
        transition: transform 0.3s ease;

    }


    .nav-item.dropdown.show .dropdown-icon {
        transform: rotate(180deg);
    }
    </style>
</head>

<body>
    <!-- <div class="container text-end">
        <p class="nav-signin" data-bs-toggle="modal" data-bs-target="#login_modal"><i class="fa-solid fa-circle-user"></i> Sign In</p>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light22">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/zebranewlogo.png') }}" class="d-inline-block align-top" alt="Logo"
                    style="width: 200px; height: auto; padding: 20px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="width:25px;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('#')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link custom-dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Programs
                            <img src="{{ asset('assets/images/dropdownarrow.png') }}" alt="Dropdown Icon"
                                class="dropdown-icon">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('#') }}">All Programs</a></li>
                            <li><a class="dropdown-item" href="{{ url('#') }}">Category 1</a></li>
                            <li><a class="dropdown-item" href="{{ url('#') }}">Category 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link custom-dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                            <img src="{{ asset('assets/images/dropdownarrow.png') }}" alt="Dropdown Icon"
                                class="dropdown-icon">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('#') }}">All Programs</a></li>
                            <li><a class="dropdown-item" href="{{ url('#') }}">Category 1</a></li>
                            <li><a class="dropdown-item" href="{{ url('#') }}">Category 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('#')}}">Our Method</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('#')}}">Contact</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>