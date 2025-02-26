@extends('partials.mainindex')

@push('title')
    <title>Privacy Policy | Divyashakti Enterprise</title>
@endpush

@push('meta')
<meta property="og:type" content="website" />
<meta property="og:title" content="Privacy Policy | Divyashakti Enterprise" />
<meta property="og:description"
    content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
<meta property="og:image" content="{{asset('assets/img/logo/logo.png')}}" />
<meta property="og:url" content="https://www.thedivyashakti.com/privacy-policy" />
<meta property="og:site_name" content="Divyashakti Enterprise" />
<link rel="canonical" href="https://www.thedivyashakti.com/privacy-policy">
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
                    <h2>Privacy Policy Page </h2>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="container-privacy">
            <h1 class="title">Divyashakti Enterprise<br>PRIVACY POLICY</h1>
            {{-- <p class="effective-date">Effective Date: 19 / 09 / 2024</p> --}}
            <hr class="divider">
            <section class="section">
                <h2 class="section-title">1. Introduction</h2>
                <p>1.1 Divyashakti Enterprise is committed to ensuring privacy of the Users on its website. In furtherance of the same, Divyashakti Enterprise has framed this Privacy Policy. </p>
                <p>1.2 The Privacy Policy is designed to familiarize Users of this Website Divyashakti Enterprise with (a) the type of information that Users may share with Divyashakti Enterprise, or that Divyashakti Enterprise will collect from the Users; (b) practices and policies of Divyashakti Enterprise relating to collection, storage, dealing, transfer, disclosure, transfer etc. of information pertaining to Users; (c) purpose of collection and usage of such information, and related matters.</p>
                <p>1.3 This Privacy Policy forms part of the Terms of Use of the Website Divyashakti Enterprise.</p>
            </section>
            <section class="section">
                <h2 class="section-title">2. Who We Are</h2>
                <p>2.1 Divyashakti Enterprise is a forward-thinking company specializing in the electric vehicle industry. We are dedicated to offering eco-friendly transportation solutions by selling a wide range of high-quality electric scooters. Our goal is to help drive the future of mobility by making electric vehicles accessible and reliable for everyday use. </p>
                <p>2.2 With a focus on customer satisfaction, sustainability, and cutting-edge technology, Divyashakti Enterprise is paving the way for the future of electric transportation. Whether you are looking for a personal electric scooter or seeking a dealership opportunity, we are here to support you with reliable products and exceptional service. </p>
            </section>
            <div class="section">
                <h2>3. Information We Collect</h2>
                <p>3.1 We collect information about you and the Services that you use. Information may also be required to enter
                    into a contract with you or to perform a contract with you (such as to provide the Service at your
                    request), and failure to provide any information may result in our inability to provide the requested
                    services or products. The information we collect falls into three different categories: 1) information
                    collected directly from you; 2) information collected automatically, and 3) information collected from
                    third parties.</p>
    
                
            </div>
            <section class="section">
                <h2 class="section-title">4.  IMPORTANT TERMS</h2>
                
                <p>4.1 This Privacy Policy forms an integral part of the “Terms of Use” of the Website Divyashakti Enterprise. If You do not agree with the terms of this Privacy Policy, please do not use this Website Divyashakti Enterprise. By visiting this Website / using the Mobile App, you (a) unconditionally accept, and agree to be bound by the “Terms of Use” of the Website Divyashakti Enterprise, read with this Privacy Policy; and (b) expressly consent to the collection, receipt, possession, storage, usage, dealing, handling or transfer of Your personal information by Divyashakti Enterprise in accordance with the terms of this Privacy Policy.</p>
                <p>4.2 The Privacy Policy can undergo a change at any time at the discretion of Divyashakti Enterprise. Therefore, it is suggested that You regularly check the Website Divyashakti Enterprise to be apprised of the latest changes made to the Privacy Policy.</p>
            </section>
            
            
            <section class="section">
                <h2 class="section-title">5. SECURITY PRACTICES AND PROCEDURES FOR PROTECTION OF INFORMATION</h2>
                <p>5.1 In order to make every effort to ensure that Your experience on the Website Divyashakti Enterprise is secure, we use encryption technology to protect You against the loss, misuse or alteration of Your personal information. When You fill out any contact forms or access Your account, a secure server encrypts all of Your information through the use of Secure Socket Layers (SSLs).</p>
            </section>
            <section class="section">
                <h2 class="section-title">6. UPDATES TO THIS PRIVACY POLICY</h2>
                <p>6.1 We may periodically update the Privacy Policy. Please refer the Updated on legend at the top of this page to see when this Privacy Policy was last revised. Any changes to this Privacy Policy will become effective when we post the revised Privacy Policy on our Website Divyashakti Enterprise. Your use of the Website Divyashakti Enterprise following these changes means that you accept the revised Privacy Policy.</p>
            </section>
            <section class="section">
                <h2 class="section-title">7.  GOVERNING LAW</h2>
                <p>7.1 The Website are designed and targeted to users who reside in the Republic of India and is governed by and operated in accordance with the laws of the India. By accessing and/or providing personal information through the Website Divyashakti Enterprise, you confirm that you meet the legal requirements for disclosure of personal information in our jurisdiction.</p>
                <p>7.2. Jurisdiction will be Gandhinagar.
                </p>
            </section>
            <section class="section">
                <h2 class="section-title">8. GPS Tracker Data & Consent</h2>
                <p>8.1 By purchasing or using our GPS trackers, you agree to the collection, processing, and storage of vehicle location data. We recommend you inform anyone using your vehicle that it is equipped with a GPS tracker.   </p>
            </section>
            
            <section class="section">
                <h2 class="section-title">9. Conflict Policy</h2>
                <p>9.1 In the event that the customer or the dealer has any conflicts or disputes with the company in the future, instead of filing a police case or a court case, they have to sit down and find an amicable solution.</p>
            </section>
            
            <section class="section">
                <h2 class="section-title">10. Contact Us</h2>
                <p>10.1 If you have any questions or concerns about this Privacy Policy or your personal data or queries about any vehicles then, please contact us at:</p>
                Divyashakti Enterprise <br>
                B 102 Swagat Flamingo, Sarkhej - Gandhinagar Hwy, near Sargasan, Chokdi, Gujarat 382421,<br>
                Phone: [+91 97375 61301],<br>
                Email: [contact@thedivyashakti.com].
            </section>
        </div>
    
@endsection













