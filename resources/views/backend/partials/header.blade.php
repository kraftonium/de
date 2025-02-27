<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @stack('title')

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="/backend-assets/img/logo/favicon.png">

    <link rel="stylesheet" href="/backend-assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="/backend-assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/backend-assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="/backend-assets/css/feathericon.min.css">
    <link rel="stylesheet" href="/backend-assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="/backend-assets/css/custom.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="/index.html" class="logo">
                    <img src="/backend-assets/img/logo/logo-divyashakti.png" alt="Logo">
                </a>
                <a href="/index.html" class="logo logo-small">
                    <img src="/backend-assets/img/logo/logo-divyashakti.png" alt="Logo" height="50">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <!-- <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                </li> -->


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" role="button"
                        aria-expanded="false">
                        <span class="user-img"><img class="rounded-circle"
                                src="/backend-assets/img/profiles/avatar-01.jpg" width="45"
                                alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="/backend-assets/img/profiles/avatar-01.jpg" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Dr. Jhon Doe</h6>
                                <p class="text-muted mb-0">State Dealer</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ url('/admin-profile') }}">My Profile</a>
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
                            <li class="">
                                <a href="/index.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-admin/manage-admin.html"><i class="fa fa-user-tie"></i> <span>Manage
                                        Admin</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-customer/manage-customer.html"><i class="fa fa-user"></i> <span>Manage
                                        Customer</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-stock/manage-stock.html"><i class="fa fa-boxes "></i> <span>Manage
                                        Stock</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-order/manage-order.html"><i class="fa fa-shopping-cart "></i>
                                    <span>Manage Order</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-state-dealership/manage-state-dealership.html"><i
                                        class="fa fa-store "></i> <span>Manage State Dealership</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-zone-dealership/manage-zone-dealership.html"><i
                                        class="fa fa-store "></i> <span>Manage Zone Dealership</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-jilla-dealership/manage-jilla-dealership.html"><i
                                        class="fa fa-store "></i> <span>Manage Jilla Dealership</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-taluka-dealership/manage-taluka-dealership.html"><i
                                        class="fa fa-store "></i> <span>Manage Taluka Dealership</span></a>
                            </li>

                            <li class="">
                                <a href="/manage-area-dealership/manage-area-dealership.html"><i
                                        class="fa fa-store "></i> <span>Manage Area Dealership</span></a>
                            </li>

                            <li>
                                <a href="/manage-contactus/manage-contactus.html"><i class="fa fa-phone-alt"></i>
                                    <span>Manage Contact Us</span></a>
                            </li>

                            <li>
                                <a href="/manage-gps/manage-gps.html"><i class="fa fa-map "></i> <span>Manage
                                        Gps</span></a>
                            </li>

                            <li>
                                <a href="/manage-dealership-form/manage-dealership-form.html"><i
                                        class="fa fa-file-alt"></i> <span>Manage Dealership Form</span></a>
                            </li>

                            <li>
                                <a href="/manage-book-ride/manage-book-ride.html"><i class="fa fa-motorcycle "></i>
                                    <span>Manage Book Ride</span></a>
                            </li>

                            <li>
                                <a href="/manage-lucky-draw/manage-lucky-draw.html"><i class="fa fa-ticket-alt"></i>
                                    <span>Manage Lucky Draw</span></a>
                            </li>

                            <li>
                                <a href="/manage-career/manage-career.html"><i class="fa fa-briefcase "></i>
                                    <span>Manage Career</span></a>
                            </li>

                            <li>
                                <a href="/appointment-list.html"><i class="fe fe-layout"></i>
                                    <span>Appointments</span></a>
                            </li>

                            <li>
                                <a href="/specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
                            </li>

                            <li>
                                <a href="/doctor-list.html"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
                            </li>

                            <li>
                                <a href="/patient-list.html"><i class="fe fe-user"></i> <span>Patients</span></a>
                            </li>

                            <li>
                                <a href="/reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
