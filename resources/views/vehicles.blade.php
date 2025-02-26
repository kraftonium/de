@extends('partials.mainindex')

@push('title')
    <title>Vehicles | Divyashakti Enterprise</title>
@endpush

@push('meta')
<meta property="og:type" content="website" />
<meta property="og:title" content="Vehicles | Divyashakti Enterprise" />
<meta property="og:description"
    content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
<meta property="og:image" content="{{asset('assets/img/logo/logo.png')}}" />
<meta property="og:url" content="https://www.thedivyashakti.com/vehicles" />
<meta property="og:site_name" content="Divyashakti Enterprise" />
<link rel="canonical" href="https://www.thedivyashakti.com/vehicles">
@endpush

@push('logo')
    <a class="logo-sticky-none" href="{{url('/')}}"><img alt="Logo"
                                            src="assets/img/logo/logo-white.png"></a>
                                    <a class="logo-for-sticky" href="{{url('/')}}"><img alt="Logo"
                                            src="assets/img/logo/logo.png"></a>
@endpush

@section('main-section')

<!-- ----- POPUP DISPLAY START ----- -->
    <!-- Modal trigger button (Optional if you want manual trigger) -->
    <button type="button" class="btn btn-primary btn-lg d-none" data-bs-toggle="modal" data-bs-target="#modalId">
        Launch
    </button>
    <!-- Modal Body -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollablee modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <!-- <div class="modal-headerr py-3 font-weight-bold ">
                    <h4 class="modal-title text-center" id="modalTitleId">LUCKY DROW OF DIVYASHAKTI ENTERPRISE</h4>
                </div> -->
                <div class="modal-bodyy popup-modal-body">
                    <div class="popup-image">
                        <img src="assets/img/popup/popup.png" alt="Lucky Draw Image">
                    </div>
                    <div class="popup-content">
                        <h2 class="text-dark"><b>LUCKY DRAW</b></h2>
                        <div class="form-center">
                            <h5 class="mb-4"><b> Won Electric Scooter Or Gold </b></h5>
                            <form action="" class="popup-form" id="ld_form" method="post">
                                @csrf
                                <input type="text" name="ldname" id="ldname" placeholder="Your Name" onblur="validatecontactLDName()">
                                <span class="text-danger" id="ldname-error"></span>
                                <input type="text" name="ldphoneno" id="ldphoneno" placeholder="Your Phone No" maxlength="10" onblur="validatecontactLDPhoneno()">
                                <span class="text-danger" id="ldphoneno-error"></span>
                                <input type="text" name="ldcity" id="ldcity" placeholder="Your City" onblur="validatecontactLDCity()">
                                <span class="text-danger" id="ldcity-error"></span>
                                <div class="modal-btns">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-warning" id="ldbutton">Apply</button>
                                </div>
                                <div id="ldconsuccess"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----- POPUP DISPLAY END ----- -->



        <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h2>Electric Vehicles Page</h2>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Electric Vehicles page</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-wrapper fluid-padding-2 pt-120 pb-150">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="shop-topbar-wrapper">
                            <div class="product-heading">
                                <h2 class="font-weight-bold">Our Electric Vehicles</h2>
                            </div>
                            <div class="grid-list-options">
                                <ul class="view-mode">
                                    <li class="active"><a href="#product-grid" data-view="product-grid"><i
                                                class="ti-layout-grid2"></i></a></li>
                                    <li ><a href="#product-list"  data-view="product-list"><i
                                                class="ti-view-list" ></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid-list-product-wrapper tab-content">
                            <div id="new-product" class="product-grid product-view tab-pane active">
                                <div class="row">
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="{{url('/victory')}}">
                                                    <img src="assets/img/home/victory.png" alt="victory-white">
                                                    <!-- <img src="assets/img/product/product-1.jpg" alt="">  -->
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>Lead-Gel-Battery</li>

                                                    </ul>
                                                </div>

                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="{{url('/victory')}}">VICTORY</a></h4>
                                                        <!-- <span>6600 RPM</span> -->
                                                    </div>
                                                    <div class="product-price">
                                                        <span>49,999/- RS</span><br>
                                                        <span>+ 5% Extra GST</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="{{url('/victory')}}">VICTORY</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="custom-product-data">
                                                    <div class="product-price">
                                                        <span> Price - 49,999/- RS + 5% Extra GST</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Battery Type - Lead Gel Battery</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Range - 50KM to 60KM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Warrenty Period - 1 Year</span>
                                                    </div>
                                                </div>

                                                <div id="custom-remove-btn" class="book-ride">
                                                    <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                                </div>
                                            </div>
                                            <div  class="book-ride-grid ">
                                                <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="{{url('/classic')}}">
                                                    <img src="assets/img/home/classic.png" alt="classic-white">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>Lead-Gel-Battery</li>

                                                    </ul>
                                                </div>

                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="{{url('/classic')}}">CLASSIC</a></h4>
                                                        <!-- <span>6600 RPM</span> -->
                                                    </div>
                                                    <div class="product-price">
                                                        <span>59,999/- RS</span><br>
                                                        <span>+ 5% Extra GST</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="{{url('/classic')}}">CLASSIC</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="custom-product-data">
                                                    <div class="product-price">
                                                        <span> Price - 59,999/- RS + 5% Extra GST</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Battery Type - Lead Gel Battery</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Range - 60KM to 70KM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Warrenty Period - 2 Year</span>
                                                    </div>
                                                </div>

                                                <div id="custom-remove-btn" class="book-ride">
                                                    <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                                </div>
                                            </div>
                                            <div  class="book-ride-grid ">
                                                <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="{{url('/breeze')}}">
                                                    <img src="assets/img/home/breeze.png" alt="breeze-white">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>Lead-Gel-Battery</li>

                                                    </ul>
                                                </div>

                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="{{url('/breeze')}}">BREEZE</a></h4>
                                                        <!-- <span>6600 RPM</span> -->
                                                    </div>
                                                    <div class="product-price">
                                                        <span>66,666/- RS</span><br>
                                                        <span>+ 5% Extra GST</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="{{url('/breeze')}}">BREEZE</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="custom-product-data">
                                                    <div class="product-price">
                                                        <span> Price - 66,666/- RS + 5% Extra GST</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Battery Type - Lead Gel Battery</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Range - 70KM to 80KM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Warrenty Period - 3 Year</span>
                                                    </div>
                                                </div>

                                                <div id="custom-remove-btn" class="book-ride">
                                                    <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                                </div>
                                            </div>
                                            <div  class="book-ride-grid ">
                                                <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="{{url('/eternal')}}">
                                                    <img src="assets/img/home/eternal.png" alt="eternal-white">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>Lead-Gel-Battery</li>

                                                    </ul>
                                                </div>

                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="{{url('/eternal')}}">ETERNAL</a></h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>74,999/- RS</span><br>
                                                        <span>+ 5% Extra GST</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="{{url('/eternal')}}"> ETERNAL</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="custom-product-data">
                                                    <div class="product-price">
                                                        <span> Price - 74,999/- RS + 5% Extra GST</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Battery Type - Lead Gel Battery</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Range - 80KM to 100KM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Warrenty Period - 5 Year</span>
                                                    </div>
                                                </div>

                                                <div id="custom-remove-btn" class="book-ride">
                                                    <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                                </div>
                                            </div>
                                            <div  class="book-ride-grid ">
                                                <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="{{url('/divine-24')}}">
                                                    <img src="assets/img/home/divine-24.png" alt="DIVINE">
                                                    <!-- <img src="assets/img/home/eternal-white.png" alt=""> -->
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>Lead-Gel-Battery</li>
                                                    </ul>
                                                </div>
                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="{{url('/divine-24')}}">DIVINE-24</a></h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>83,333/- RS</span><br>
                                                        <span>+ 5% Extra GST</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="{{url('/divine-24')}}"> DIVINE-24</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="custom-product-data">
                                                    <div class="product-price">
                                                        <span> Price - 83,333/- RS + 5% Extra GST</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Battery Type - Lead Gel Battery</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Range - 90KM to 100KM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Warrenty Period - 6 Year</span>
                                                    </div>
                                                </div>
                                                <div id="custom-remove-btn" class="book-ride">
                                                    <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                                </div>
                                            </div>
                                            <div  class="book-ride-grid ">
                                                <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="{{url('/passenger-auto')}}"  class="auto-img-custom">
                                                    <img src="assets/img/home/passenger.png" alt="passenger">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>Li-Ion-Battery</li>

                                                    </ul>
                                                </div>

                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="{{url('/passenger-auto')}}">PASSENGER AUTO</a></h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>2,38,500/- RS</span><br>
                                                        <span>+ 5% Extra GST</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="{{url('/passenger-auto')}}"> PASSENGER AUTO</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="custom-product-data">
                                                    <div class="product-price">
                                                        <span> Price - 2,38,500/- RS + 5% Extra GST</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Capacity -   04+1/400 kgs</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Range - 100KM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Charge Time - 4 Hours</span>
                                                    </div>
                                                </div>

                                                <div id="custom-remove-btn" class="book-ride">
                                                    <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                                </div>
                                            </div>
                                            <div  class="book-ride-grid ">
                                                <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <!--<a href="{{url('/loader-without-roof')}}"  class="auto-img-custom">-->
                                                <!--    <img src="assets/img/home/loader-without-roof.png" alt="loader-without-roof">-->
                                                <!--</a>-->
                                                 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="product-details-loader-without-roof.html" class="auto-img-custom">
                                                                <img src="assets/img/home/loader-without-roof.png" class="d-block w-100" alt="auto">
                                                            </a>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="product-details-loader-with-roof.html" class="auto-img-custom">
                                                                <img src="assets/img/home/loader-with-roof.png" class="d-block w-100" alt="auto">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>Li-Ion-Battery</li>

                                                    </ul>
                                                </div>

                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="{{url('/loader-without-roof')}}">LOADER AUTO</a></h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>2,42,500/- RS</span><br>
                                                        <span>+ 5% Extra GST</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="{{url('/loader-without-roof')}}"> LOADER AUTO</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="custom-product-data">
                                                    <div class="product-price">
                                                        <span> Price - 2,42,500/- RS + 5% Extra GST</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Capacity -   04+1/400 kgs</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Range - 100KM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span> Charge Time - 4 Hours</span>
                                                    </div>
                                                </div>

                                                <div id="custom-remove-btn" class="book-ride">
                                                    <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                                </div>
                                            </div>
                                            <div  class="book-ride-grid ">
                                                <a href="{{url('/book-ride')}}"> Book A Ride </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="product-width col-md-6 col-xl-4 col-lg-6">-->
                                    <!--    <div class="product-wrapper mb-35">-->
                                    <!--        <div class="product-img">-->
                                    <!--            <a href="{{url('/loader-with-roof')}}"  class="auto-img-custom">-->
                                    <!--                <img src="assets/img/home/loader-with-roof.png" alt="loader-with-roof">-->
                                    <!--            </a>-->
                                    <!--            <div class="product-item-dec">-->
                                    <!--                <ul>-->
                                    <!--                    <li>Li-Ion-Battery</li>-->

                                    <!--                </ul>-->
                                    <!--            </div>-->

                                    <!--            <div class="product-content-wrapper">-->
                                    <!--                <div class="product-title-spreed">-->
                                    <!--                    <h4><a href="{{url('/loader-with-roof')}}">LOADER AUTO</a></h4>-->
                                    <!--                </div>-->
                                    <!--                {{-- <div class="product-price">-->
                                    <!--                    <span>2,42,500/- RS</span>-->
                                    <!--                </div> --}}-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="product-list-details">-->
                                    <!--            <h2><a href="{{url('/loader-with-roof')}}"> LOADER AUTO</a></h2>-->
                                    <!--            <div class="quick-view-rating">-->
                                    <!--                <i class="fa fa-star reting-color"></i>-->
                                    <!--                <i class="fa fa-star reting-color"></i>-->
                                    <!--                <i class="fa fa-star reting-color"></i>-->
                                    <!--                <i class="fa fa-star reting-color"></i>-->
                                    <!--                <i class="fa fa-star reting-color"></i>-->
                                    <!--            </div>-->
                                    <!--            <div class="custom-product-data">-->
                                    <!--                {{-- <div class="product-price">-->
                                    <!--                    <span> Price - 2,42,500/- RS</span>-->
                                    <!--                </div> --}}-->
                                    <!--                <div class="product-price">-->
                                    <!--                    <span> Capacity -   04+1/400 kgs</span>-->
                                    <!--                </div>-->
                                    <!--                <div class="product-price">-->
                                    <!--                    <span> Range - 100KM</span>-->
                                    <!--                </div>-->
                                    <!--                <div class="product-price">-->
                                    <!--                    <span> Charge Time - 4 Hours</span>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--            <div id="custom-remove-btn" class="book-ride">-->
                                    <!--                <a href="{{url('/book-ride')}}"> Book A Ride </a>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div  class="book-ride-grid ">-->
                                    <!--            <a href="{{url('/book-ride')}}"> Book A Ride </a>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->




                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endsection