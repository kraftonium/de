@extends('partials.mainindex')

@push('title')
    <title>Loader With Roof | Divyashakti Enterprise</title>
@endpush

@push('meta')
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Loader With Roof | Divyashakti Enterprise" />
    <meta property="og:description"
        content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
    <meta property="og:image" content="{{ asset('assets/img/home/loader-with-roof.png') }}" />
    <meta property="og:url" content="https://www.thedivyashakti.com/loader-with-roof" />
    <meta property="og:site_name" content="Divyashakti Enterprise" />
    <link rel="canonical" href="https://www.thedivyashakti.com/loader-with-roof">
@endpush

@push('logo')
    <a class="logo-sticky-none" href="{{ url('/') }}"><img alt="Logo" src="assets/img/logo/logo-white.png"></a>
    <a class="logo-for-sticky" href="{{ url('/') }}"><img alt="Logo" src="assets/img/logo/logo.png"></a>
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
                                <input type="text" name="ldname" id="ldname" placeholder="Your Name"
                                    onblur="validatecontactLDName()">
                                <span class="text-danger" id="ldname-error"></span>
                                <input type="text" name="ldphoneno" id="ldphoneno" placeholder="Your Phone No"
                                    maxlength="10" onblur="validatecontactLDPhoneno()">
                                <span class="text-danger" id="ldphoneno-error"></span>
                                <input type="text" name="ldcity" id="ldcity" placeholder="Your City"
                                    onblur="validatecontactLDCity()">
                                <span class="text-danger" id="ldcity-error"></span>
                                <div class="modal-btns">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                <h2>Vehicle details </h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>vehicle details </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area fluid-padding-3 ptb-130">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-img-content">
                        <div class="product-details-tab mr-40">
                            <div class="product-details-large tab-content">
                                <div class="tab-pane active" id="pro-details1">
                                    <div class="easyzoomeasyzoom--overlay">
                                        <a href="assets/img/home/loader-with-roof.png">
                                            <img src="assets/img/home/loader-with-roof.png" class="loader-with-roof-img"
                                                alt="Loader With Roof">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content" id="product-details">
                        <h2>LOADER WITH ROOF AUTO</h2>
                        <div class="quick-view-rating">
                            <i class="fa fa-star reting-color"></i>
                            <i class="fa fa-star reting-color"></i>
                            <i class="fa fa-star reting-color"></i>
                            <i class="fa fa-star reting-color"></i>
                            <i class="fa fa-star reting-color"></i>
                        </div>
                        {{-- <div class="product-price" id="product-price">
                                    <span>Price : 48,000/- RS</span>
                                </div> --}}
                        <div class="product-overview">
                            <h5 class="pd-sub-title">Vehicles Overview</h5>
                            <p>This non-number plate electric scooter is an eco-friendly, low-speed vehicle perfect for
                                urban commutes. With a 250W motor, 25 km/h speed, and a 40-60 km range, it offers
                                affordability and convenience without needing registration or a license. Lightweight and
                                zero-emission, it's ideal for short-distance travel, ensuring a sustainable and
                                cost-effective ride.</p>
                        </div>
                        <div class="product-overview">
                            <h5 class="pd-sub-title">Vehicle Details</h5>
                            <span id="product-battery">Battery Type : Li-Ion Battery</span> <br>
                            <span id="product-range">Range : 100 Km</span> <br>
                            <span id="product-warranty">Capacity - 04+1/400 kgs</span> <br>
                            <span id="product-warranty">Top Speed - 25 Km</span> <br>
                            <span id="product-warranty">Ground Clearence - 330 mm</span> <br>
                            <span id="product-charge">Charge Time - 4 Hours</span>
                        </div>

                        <div class="book-ride-grid ">
                            <a href="{{ url('/book-ride') }}"> Book A Ride </a>
                        </div>
                        <!-- <div class="product-details-custom">

                                                <div class="product-range">
                                                    <h5 class="pd-sub-title">Select Range</h5>
                                                    <select name="" id="select-range">
                                                        <option value="50Km to 60Km">50Km to 60Km</option>
                                                        <option value="60Km to 70Km">60Km to 70Km</option>
                                                        <option value="70Km to 80Km">70Km to 80Km</option>
                                                        <option value="80Km to 100Km">80Km to 100Km</option>
                                                    </select>
                                                </div>
                                                
                                                
                                                <div class="product-battery-type ">
                                                    <h5 class="pd-sub-title">Select Battery Type</h5>
                                                    <select name="" id="select-battery">
                                                        <option value="Lead Gel Battery">Lead Gel Battery</option>
                                                        <option value="Lithium Battery">Lithium Battery</option>
                                                    </select>
                                                </div>
                
                                            </div> -->
                        <!-- <div class="product-color">
                                                <h5 class="pd-sub-title">Product color</h5>
                                                <ul>
                                                    <li class="gray">b</li>
                                                    <li class="pink">p</li>
                                                    <li class="blue">b</li>
                                                    <li class="sky2">b</li>
                                                    <li class="green">y</li>
                                                    <li class="purple2">g</li>
                                                </ul>
                                            </div> -->



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
