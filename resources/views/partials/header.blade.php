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

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="/assets/images/logo/favicon-32x32.png" type="image/x-icon">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

</head>

<body>

    {{-- navbar starts here  --}}

    <!-- DESKTOP TOPBAR -->

    <div class="topbar">

        <div class="topbar-container">

            <div>
                ⚡ India's Next Generation EV Scooters
            </div>

            <div>
                📞 9737561301
                <a href="mailto:ride@thedivyashakti.com">📧 ride@thedivyashakti.com</a>
            </div>

        </div>

    </div>

    <header>

        <div class="nav-container">

            <!-- LOGO -->

            <div class="logo">
                <img src="assets/images/logo/logo-only-1.png">
                <span>Divyashakti Enterprise</span>
            </div>

            <!-- NAV -->

            <nav class="nav-menu" id="navMenu">

                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about-us') }}">About Us</a>
                <a href="{{ url('/ev-scooters') }}">EV Scooters</a>
                <a href="{{ url('/dealership') }}">Dealership</a>
                <a href="{{ url('/solar') }}">Solar</a>
                <a href="{{ url('/gps') }}">GPS</a>
                <a href="{{ url('/blogs') }}">Blogs</a>
                <a href="{{ url('/contact-us') }}">Contact Us</a>

                <a href="{{ url('/scooters') }}/#book_ride_form" class="cta">Book Test Ride</a>

                <!-- MOBILE CONTACT -->

                <div class="mobile-contact">

                    📞 9737561301

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
