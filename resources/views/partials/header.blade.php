<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- <title>DIVYASHAKTI ENTERPRISE</title> --}}
    @stack('title')
     <meta name="keywords"
        content="The Divyashakti, Divyashakti Enterprise, thedivyashakti.com, divyashakti.in, EVVehicles, evvehicles, evscooters, evauto, EV Vehicles, ev vehicle, EV Scooter" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('meta')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/chosen.min.css">
    <link rel="stylesheet" href="assets/css/icofont.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom-style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- header start -->
        <header>
            <div class="header-area transparent-bar ">
                <!-- <div class="header-area transparent-bar ptb-55"> -->
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="logo-small-device">
                                <!-- <a href="index.html"><img alt="" src="assets/img/logo/favicon.png"></a> -->
                                {{-- <a href="index.html"><img alt="" src="assets/img/logo/logo.png"></a> --}}
                                @stack('logo')
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-8">
                            <div class="header-contact-menu-wrapper pl-45">
                                <div class="header-contact">
                                    <p>WANT TO TALK WITH US +91 97375 61301</p>
                                </div>
                                <div class="menu-wrapper text-center" style="margin-right:5px !important;">
                                    <button class="menu-toggle">
                                        <img class="s-open" alt="Menu" src="assets/img/icon-img/menu.png">
                                        <img class="s-close" alt="Menu" src="assets/img/icon-img/menu-close.png">
                                    </button>
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="{{url('/')}}">home</a></li>
                                                <li class="active"><a href="{{url('/about-us')}}">about us </a></li>
                                                <li><a href="{{url('/vehicles')}}">Vehicles</a></li>
                                                <li><a href="{{url('/gps')}}">GPS</a></li>
                                                <li><a href="{{url('/dealership')}}">Dealership</a></li>
                                                 <li><a href="{{url('/solar')}}">Solar</a></li>
                                                <li><a href="{{url('/contact-us')}}">contact us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mobile-menu-area col-12">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="{{url('/')}}">home</a></li>
                                                <li class="active"><a href="{{url('/about-us')}}">about us </a></li>
                                                <li><a href="{{url('/vehicles')}}">Vehicles</a></li>
                                                <li><a href="{{url('/gps')}}">GPS</a></li>
                                                <li><a href="{{url('/dealership')}}">Dealership</a></li>
                                                 <li><a href="{{url('/solar')}}">Solar</a></li>
                                                <li><a href="{{url('/contact-us')}}">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        
        <div class="floating-buttons" style="z-index: 99;">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modalId"><b>Lucky Draw</b></a>
            <a href="{{url('/book-ride')}}"><b>Book A Ride</b></a>
            <a href="{{url('/dealership')}}"><b>Apply For Dealership</b></a>
        </div>