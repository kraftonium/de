@extends('partials.mainindex')

@push('title')
    <title>Divyashakti Enterprise | Home</title>
@endpush


@push('meta')
<meta property="og:type" content="website" />
<meta property="og:title" content="Divyashakti Enterprise" />
<meta property="og:description"
    content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
<meta property="og:image" content="{{asset('assets/img/logo/logo.png')}}" />
<meta property="og:url" content="https://www.thedivyashakti.com" />
<meta property="og:site_name" content="Divyashakti Enterprise" />
<link rel="canonical" href="https://www.thedivyashakti.com">
@endpush

@push('logo')
     <a href="{{url('/')}}"><img alt="Logo" src="assets/img/logo/logo.png"></a>
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
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <!-- <div class="modal-headerr py-3 font-weight-bold ">
                    <h4 class="modal-title text-center" id="modalTitleId">LUCKY DROW OF DIVYASHAKTI ENTERPRISE</h4>
                </div> -->
                <div class="modal-bodyy popup-modal-body">
                    <div class="popup-image">
                        <img src="assets/img/popup/popup.png" alt="">
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





        <div class="slider-area">
            <div class="slider-active owl-carousel">
                <div class="single-slider slider-1" style="background-image: url(assets/img/slider/slider-bg.jpg)">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <div class="slider-img text-center">
                                <img class="animated" src="assets/img/home/classic.png" alt="slider images">
                            </div>
                            <div class="slider-text-img">
                                <img class="animated" src="assets/img/home/bike.jpg" alt="slider images">
                                <h6 class="animated"><strong>BOOK YOUR EV <a href="{{url('/vehicles')}}"><b>VEHICLES</b></a> OR
                                        <a href="{{url('/dealership')}}"><b>DEALERSHIP</b></a> </strong></h6>
                                <!-- <img class="animated" src="assets/img/home/bike2.jpg" alt="slider images"> -->
                            </div>
                            <h2 class="animated">EV VEHICLES</h2>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-1" style="background-image: url(assets/img/slider/slider-bg.jpg)">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <div class="slider-img text-center">
                                <img class="animated" src="assets/img/home/breeze.png" alt="slider images">
                            </div>
                            <div class="slider-text-img">
                                <img class="animated" src="assets/img/home/bike.jpg" alt="slider images">
                                <h6 class="animated"><strong>BOOK YOUR EV <a href="{{url('/vehicles')}}"><b>VEHICLES</b></a> OR
                                        <a href="{{url('/dealership')}}"><b>DEALERSHIP</b></a> </strong></h6>
                                <!-- <img class="animated" src="assets/img/home/bike2.jpg" alt="slider images"> -->
                            </div>
                            <h2 class="animated">EV VEHICLES</h2>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-1" style="background-image: url(assets/img/slider/slider-bg.jpg)">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <div class="slider-img text-center">
                                <img class="animated" src="assets/img/home/passenger.png" alt="slider images">
                            </div>
                            <div class="slider-text-img">
                                <img class="animated" src="assets/img/home/passenger.png" alt="slider images">
                                <h6 class="animated"><strong>BOOK YOUR EV <a href="{{url('/vehicles')}}"><b>VEHICLES</b></a> OR
                                        <a href="{{url('/dealership')}}"><b>DEALERSHIP</b></a> </strong></h6>
                                <!-- <img class="animated" src="assets/img/home/bike2.jpg" alt="slider images"> -->
                            </div>
                            <h2 class="animated">EV VEHICLES</h2>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-1" style="background-image: url(assets/img/slider/slider-bg.jpg)">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <div class="slider-img text-center">
                                <img class="animated" src="assets/img/home/loader-without-roof.png" alt="slider images">
                            </div>
                            <div class="slider-text-img">
                                <img class="animated" src="assets/img/home/loader-without-roof.png" alt="slider images">
                                <h6 class="animated"><strong>BOOK YOUR EV <a href="{{url('/vehicles')}}"><b>VEHICLES</b></a> OR
                                        <a href="{{url('/dealership')}}"><b>DEALERSHIP</b></a> </strong></h6>
                                <!-- <img class="animated" src="assets/img/home/bike2.jpg" alt="slider images"> -->
                            </div>
                            <h2 class="animated">EV VEHICLES</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-social">
                <ul>
                    <li class="facebook"><a href="https://www.facebook.com/profile.php?id=61561142282586"><i
                                class="icofont icofont-social-facebook"></i></a></li>
                    <li class="twitter"><a href="https://www.instagram.com/thedivyashakti"><i class="icofont icofont-social-instagram"></i></a></li>
                    <li class="pinterest"><a href="mailto:contact@thedivyashakti.com"><i class="icofont icofont-email"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/company/divyashakti-enterprise/"><i class="icofont icofont-social-linkedin"></i></a></li> 
                </ul>
            </div>
        </div>
        <div class="overview-area pt-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="overview-content">
                            <h1><span>DIVYASHAKTI ENTERPRISE</span> </h1>
                            <h2>GANDHINAGAR'S LARGEST <span><br> EV VEHICLES SHOWROOM</span></h2>
                            <p><span>DIVYASHAKTI ENTERPRISE</span> the most largest EV VEHICLES Showroom in the
                                gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of
                                transportation at our electric vehicles showroom. Embrace sustainable, stylish, and
                                powerful rides designed for the future. </p>
                            <div class="question-area">
                                <h4>HAVE ANY QUESTION? </h4>
                                <div class="question-contact">
                                    <div class="question-icon">
                                        <i class="icofont icofont-phone"></i>
                                    </div>
                                    <div class="question-content-number">
                                        <h6><a href="tel:+91 9737561301" class="text-light">+91 97375 61301</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="overview-img">
                            <img class="tilter" src="assets/img/home/eternal.png" alt="eternal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area pt-135 pb-120">
            <div class="container">
                <div class="row">
                    <div class=" col-md-5 col-lg-3">
                        <div class="banner-wrapper mb-30 banner-wrapper-custom">
                            <a href="{{url('/vehicles')}}"><img src="assets/img/home/victory.png" alt="victory"></a>
                            <div class="banner-content">
                                <h2>BUY EV SCOOTER</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="banner-wrapper mb-30 banner-wrapper-custom">
                            <a href="{{url('/vehicles')}}"><img src="assets/img/home/passenger.png" alt="passenger"></a>
                            <div class="banner-content">
                                <h2>BUY EV AUTO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="banner-wrapper mb-30 banner-wrapper-custom">
                            <a href="{{url('/dealership')}}"><img src="assets/img/home/electric-scooter-dealership.jpg"
                                    alt="dealership"></a>
                            <div class="banner-content">
                                <h2>GET DEALERSHIP</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="banner-wrapper mb-30 banner-wrapper-custom">
                            <a href="{{url('/gps')}}"><img src="assets/img/gps/gps-hero.webp" alt="gps"></a>
                            <div class="banner-content">
                                <h2>BUY GPS TRACKER</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-190">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2>CHOOSE YOUR EV VEHICLES</h2>
                    <p><span>DIVYASHAKTI ENTERPRISE</span> the most largest EV VEHICLES Showroom in the gandhinagar can
                        serve you latest qulity of EV Scooter also you buy dealership of EV VEHICLES</p>
                </div>
                <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
                    <!-- <a class="active" href="#home1" data-bs-toggle="tab" >
                            <h4>NEW BIKES </h4>
                        </a>
                        <a href="#home2" data-bs-toggle="tab">
                            <h4> USED BIKES </h4>
                        </a> -->
                    <!-- <a class="active" href="#home2" data-bs-toggle="tab"> -->
                    <h4><b>SEE EV VEHICLES MODELS</b></h4>
                    <!-- </a> -->
                </div>
                <div class="tab-content jump">
                    <div class="tab-pane active" id="home1">
                        <div class="product-slider-active owl-carousel">
                            <!-- <div class="product-wrapper-bundle"> -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{url('/victory')}}">
                                        <img src="assets/img/home/victory.png" alt="victory">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>Led-Gel-Battery</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="{{url('/victory')}}"> VICTORY</a></h4>
                                            <!-- <span>6700 RPM</span> -->
                                        </div>
                                        <div class="product-price">
                                            <span>49,999</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{url('/classic')}}">
                                        <img src="assets/img/home/classic.png" alt="classic">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>Led-Gel-Battery</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="{{url('/classic')}}"> CLASSIC</a></h4>
                                            <!-- <span>6700 RPM</span> -->
                                        </div>
                                        <div class="product-price">
                                            <span>59,999/- RS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img product-img-custom">
                                    <a href="{{url('/breeze')}}">
                                        <img src="assets/img/home/breeze.png" alt="breeze">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>Led-Gel-Battery</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="{{url('/breeze')}}"> BREEZE</a></h4>
                                            <!-- <span>6600 RPM</span> -->
                                        </div>
                                        <div class="product-price">
                                            <span>66,666/- RS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="product-wrapper">
                                <div class="product-img product-img-custom">
                                    <a href="{{url('/eternal')}}">
                                        <img src="assets/img/home/eternal.png" alt="eternal">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>Led-Gel-Battery</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="{{url('/eternal')}}"> ETERNAL</a></h4>
                                            <!-- <span>6600 RPM</span> -->
                                        </div>
                                        <div class="product-price">
                                            <span>74,999/- RS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-wrapper">
                                <div class="product-img product-img-custom">
                                    <a href="{{url('/divine-24')}}">
                                        <img src="assets/img/home/divine-24.png" alt="divine">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>Led-Gel-Battery</li>
                                        </ul>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="{{url('/divine-24')}}"> DIVINE-24</a></h4>
                                            <!-- <span>6600 RPM</span> -->
                                        </div>
                                        <div class="product-price">
                                            <span>83,333/- RS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-wrapper">
                                <div class="product-img product-img-custom">
                                    <a href="{{url('/passenger-auto')}}" class="auto-img-custom">
                                        <img src="assets/img/home/passenger.png" alt="auto">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>Li-Ion-Battery</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="{{url('/passenger-auto')}}"> PASSENGER AUTO</a></h4>
                                            <!-- <span>6600 RPM</span> -->
                                        </div>
                                        <div class="product-price">
                                            <span>2,38,500/- RS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-wrapper">
                                <div class="product-img product-img-custom">
                                    <a href="{{url('/loader-without-roof')}}" class="auto-img-custom">
                                        <img src="assets/img/home/loader-without-roof.png" alt="auto">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>Li-Ion-Battery</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="{{url('/loader-without-roof')}}"> LOADER AUTO</a></h4>
                                            <!-- <span>6600 RPM</span> -->
                                        </div>
                                        <div class="product-price">
                                            <span>2,42,500/- RS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- </div> -->
                        </div>
                        <span class="seeall-btn">
                            <a href="{{url('/vehicles')}}">
                                <h5>SEE ALL</h5>
                            </a>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="latest-product-area pt-100 pb-50 bg-img" style="background-image: url(assets/img/banner/banner-4.jpg)">
        <div class="container-fluid">
            <div class="latest-product-slider owl-carousel">
                <div class="single-latest-product slider-animated-2">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="latest-product-img latest-product-img-custom">
                                <img class="animated" src="assets/img/home/victory.png" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="latest-product-content">
                                <h2 class="animated">LATEST OFFER <br>FOR POPULAR EV SCOOTERS</h2>
                                <p class="animated"><span>DIVYASHAKTI ENTERPRISE</span> the most largest EV VEHICLES
                                    Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a
                                    new era of transportation at our electric VEHICLES showroom. Embrace sustainable,
                                    stylish, and powerful rides designed for the future.Revolutionize your daily commute
                                    today. </p>
                                <div class="latest-price">
                                    <h3 class="animated">BUY NOW AT <br> <span>LOW PRICE</span></h3>
                                </div>
                                <div class="latext-btn">
                                    <a class="animated" href="{{url('/vehicles')}}">SEE MORE DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-latest-product slider-animated-2">
                    <div class="row">
                        <div class="col-lg-7 col-col-12 col-12">
                            <div class="latest-product-img latest-product-img-custom">
                                <img class="animated" src="assets/img/home/passenger.png" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-5 col-col-12 col-12">
                            <div class="latest-product-content">
                                <h2 class="animated">LATEST OFFER <br>FOR POPULAR EV VEHICLES</h2>
                                <p class="animated"><span>DIVYASHAKTI ENTERPRISE</span> the most largest EV VEHICLES
                                    Showroom in the gandhinagar can serve you latest qulity of EV Vehicles. Discover a
                                    new era of transportation at our ELECTRIC VEHICLES showroom. Embrace sustainable,
                                    stylish, and powerful rides designed for the future.Revolutionize your daily commute
                                    today. </p>
                                <div class="latest-price">
                                    <h3 class="animated">BUY NOW AT <br> <span>LOW PRICE</span></h3>
                                </div>
                                <div class="latext-btn">
                                    <a class="animated" href="{{url('/vehicles')}}">SEE MORE DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accessories-area pt-152 pb-130">
        <div class="container-fluid">
            <div class="section-title section-fluid text-center mb-60">
                <h2>GPS</h2>
                <p><span>DIVYASHAKTI</span> the most latgest bike store in the wold can serve you latest qulity of
                    motorcycle also you can sell here your motorcycle</p>
            </div>
            <div class="accessories-wrapper">
                <div class="product-accessories-active owl-carousel">
                    <div class="product-wrapper">
                        <div class="product-img product-img-accessories">
                            <a href="{{url('/gps')}}">
                                <img src="assets/img/gps/gps-hero.webp" alt="gps">
                            </a>
                            <div class="product-action product-action-accessories mt-10">
                                For vehicles only
                            </div>
                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <!-- <span>Price: $120</span> -->
                                    <h4><a href="{{url('/gps')}}">Gps Tracker</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="product-wrapper">
                        <div class="product-img product-img-accessories">
                            <a href="{{url('/gps')}}">
                                <img src="assets/img/home/home-automation.webp" alt="home automation">
                            </a>
                            <div class="product-action product-action-accessories">
                                Make your smart home
                            </div>
                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <!-- <span>Price: $180</span> -->
                                    <h4><a href="{{url('/gps')}}">Home Automation</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="product-wrapper">
                        <div class="product-img product-img-accessories">
                            <a href="{{url('/gps')}}">
                                <img src="assets/img/home/street-light.webp" alt="streetlight">
                            </a>
                            <div class="product-action product-action-accessories ">
                                All type of solar light
                            </div>
                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <!-- <span>Price: $25</span> -->
                                    <h4><a href="{{url('/gps')}}"> Solar Light</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
