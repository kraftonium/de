<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @stack('title')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>


    <link rel="shortcut icon" type="image/x-icon" href="/backend-assets/img/logo/favicon.png">

    <link rel="stylesheet" href="/backend-assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="/backend-assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/backend-assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="/backend-assets/css/feathericon.min.css">
    <link rel="stylesheet" href="/backend-assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="/backend-assets/css/custom.css">
</head>

<body>

    @php
        $pagename = 'home';
        if (strpos($_SERVER['REQUEST_URI'], 'manage-admin') !== false) {
            $pagename = 'manage-admin';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-dealership') !== false) {
            $pagename = 'manage-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-usertype') !== false) {
            $pagename = 'manage-usertype';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-vehicles') !== false) {
            $pagename = 'manage-vehicles';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-vehicle-type') !== false) {
            $pagename = 'manage-vehicle-type';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-orders') !== false) {
            $pagename = 'manage-orders';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-stock') !== false) {
            $pagename = 'manage-stock';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-state-dealership') !== false) {
            $pagename = 'manage-state-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-zone-dealership') !== false) {
            $pagename = 'manage-zone-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-district-dealership') !== false) {
            $pagename = 'manage-district-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-taluka-dealership') !== false) {
            $pagename = 'manage-taluka-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-area-dealership') !== false) {
            $pagename = 'manage-area-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-customers') !== false) {
            $pagename = 'manage-customers';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-contact-us') !== false) {
            $pagename = 'manage-contact-us';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-career') !== false) {
            $pagename = 'manage-career';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-book-ride') !== false) {
            $pagename = 'manage-book-ride';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-gps') !== false) {
            $pagename = 'manage-gps';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-lucky-draw') !== false) {
            $pagename = 'manage-lucky-draw';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-form-dealership') !== false) {
            $pagename = 'manage-form-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-users') !== false) {
            $pagename = 'manage-users';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-dealership-dashboard') !== false) {
            $pagename = 'manage-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'manage-zone-dealership-by-state') !== false) {
            $pagename = 'manage-zone-dealership';
        } elseif (strpos($_SERVER['REQUEST_URI'], 'my-stock') !== false) {
            $pagename = 'my-stock';
        }
    @endphp


    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="{{ url('/dashboard') }}" class="logo">
                    <img src="/backend-assets/img/logo/logo-divyashakti.png" alt="Logo">
                </a>
                <a href="{{ url('/dashboard') }}" class="logo logo-small">
                    <img src="/backend-assets/img/logo/logo-divyashakti.png" alt="Logo">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>


            {{-- @if (strpos($_SERVER['REQUEST_URI'], 'manage-customers') !== false)
                <div class="top-nav-search">
                    <form>
                        <input type="text" class="form-control" id="search_header"
                            placeholder="Search by Chassis No, Battery No, Controller No, or Name">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                       
                    </form>
                </div>
            @endif --}}
            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>


            <ul class="nav user-menu">
                @if (Auth::user()->id == 1)
                    @if ($pagename == 'manage-admin')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/register') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-vehicle-type')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/add-vehicle-type') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-vehicles')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/add-vehicle') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-state-dealership')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/register') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-zone-dealership')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/register') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-district-dealership')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/register') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-taluka-dealership')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/register') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-area-dealership')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/register') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-stock')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/add-stock') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @elseif($pagename == 'manage-dealership')
                        <li class="nav-item dropdown noti-dropdown">
                            <a href="{{ url('/register') }}">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </li>
                    @endif
                @elseif($pagename == 'manage-customers')
                    <li class="nav-item dropdown noti-dropdown">
                        <a href="{{ url('/add-customers') }}">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </li>
                @elseif($pagename == 'manage-orders')
                    <li class="nav-item dropdown noti-dropdown">
                        <a href="{{ url('/add-order') }}">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </li>
                @endif


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" role="button"
                        aria-expanded="false">
                        <span class="user-img"><img class="rounded-circle" src="{{ asset(Auth::user()->image) }}"
                                width="45" alt="{{ Auth::user()->name }}"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset(Auth::user()->image) }}" alt="{{ Auth::user()->name }}"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p class="text-muted mb-0">{{ Auth::user()->usertype->usertype }}</p>
                            </div>
                        </div>
                        @if (Auth::user()->usertype_id == 1)
                            <a class="dropdown-item" href="{{ url('/admin-profile') }}">My Profile</a>
                        @elseif(in_array(Auth::user()->usertype_id, [2, 3, 4, 5, 6]))
                            <a class="dropdown-item" href="{{ url('/dealer-profile') }}">My Profile</a>
                        @endif
                        <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                    </div>
                </li>

            </ul>

        </div>

        <!-- navbar comes from navbar.js file -->
        <div id="navbar-container">

            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>

                            @if (Auth::user()->usertype_id == 1)
                                <li class="@if ($pagename == 'home') active @endif">
                                    <a href="{{ url('/dashboard') }}"><i class="fe fe-home"></i>
                                        <span>Dashboard</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-usertype') active @endif">
                                    <a href="{{ url('/manage-usertype') }}"> <i class="fas fa-user-lock"></i>
                                        <span>Manage UserType</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-admin') active @endif">
                                    <a href="{{ url('/manage-admin') }}"><i class="fa fa-user-tie"></i> <span>Manage
                                            Admin</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-users') active @endif">
                                    <a href="{{ url('/manage-users') }}"><i class="fa fa-user-tie"></i> <span>Manage
                                            Users</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-vehicle-type') active @endif">
                                    <a href="{{ url('/manage-vehicle-type') }}"> <i
                                            class="fas fa-user-lock"></i><span>Manage Vehicle Type</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-vehicles') active @endif">
                                    <a href="{{ url('/manage-vehicles') }}"><i class="fas fa-car"></i> <span>Manage
                                            Vehicle</span></a>
                                </li>


                                <li class="@if ($pagename == 'manage-state-dealership') active @endif">
                                    <a href="{{ url('/manage-state-dealership') }}"><i class="fa fa-store "></i>
                                        <span>Manage State Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-zone-dealership') active @endif">
                                    <a href="{{ url('/manage-zone-dealership') }}"><i class="fa fa-store "></i>
                                        <span>Manage Zone Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-district-dealership') active @endif">
                                    <a href="{{ url('/manage-district-dealership') }}"><i class="fa fa-store "></i>
                                        <span>Manage District Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-taluka-dealership') active @endif">
                                    <a href="{{ url('/manage-taluka-dealership') }}"><i class="fa fa-store "></i>
                                        <span>Manage Taluka Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-area-dealership') active @endif">
                                    <a href="{{ url('/manage-area-dealership') }}"><i class="fa fa-store "></i>
                                        <span>Manage Area Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-stock') active @endif">
                                    <a href="{{ url('/manage-stock') }}"><i class="fa fa-boxes "></i> <span>Manage
                                            Stock</span></a>
                                </li>
                                <li class="@if ($pagename == 'manage-dealership') active @endif">
                                    <a href="{{ url('/manage-dealership') }}"><i class="fa fa-store "></i>
                                        <span>Manage Dealership</span></a>
                                </li>
                                <li class="@if ($pagename == 'manage-customers') active @endif">
                                    <a href="{{ url('/manage-customers') }}"><i class="fa fa-user"></i> <span>Manage
                                            Customer</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-orders') active @endif">
                                    <a href="{{ url('/manage-orders') }}"><i class="fa fa-shopping-cart "></i>
                                        <span>Manage Order</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-contact-us') active @endif">
                                    <a href="{{ url('/manage-contact-us') }}"><i class="fa fa-phone-alt"></i>
                                        <span>Manage Contact Us</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-gps') active @endif">
                                    <a href="{{ url('/manage-gps') }}"><i class="fa fa-map "></i> <span>Manage
                                            Gps</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-form-dealership') active @endif">
                                    <a href="{{ url('/manage-form-dealership') }}"><i class="fa fa-file-alt"></i>
                                        <span>Manage Dealership Form</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-book-ride') active @endif">
                                    <a href="{{ url('/manage-book-ride') }}"><i class="fa fa-motorcycle "></i>
                                        <span>Manage Book Ride</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-lucky-draw') active @endif">
                                    <a href="{{ url('/manage-lucky-draw') }}"><i class="fa fa-ticket-alt"></i>
                                        <span>Manage Lucky Draw</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-career') active @endif">
                                    <a href="{{ url('/manage-career') }}"><i class="fa fa-briefcase "></i>
                                        <span>Manage Career</span></a>
                                </li>
                            @elseif(Auth::user()->usertype_id == 2)
                                <li class="@if ($pagename == 'manage-dealership') active @endif">
                                    <a href="{{ url('/manage-dealership-dashboard') }}"><i class="fa fa-store "></i>
                                        <span>Dashboard</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-customers') active @endif">
                                    <a href="{{ url('/manage-customers') }}"><i class="fa fa-user"></i> <span>Manage
                                            Customer</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-orders') active @endif">
                                    <a href="{{ url('/manage-orders') }}"><i class="fa fa-shopping-cart "></i>
                                        <span>Manage Order</span></a>
                                </li>


                                <li class="@if ($pagename == 'manage-zone-dealership') active @endif">
                                    <a href="{{ url('/manage-zone-dealership-by-state') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage Zone Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-district-dealership') active @endif">
                                    <a href="{{ url('/manage-district-dealership-by-state') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage District Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-taluka-dealership') active @endif">
                                    <a href="{{ url('/manage-taluka-dealership-by-state') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage Taluka Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-area-dealership') active @endif">
                                    <a href="{{ url('/manage-area-dealership-by-state') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage Area Dealership</span></a>
                                </li>
                                <li class="@if ($pagename == 'my-stock') active @endif">
                                    <a href="{{ url('/my-stock') }}"><i class="fa fa-store "></i>
                                        <span>Stock</span></a>
                                </li>
                            @elseif(Auth::user()->usertype_id == 3)
                                <li class="@if ($pagename == 'manage-dealership') active @endif">
                                    <a href="{{ url('/manage-dealership-dashboard') }}"><i class="fa fa-store "></i>
                                        <span>Dashboard</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-customers') active @endif">
                                    <a href="{{ url('/manage-customers') }}"><i class="fa fa-user"></i> <span>Manage
                                            Customer</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-orders') active @endif">
                                    <a href="{{ url('/manage-orders') }}"><i class="fa fa-shopping-cart "></i>
                                        <span>Manage Order</span></a>
                                </li>
                                <li class="@if ($pagename == 'manage-district-dealership') active @endif">
                                    <a href="{{ url('/manage-district-dealership-by-zone') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage District Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-taluka-dealership') active @endif">
                                    <a href="{{ url('/manage-taluka-dealership-by-zone') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage Taluka Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-area-dealership') active @endif">
                                    <a href="{{ url('/manage-area-dealership-by-zone') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage Area Dealership</span></a>
                                </li>
                                <li class="@if ($pagename == 'my-stock') active @endif">
                                    <a href="{{ url('/my-stock') }}"><i class="fa fa-store "></i>
                                        <span>Stock</span></a>
                                </li>
                            @elseif(Auth::user()->usertype_id == 4)
                                <li class="@if ($pagename == 'manage-dealership') active @endif">
                                    <a href="{{ url('/manage-dealership-dashboard') }}"><i class="fa fa-store "></i>
                                        <span>Dashboard</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-customers') active @endif">
                                    <a href="{{ url('/manage-customers') }}"><i class="fa fa-user"></i> <span>Manage
                                            Customer</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-orders') active @endif">
                                    <a href="{{ url('/manage-orders') }}"><i class="fa fa-shopping-cart "></i>
                                        <span>Manage Order</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-taluka-dealership') active @endif">
                                    <a href="{{ url('/manage-taluka-dealership-by-district') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage Taluka Dealership</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-area-dealership') active @endif">
                                    <a href="{{ url('/manage-area-dealership-by-district') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage Area Dealership</span></a>
                                </li>
                                <li class="@if ($pagename == 'my-stock') active @endif">
                                    <a href="{{ url('/my-stock') }}"><i class="fa fa-store "></i>
                                        <span>Stock</span></a>
                                </li>
                            @elseif(Auth::user()->usertype_id == 5)
                                <li class="@if ($pagename == 'manage-dealership') active @endif">
                                    <a href="{{ url('/manage-dealership-dashboard') }}"><i class="fa fa-store "></i>
                                        <span>Dashboard</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-customers') active @endif">
                                    <a href="{{ url('/manage-customers') }}"><i class="fa fa-user"></i> <span>Manage
                                            Customer</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-orders') active @endif">
                                    <a href="{{ url('/manage-orders') }}"><i class="fa fa-shopping-cart "></i>
                                        <span>Manage Order</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-area-dealership') active @endif">
                                    <a href="{{ url('/manage-area-dealership-by-taluka') }}"><i
                                            class="fa fa-store "></i>
                                        <span>Manage Area Dealership</span></a>
                                </li>
                                <li class="@if ($pagename == 'my-stock') active @endif">
                                    <a href="{{ url('/my-stock') }}"><i class="fa fa-store "></i>
                                        <span>Stock</span></a>
                                </li>
                            @elseif(Auth::user()->usertype_id == 6)
                                <li class="@if ($pagename == 'manage-dealership') active @endif">
                                    <a href="{{ url('/manage-dealership-dashboard') }}"><i class="fa fa-store "></i>
                                        <span>Dashboard</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-customers') active @endif">
                                    <a href="{{ url('/manage-customers') }}"><i class="fa fa-user"></i> <span>Manage
                                            Customer</span></a>
                                </li>

                                <li class="@if ($pagename == 'manage-orders') active @endif">
                                    <a href="{{ url('/manage-orders') }}"><i class="fa fa-shopping-cart "></i>
                                        <span>Manage Order</span></a>
                                </li>

                                <li class="@if ($pagename == 'my-stock') active @endif">
                                    <a href="{{ url('/my-stock') }}"><i class="fa fa-store "></i>
                                        <span>Stock</span></a>
                                </li>
                            @endif




                        </ul>
                    </div>
                </div>
            </div>
        </div>
