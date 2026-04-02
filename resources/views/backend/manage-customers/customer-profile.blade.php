<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="keywords"
        content="practo clone, Divine Infoverse, doctor appointment, Practo clone html template, doctor booking template">
    <meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
    <meta property="og:url" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Doctors Appointment HTML Website Templates | Divine Infoverse">
    <meta property="og:description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta property="og:image" content="backend-assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta property="twitter:url" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Divine Infoverse">
    <meta name="twitter:description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="twitter:image" content="backend-assets/img/preview-banner.jpg">
    <title>ERP - Divyashakti Enterprise</title>

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
                <a href="/{{ url('/') }}" class="logo">
                    <img src="/backend-assets/img/logo/logo-divyashakti.png" alt="Logo">
                </a>
                <a href="/{{ url('/') }}" class="logo logo-small">
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
                        <a class="dropdown-item" href="/profile.html">My Profile</a>
                        <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                        <a class="dropdown-item" href="/auth/login.html">Logout</a>
                    </div>
                </li>

            </ul>

        </div>

        <!-- navbar comes from navbar.js file -->
        <div id="navbar-container"></div>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Customer Profile</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Customer Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    <a href="#">
                                        <img class="rounded-circle" alt="User Image"
                                            src="/backend-assets/img/profiles/avatar-01.jpg">
                                    </a>
                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0">Ryan Taylor</h4>
                                    <h6 class="text-muted">rayan@gmail.com
                                    </h6>
                                </div>

                            </div>
                        </div>
                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#changeabout_tab">Edit Info</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content profile-tab-cont">

                            <div class="tab-pane fade show active" id="per_details_tab">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>

                                                </h5>
                                                <div class="grid-column">
                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Name</p>
                                                        <p class="col-sm-8">John Doe</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Email ID</p>
                                                        <p class="col-sm-8">rayan@gmail.com
                                                        </p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Mobile</p>
                                                        <p class="col-sm-8">305-310-5857</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Date of Birth</p>
                                                        <p class="col-sm-8">24 Jul 1983</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Gender</p>
                                                        <p class="col-sm-8">Male</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">User Type</p>
                                                        <p class="col-sm-8">Area Dealer</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Address</p>
                                                        <p class="col-sm-8 mb-0">4663 Agriculture Lane,
                                                            Miami,
                                                            Florida - 33165,
                                                            United States.</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Battery No.</p>
                                                        <p class="col-sm-8">123456</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Chassis No.</p>
                                                        <p class="col-sm-8">123456</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Controller No.</p>
                                                        <p class="col-sm-8">123456</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Vehicle Name</p>
                                                        <p class="col-sm-8">Divine24</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">VehicleType</p>
                                                        <p class="col-sm-8">2 Wheeler</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Vehicle Colour</p>
                                                        <p class="col-sm-8">Black</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Date of Purchase</p>
                                                        <p class="col-sm-8">24 Jul 1983</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Date of Produce</p>
                                                        <p class="col-sm-8">24 Jul 1983</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Whose Customer</p>
                                                        <p class="col-sm-8">Divyashakti Enrterprise</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Invoice No.</p>
                                                        <p class="col-sm-8">123456</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">Insurance No.</p>
                                                        <p class="col-sm-8">123456</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-4 text-muted">GST No.</p>
                                                        <p class="col-sm-8">123456</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                </div>

                            </div>


                            <!-- <div id="password_tab" class="tab-pane fade">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Change Password</h5>
                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="mb-2">Old Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="mb-2">New Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="mb-2">Confirm Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <a href="/auth/forgot-password.html"
                                                            style="color: #4874BB !important; font-weight: bold;">Forgot
                                                            Password</a>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Save
                                                        Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->



                            <div id="changeabout_tab" class="tab-pane fade">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Edit Personal Details</h5>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <form>
                                                    <div class="row">
                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="name"> Name</label>
                                                                <input type="text" class="form-control"
                                                                    value="John" id="name">
                                                            </div>
                                                        </div>
                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="email">Email ID</label>
                                                                <input type="email" class="form-control"
                                                                    value="johndoe@example.com" id="email">
                                                            </div>
                                                        </div>
                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="phone">Mobile</label>
                                                                <input type="text" value="+1 202-555-0125"
                                                                    class="form-control" id="phone">
                                                            </div>
                                                        </div>
                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="date">Date of
                                                                    Birth</label>
                                                                <input type="date" class="form-control"
                                                                    value="24-07-1983" id="date">
                                                            </div>
                                                        </div>
                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="gender">Gender</label>
                                                                <select name="gender" id="gender"
                                                                    class="form-control">
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="usertype">UserType</label>
                                                                <select name="usertype" id="usertype"
                                                                    class="form-control">
                                                                    <option value="Area Dealer">Area Dealer</option>
                                                                    <option value="Taluka Dealer">Taluka Dealer
                                                                    </option>
                                                                    <option value="District Dealer">District Dealer
                                                                    </option>
                                                                    <option value="Zone Dealer">Zone Dealer</option>
                                                                    <option value="State Dealer">State Dealer</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="yourimg">Your
                                                                    Image</label>
                                                                <input type="file" class="form-control"
                                                                    id="yourimg">
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="address">Address</label>
                                                                <textarea name="address" id="address" rows="2" class="form-control">4663 Agriculture Lane</textarea>
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="battery_no">Battery
                                                                    No.</label>
                                                                <input type="text" value="123456"
                                                                    class="form-control" id="battery_no">
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="chassis_no">Chassis
                                                                    No.</label>
                                                                <input type="text" value="123456"
                                                                    class="form-control" id="chassis_no">
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="controllerno">Controller
                                                                    No.</label>
                                                                <input type="text" value="123456"
                                                                    class="form-control" id="controllerno">
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="vehiclename">Vehicle
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    value="Divine 24" id="vehiclename">
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2"
                                                                    for="vehicletype">VehicleType</label>
                                                                <select name="vehicletype" id="vehicletype"
                                                                    class="form-control">
                                                                    <option value="2 Wheeler">2 Wheeler</option>
                                                                    <option value="3 Wheeler">3 Wheeler</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="vehicleimg">Vehicle
                                                                    Image</label>
                                                                <input type="file" class="form-control"
                                                                    id="vehicleimg">
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2"
                                                                    for="vehicletype">VehicleType</label>
                                                                <select name="vehicletype" id="vehicletype"
                                                                    class="form-control">
                                                                    <option value="2 Wheeler">2 Wheeler</option>
                                                                    <option value="3 Wheeler">3 Wheeler</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="vehiclecolor">Vehicle
                                                                    Colour</label>
                                                                <input type="text" class="form-control"
                                                                    value="Black" id="vehiclecolor">
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="purchasedate">Date of
                                                                    Purchase</label>
                                                                <input type="date" class="form-control"
                                                                    value="24-07-1983" id="purchasedate">
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="producedate">Date of
                                                                    Produce</label>
                                                                <input type="date" class="form-control"
                                                                    value="24-07-1983" id="producedate">
                                                            </div>
                                                        </div>

                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="whosecustomer">Whose
                                                                    Customer</label>
                                                                <input type="text" value="Divyashakti Enerprise"
                                                                    class="form-control" id="whosecustomer">
                                                            </div>
                                                        </div>


                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="insurance"> Insurance
                                                                    No.</label>
                                                                <input type="text" value="123123"
                                                                    class="form-control" id="insurance">
                                                            </div>
                                                        </div>


                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="invoice"> Invoice
                                                                    No.</label>
                                                                <input type="text" value="123123"
                                                                    class="form-control" id="invoice">
                                                            </div>
                                                        </div>


                                                        <div class=" col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="mb-2" for="gst"> GST No.</label>
                                                                <input type="text" value="123123"
                                                                    class="form-control" id="gst">
                                                            </div>
                                                        </div>






                                                    </div>
                                                    <button type="submit" class="btn btn-primary w-100">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="/backend-assets/js/jquery-3.7.1.min.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>

    <script src="/backend-assets/js/bootstrap.bundle.min.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>

    <script src="/backend-assets/plugins/slimscroll/jquery.slimscroll.min.js"
        type="1e8e4c23584c3657211db4d2-text/javascript"></script>
    <script src="/backend-assets/plugins/raphael/raphael.min.js"
        type="1e8e4c23584c3657211db4d2-text/javascript"></script>
    <script src="/backend-assets/plugins/morris/morris.min.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>
    <script src="/backend-assets/js/chart.morris.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>

    <script src="/backend-assets/js/script.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>
    <script src="/backend-assets/js/navbar.js"></script>
    <script src="/backend-assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="1e8e4c23584c3657211db4d2-|49" defer=""></script>
</body>

</html>