</div>
                
            </div>
        </div>
    </div>


    




    <!--<section class="features-ev">-->
    <!--    <div class="containerr">-->
    <!--        <p class="key-features pb-2"><strong>Key Features</strong></p>-->
            <!-- <h2>Why Gemopai</h2> -->

    <!--        <div class="features-grid">-->
    <!--            <div class="feature-item">-->
    <!--                <img src="./assets/img/instagram/instagram1.jpg" alt="Economical Icon">-->
    <!--                <h3>Economical</h3>-->
    <!--                <p>Save running and maintenance costs.<br>Ride at 10-15p/km</p>-->
    <!--            </div>-->

    <!--            <div class="feature-item">-->
    <!--                <img src="./assets/img/instagram/instagram2.jpg" alt="Fast Charging Icon">-->
    <!--                <h3>Fast Charging</h3>-->
    <!--                <p>80% in 2 hours</p>-->
    <!--            </div>-->

    <!--            <div class="feature-item">-->
    <!--                <img src="./assets/img/instagram/instagram3.jpg" alt="Lithium-ion Battery Icon">-->
    <!--                <h3>Lithium-ion Battery</h3>-->
    <!--                <p>Portable battery with a 3-year warranty</p>-->
    <!--            </div>-->

    <!--            <div class="feature-item">-->
    <!--                <img src="./assets/img/instagram/instagram4.jpg" alt="High Torque Motor Icon">-->
    <!--                <h3>High Torque Motor</h3>-->
    <!--                <p>0-40 in 6.5 seconds</p>-->
    <!--            </div>-->

    <!--            <div class="feature-item">-->
    <!--                <img src="./assets/img/instagram/instagram5.jpg" alt="Regenerative Braking Icon">-->
    <!--                <h3>Regenerative Braking</h3>-->
    <!--                <p>80% recovery in 2 hours</p>-->
    <!--            </div>-->

    <!--            <div class="feature-item">-->
    <!--                <img src="./assets/img/instagram/instagram6.jpg" alt="Anti Theft Alarm Icon">-->
    <!--                <h3>Anti Theft Alarm</h3>-->
    <!--                <p>Keyless entry with anti-theft alarm</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <section class="features-ev">
        <div class="containerr">
            <p class="key-features pb-2"><strong>Key Features</strong></p>
            <!-- <h2>Why Gemopai</h2> -->
            <div class="features-grid">
                <div class="feature-item">
                    <img src="./assets/img/home/key-features/maintainance.jpg" alt="Economical Icon">
                    <h3>Economical</h3>
                    <p>Save running and maintenance costs.<br>Ride at 10-15p/km</p>
                </div>
                <div class="feature-item">
                    <img src="./assets/img/home/key-features/fast charging.avif" alt="Fast Charging Icon">
                    <h3>Fast Charging</h3>
                    <p>80% in 2 hours</p>
                </div>
                <div class="feature-item">
                    <img src="./assets/img/home/key-features/battery.jpg" alt="Lithium-ion Battery Icon">
                    <h3>Lithium-ion Battery</h3>
                    <p>Portable battery with a 3-year warranty</p>
                </div>
                <div class="feature-item">
                    <img src="./assets/img/home/key-features/motor.jpg" alt="High Torque Motor Icon">
                    <h3>High Torque Motor</h3>
                    <p>0-40 in 6.5 seconds</p>
                </div>
                <div class="feature-item">
                    <img src="./assets/img/home/key-features/braking.png" alt="Regenerative Braking Icon">
                    <h3>Regenerative Braking</h3>
                    <p>80% recovery in 2 hours</p>
                </div>
                <div class="feature-item">
                    <img src="./assets/img/home/key-features/key-less.jpeg" alt="Anti Theft Alarm Icon">
                    <h3>Anti Theft Alarm</h3>
                    <p>Keyless entry with anti-theft alarm</p>
                </div>
            </div>
        </div>
        <!--<div class="floating-buttons">-->
            <!-- <a href="#">Claim Cashback</a> -->
        <!--    <a href="book-ride.html"><b>Book A Ride</b></a>-->
        <!--    <a href="dealership.html"><b>Apply For Dealership</b></a>-->
        <!--</div>-->
    </section>




    <div class="testimonial-area ">
        <div class="container">
            <div class="section-title-2 section-title-position">
                <h2>OUR CLIENTS REVIEW</h2>
            </div>
            <div class="testimonial-active owl-carousel">
                <div class="single-testimonial">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="testimonial-img pl-75">
                                <img alt="image" src="assets/img/team/testimonial1.png"  style="height:30rem;width:21rem!important;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testimonial-content">
                                <div class="testimonial-dec">
                                    <p>
                                        <!--<span>DIVYASHAKTI</span>-->
                                        Impressive range of scooters for all needs! Clear descriptions, user-friendly layout, and fast checkout. Shipping was quick, and support was excellent.</p>
                                </div>
                                <div class="name-designation">
                                    <h4>Jayaben Patel</h4>
                                    <!--<span>COO, ASEKHA</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="testimonial-img pl-75">
                                <img alt="image" src="assets/img/team/testimonial2.png" style="height:30rem;width:21rem!important;">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="testimonial-content">
                                <div class="testimonial-dec">
                                    <p>
                                        <!--<span>DIVYASHAKTI</span>-->
                                    Great experience with this electric scooter! Smooth ride, excellent battery life, and fast charging. Highly recommend for city commuting.</p>
                                </div>
                                <div class="name-designation">
                                    <h4>Krunal Nayak</h4>
                                    <!--<span>CEO, ASEKHA</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="testimonial-img pl-75">
                                <img alt="image" src="assets/img/team/testimonial3.png" style="height:30rem;width:21rem!important;">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="testimonial-content">
                                <div class="testimonial-dec">
                                    <p>
                                        <!--<span>DIVYASHAKTI</span>-->
                                   Absolutely love this electric scooter! The ride is incredibly smooth, the battery lasts for hours, and it charges up quickly. Perfect for zipping around the city—highly recommended!</p>
                                </div>
                                <div class="name-designation">
                                    <h4>Ramesh Patel</h4>
                                    <!--<span>CEO, ASEKHA</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   

    <script>
        window.onload = function () {
            setTimeout(function () {
                const myModal = new bootstrap.Modal(document.getElementById("modalId"));
                myModal.show();
            }, 2000);
        };

    </script>
    @endsection