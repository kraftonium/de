<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @stack('title')

    @stack('meta')

    <meta name="geo.region" content="IN-GJ">
    <meta name="geo.placename" content="Gandhinagar">
    <meta name="geo.position" content="23.2156;72.6369">
    <meta name="ICBM" content="23.2156, 72.6369">


    @stack('schema')

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{ asset('/assets/images/logo/favicon-32x32.png') }}" type="image/x-icon">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

</head>

@php
    $pagename = 'home';
    if (strpos($_SERVER['REQUEST_URI'], 'about-us') !== false) {
        $pagename = 'about-us';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'ev-scooters') !== false) {
        $pagename = 'ev-scooters';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'contact-us') !== false) {
        $pagename = 'contact-us';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'careers') !== false) {
        $pagename = 'contact-us';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'dealership') !== false) {
        $pagename = 'dealership';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'solar') !== false) {
        $pagename = 'solar';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'privacy-policy') !== false) {
        $pagename = 'about-us';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'terms-and-conditions') !== false) {
        $pagename = 'about-us';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'gps') !== false) {
        $pagename = 'gps';
    } elseif (strpos($_SERVER['REQUEST_URI'], 'blogs') !== false) {
        $pagename = 'blogs';
    }
@endphp

<body>

    {{-- navbar starts here  --}}

    <!-- DESKTOP TOPBAR -->

    <div class="topbar">

        <div class="topbar-container">

            <div>
                ⚡ India's Next Generation EV Scooters
            </div>

            <div>
                📞 9664861237
                <a href="mailto:ride@thedivyashakti.com">📧 ride@thedivyashakti.com</a>
            </div>

        </div>

    </div>

    <header>

        <div class="nav-container">

            <!-- LOGO -->

            <div class="logo">
                <img src="{{ asset('assets/images/logo/logo-only-1.png') }}"
                    alt="Divyashakti Enterprise | Drive The Future">
                <span>Divyashakti Enterprise</span>
            </div>

            <!-- NAV -->

            <style>
                .nav-menu a::after {
                    content: "";
                    position: absolute;
                    bottom: -6px;
                    left: 0;
                    width: 0;
                    height: 2px;
                    background: linear-gradient(90deg, #2b8cff, #ff6aa2);
                    transition: 0.4s;
                }

                .nav-menu a:hover::after,
                .nav-menu a.active::after {
                    width: 100%;
                }
            </style>

            <nav class="nav-menu" id="navMenu">

                <a href="{{ url('/') }}" class="@if ($pagename === 'home') active @endif">Home</a>
                <a href="{{ url('/about-us') }}" class="@if ($pagename === 'about-us') active @endif">About Us</a>
                <a href="{{ url('/ev-scooters') }}" class="@if ($pagename === 'ev-scooters') active @endif">EV
                    Scooters</a>
                <a href="{{ url('/dealership') }}"
                    class="@if ($pagename === 'dealership') active @endif">Dealership</a>
                <a href="{{ url('/solar') }}" class="@if ($pagename === 'solar') active @endif">Solar</a>
                <a href="{{ url('/gps') }}" class="@if ($pagename === 'gps') active @endif">GPS</a>
                <a href="{{ url('/blogs') }}" class="@if ($pagename === 'blogs') active @endif">Blogs</a>
                <a href="{{ url('/contact-us') }}" class="@if ($pagename === 'contact-us') active @endif">Contact
                    Us</a>

                <a href="{{ url('/ev-scooters') }}#book_ride_form" class="cta">Book Test Ride</a>

                <!-- MOBILE CONTACT -->

                <div class="mobile-contact">

                    📞 9664861237

                    <a href="mailto:ride@thedivyashakti.com">
                        📧 ride@thedivyashakti.com
                    </a>

                </div>

            </nav>

            <!-- HAMBURGER -->

            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>

    </header>

    {{-- navbar ends here  --}}
