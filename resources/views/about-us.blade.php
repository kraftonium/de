@extends('partials.mainindex')

@push('title')
    <title>About Us | Divyashakti Enterprise</title>
@endpush


@push('meta')
<meta property="og:type" content="website" />
<meta property="og:title" content="About Us | Divyashakti Enterprise" />
<meta property="og:description"
    content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
<meta property="og:image" content="{{asset('assets/img/logo/logo.png')}}" />
<meta property="og:url" content="https://www.thedivyashakti.com/about-us" />
<meta property="og:site_name" content="Divyashakti Enterprise" />
<link rel="canonical" href="https://www.thedivyashakti.com/about-us">
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
                        <h2>About Us</h2>
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-us-area pt-125 pb-125">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-content">
                                <h1><span>DIVYASHAKTI ENTERPRISE</span> GANDHINAGAR'S MOST </h1>
                                <h2>LARGEST <span>EV SCOOTER SHOWROOM</span></h2>
                                <p><span>DIVYASHAKTI ENTERPRISE</span> the most largest EV Scooter Showroom in the
                                    gandhinagar can serve you latest qulity of EV scooters. Discover a new era of
                                    transportation at our electric scooter showroom. Embrace sustainable, stylish, and
                                    powerful rides designed for the future.</p>
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
                                <img class="tilter" src="assets/img/home/victory.png" alt="victory">
                                <!-- <img class="tilter" src="assets/img/banner/banner-1.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services orange mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="Free Shipping" src="assets/img/icon-img/3.png">
                                </div>
                                <div class="services-text">
                                    <h5>FREE SHIPPING</h5>
                                    <p>Free shipping on order </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services yellow mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="Online Support" src="assets/img/icon-img/4.png">
                                </div>
                                <div class="services-text">
                                    <h5>ONLINE SUPPORT</h5>
                                    <p>Online support 24 hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services purple mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="Money Return" src="assets/img/icon-img/5.png">
                                </div>
                                <div class="services-text">
                                    <h5>MONEY RETURN</h5>
                                    <p>Refund money guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services sky mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="Member Discount" src="assets/img/icon-img/6.png">
                                </div>
                                <div class="services-text">
                                    <h5>MEMBER DISCOUNT</h5>
                                    <p>On every order of EV</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-team-members">
                <!--<< Team Section Start >>-->
        <section class="team-section-2 section-padding bg-cover" style="background-image: url('assets/img/team/bg.jpg');">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="wow fadeInUp">Team Members</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Our Dedicated Team <br> Members
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/instagram/sir.jpg" alt="team-img">
                            </div>
                            <div class="team-content text-center">
                                <h3>
                                    <a href="#">Jitendra Barot</a>
                                </h3>
                                <p>Founder & MD</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/instagram/jimil.jpg" alt="team-img">
                            </div>
                            <div class="team-content text-center">
                                <h3>
                                    <a href="#">Jiimill  Barot</a>
                                </h3>
                                <p>Co-Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/instagram/instagram3.jpg" alt="team-img">
                                  
                            </div>
                            <div class="team-content text-center">
                                <h3>
                                    <a href="#">Sweta Dube</a>
                                </h3>
                                <p>Chartered Accountant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>


            <!-- team members end -->

            <div class="testimonial-area">
                <div class="container">
                    <div class="section-title-2 section-title-position">
                        <h2>OUR CLIENTS REVIEW</h2>
                    </div>
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="testimonial-img pl-75">
                                        <img alt="testimonial-image" src="assets/img/team/testimonial1.png"  style="height:30rem;width:21rem!important;">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p>
                                                <!--<span>Hype</span>-->
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
                                        <img alt="testimonial-image" src="assets/img/team/testimonial2.png"  style="height:30rem;width:21rem!important;">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p>
                                                <!--<span>Hype</span>-->
                                            Great experience with this electric scooter! Smooth ride, excellent battery life, and fast charging. Highly recommend for city commuting.</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>Krunal Patel</h4>
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
                                        <img alt="testimonial-image" src="assets/img/team/testimonial3.png"  style="height:30rem;width:21rem!important;">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p>
                                                <!--<span>Hype</span>-->
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
            <!-- <div class="team-area pt-120 pb-95">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <h2>Team Member</h2>
                        <p>
                            <span>OSWAN</span>
                            the most latgest bike store in the wold can serve you latest qulity of motorcycle also you can sell here your motorcycle
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="assets/img/team/1.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Zoe Jones</h4>
                                    <span>Founder </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="assets/img/team/2.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Sienna Nguyen</h4>
                                    <span>Manager </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="assets/img/team/3.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Liam Ryan</h4>
                                    <span>Director </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="assets/img/team/4.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Charlotte Taylor</h4>
                                    <span>Chairmen </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
           {{-- <script>
        window.onload = function () {
            setTimeout(function () {
                const myModal = new bootstrap.Modal(document.getElementById("modalId"));
                myModal.show();
            }, 2000);
        };

    </script> --}}
            @endsection