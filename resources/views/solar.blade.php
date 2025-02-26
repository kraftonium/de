@extends('partials.mainindex')

@push('title')
    <title>Solar | Divyashakti Enterprise</title>
@endpush

@push('meta')
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Solar | Divyashakti Enterprise" />
    <meta property="og:description"
        content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
    <meta property="og:image" content="{{ asset('assets/img/logo/logo.png') }}" />
    <meta property="og:url" content="https://www.thedivyashakti.com/solar" />
    <meta property="og:site_name" content="Divyashakti Enterprise" />
    <link rel="canonical" href="https://www.thedivyashakti.com/solar">
@endpush

@push('logo')
    <a class="logo-sticky-none" href="{{ url('/') }}"><img alt="Logo" src="assets/img/logo/logo-white.png"></a>
    <a class="logo-for-sticky" href="{{ url('/') }}"><img alt="Logo" src="assets/img/logo/logo.png"></a>
@endpush

@section('main-section')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Solar Page </h2>
                <ul>
                    <li>
                        <a href="index.html">home</a>
                    </li>
                    <li>Solar Page </li>
                </ul>
            </div>
        </div>
    </div>


    <section class="about-gps">

        <div class="gps-hero">
            <div class="about-gps-content">
                <h3>About Solar</h3>
                <p><i class='fas fa-bullseye mr-10'></i> Harness the power of the sun with our high-efficiency solar panels,
                    designed to provide clean, renewable energy for homes, businesses, and beyond. Built with advanced
                    photovoltaic technology, these panels maximize energy output while maintaining durability and
                    long-lasting performance. Whether you're looking to reduce your energy bills or contribute to a greener
                    planet, our solar panels are the perfect solution.</p>
                <p><i class='fas fa-bullseye mr-10'></i>Embrace sustainable living with our cutting-edge solar panels,
                    engineered to deliver unmatched energy efficiency and long-lasting performance. Designed for modern
                    homes, businesses, and industrial spaces, our solar panels are your gateway to reducing energy costs and
                    contributing to a cleaner, greener planet.</p>
            </div>
            <div class="about-gps-img">
                <img src="/assets/img/solar/solar1.png" alt="img">
            </div>
        </div>

        <!-- <div class="gps-vision">
                <h3>Vision</h3>
                <p><i class='fas fa-bullseye mr-10'></i> People are not well educated with importance of GPS Tracking device , Home Automation Instrument as well Security & Surveillance System in Market</p>
            </div>

            <div class="gps-mission">
                <h3>Mission</h3>
                <p><i class='fas fa-bullseye mr-10'></i> Farming Activity still on traditional methods include there is not adequate water supply to crop as well some time over water supply to crop and those activities need to be automated to simplify life of Farmers.</p>
            </div> -->

        <div class="banner-area ">
            <div class="container">
                <div class="row">
                    <div class=" col-md-5 col-lg-3">
                        <div class="banner-wrapper mb-30 banner-wrapper-custom">
                            <a href="vehicles.html"><img src="assets/img/solar/solar4.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>30 Year <br> Warrenty
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="banner-wrapper mb-30 banner-wrapper-custom">
                            <a href="vehicles.html"><img src="assets/img/solar/solar5.webp" alt="image"></a>
                            <div class="banner-content">
                                <h2>5 Year Free Service</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="banner-wrapper mb-30 banner-wrapper-custom">
                            <a href="dealership.html"><img src="assets/img/solar/solar3.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>Get Loan <br> Facility</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="banner-wrapper mb-30 banner-wrapper-custom">
                            <a href="gps.html"><img src="assets/img/solar/solar1.png" alt="image"></a>
                            <div class="banner-content">
                                <h2>Money Back<br> In 2-3 Year</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=" ">

            <div class=" ">
                <h3>Key Highlights Of Solar Energy</h3>
                <p>Our advanced solar panels deliver high efficiency, durability, and eco-friendly energy, reducing costs
                    while promoting sustainability for homes and businesses.</p>
                <div class="highlights-year">

                    <p><i class='fas fa-bullseye mr-10'></i>Efficiency: High-performance cells with superior energy
                        conversion rates.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>Durability: Weather-resistant and built to withstand extreme
                        conditions.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>Eco-Friendly: Reduce your carbon footprint and save on energy
                        costs.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>
                        Versatile: Ideal for residential, commercial, and industrial applications.
                    </p>
                    <p><i class='fas fa-bullseye mr-10'></i> Advanced Photovoltaic Technology: State-of-the-art solar cells
                        with high energy conversion rates to optimize power generation.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>Exceptional Durability: Built with weather-resistant materials
                        to endure rain, snow, hail, and extreme temperatures, ensuring reliable performance year-round.
                    </p>
                    <p><i class='fas fa-bullseye mr-10'></i>
                        High Efficiency: Designed to capture maximum sunlight, even in low-light conditions, to provide
                        consistent energy output.
                    </p>
                    <p><i class='fas fa-bullseye mr-10'></i>Versatile Applications: Perfect for residential rooftops,
                        commercial properties, industrial installations, and off-grid solutions.
                    </p>
                    <p><i class='fas fa-bullseye mr-10'></i>Eco-Friendly Design: Reduces your dependence on fossil fuels,
                        helping lower greenhouse gas emissions.
                    </p>
                </div>
            </div>
            <div class="">
                <img src="/assets/img/solar/solar2.png" alt="img" style="width: 100%;">
            </div>
            <div class="mt-4 ">
                <h3>Why Choose Our Solar Panels?</h3>
                <div class="highlights-year">

                    <p><i class='fas fa-bullseye mr-10'></i>Cost-Effective: Save on electricity bills and enjoy government
                        incentives and tax benefits for solar energy systems.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>Easy Installation: Professionally designed for seamless
                        installation and integration with existing power systems.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>Low Maintenance: Our panels require minimal upkeep, offering a
                        hassle-free energy solution.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>
                        Warranty and Support: Backed by a comprehensive warranty and 24/7 customer support to ensure your
                        satisfaction.
                    </p>

                </div>
            </div>
            <div class=" mt-4">
                <h3>Benefits of Solar Energy
                </h3>
                <div class="highlights-year">

                    <p><i class='fas fa-bullseye mr-10'></i>Renewable Resource: Solar power is an infinite source of energy
                        from the sun, making it a sustainable choice.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>Energy Independence: Reduce reliance on traditional energy grids
                        and enjoy uninterrupted power supply.</p>
                    <p><i class='fas fa-bullseye mr-10'></i>Environmentally Friendly: Lower your carbon footprint and
                        contribute to global efforts against climate change.
                    </p>

                </div>
            </div>
        </div>

    </section>


    <section class="gps-contact-form">


        <div class="col-lg-9">
            <div class="contact-message-wrapper">
                <h4 class="contact-title contact-title-custom">Get Your Solar Now</h4>
                <div class="contact-message">
                    <form id="solar_form" action="" method="POST" class="contact-form-custom">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="name" id="name" placeholder="Full Name" type="text"
                                        onblur="validatecareerName()">
                                    <span class="text-danger" id="name-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="email" id="email" placeholder="Email Address" type="email"
                                        onblur="validatecareerEmail()">
                                    <span class="text-danger" id="email-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style mb-20">
                                    <input name="phoneno" id="phoneno" placeholder="Phone No" type="text"
                                        maxlength="10" onblur="validatecareerPhoneno()">
                                    <span class="text-danger" id="phoneno-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style mb-20">
                                    <input name="subject" id="subject" placeholder="Subject" type="text"
                                        onblur="validatecareerSubject()">
                                    <span class="text-danger" id="subject-error"></span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="city" id="city" placeholder="City" type="text"
                                        onblur="validatecareerCity()">
                                    <span class="text-danger" id="city-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="state" id="state" placeholder="State" type="text"
                                        onblur="validatecareerState()">
                                    <span class="text-danger" id="state-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style">
                                    <textarea name="message" id="message" placeholder="Message" onblur="validatecareerMessage()"></textarea>
                                    <span class="text-danger" id="message-error"></span>
                                    <button class="submit cr-btn btn-style" type="button" id="solarbutton"><span>SUBMIT
                                        </span></button>
                                </div>
                            </div>
                            <div id="consuccess"></div>
                        </div>
                    </form>
                    <!-- <p class="form-messege"></p> -->
                </div>
            </div>
        </div>

    </section>


















    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
        function validatecareerName() {
            var name = document.getElementById('name').value;
            if (name === '') {
                document.getElementById('name-error').innerText = 'Please enter your name';
                return false;
            } else {
                document.getElementById('name-error').innerText = '';
                return true;
            }
        }

        function validatecareerEmail() {
            var email = document.getElementById('email').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email === '') {
                document.getElementById('email-error').innerText = 'Please enter your email';
                return false;
            } else if (!emailRegex.test(email)) {
                document.getElementById('email-error').innerText = 'Please enter a valid email address';
                return false;
            } else {
                document.getElementById('email-error').innerText = '';
                return true;
            }
        }

        function validatecareerPhoneno() {
            var phoneno = document.getElementById('phoneno').value;
            var phoneRegex = /^[0-9]{10}$/;
            if (phoneno === '') {
                document.getElementById('phoneno-error').innerText = 'Please enter your phone no';

                return false;
            } else if (!phoneRegex.test(phoneno)) {
                document.getElementById('phoneno-error').innerText = 'Please enter a valid phone no';

                return false;
            } else {
                document.getElementById('phoneno-error').innerText = '';
                return true;
            }
        }

        function validatecareerSubject() {
            var subject = document.getElementById('subject').value;
            // console.log("Selected Dealership: ", subject); // Check if the value is being logged correctly
            if (subject === '') {
                document.getElementById('subject-error').innerText = 'Please enter the subject';
                return false;
            } else {
                document.getElementById('subject-error').innerText = '';
                return true;
            }
        }

        function validatecareerCity() {
            var city = document.getElementById('city').value;
            if (city === '') {
                document.getElementById('city-error').innerText = 'Please enter your city';
                return false;
            } else {
                document.getElementById('city-error').innerText = '';
                return true;
            }
        }

        function validatecareerState() {
            var state = document.getElementById('state').value;
            if (state === '') {
                document.getElementById('state-error').innerText = 'Please enter your state';
                return false;
            } else {
                document.getElementById('state-error').innerText = '';
                return true;
            }
        }


        function validatecareerMessage() {
            var message = document.getElementById('message').value;
            if (message === '') {
                document.getElementById('message-error').innerText = 'Please enter your message';
                return false;
            } else {
                document.getElementById('message-error').innerText = '';
                return true;
            }
        }

        function validatecontactFields() {
            var isValid = true; // Assume all fields are valid initially

            // Validate Name
            if (!validatecareerName()) {
                isValid = false;
            }

            if (!validatecareerEmail()) {
                isValid = false;
            }

            // Validate Phone Number
            if (!validatecareerPhoneno()) {
                isValid = false;
            }


            if (!validatecareerSubject()) {
                isValid = false;
            }


            if (!validatecareerCity()) {
                isValid = false;
            }

            // Validate Message
            if (!validatecareerState()) {
                isValid = false;
            }

            if (!validatecareerMessage()) {
                isValid = false;
            }

            // Return overall validation result
            return isValid;
        }



        $('#solarbutton').on('click', function() {

            if (validatecontactFields()) {
                //   $("#contactbutton").prop("disabled", true);
                //       $("#contactbutton").val("Please wait..");
                $("#solarbutton").prop("disabled", true);
                $("#solarbutton").text("Please wait..");
                var formData = new FormData($('#solar_form')[0]);

                $.ajax({
                    url: '/send-solar',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    // data:$("#career_form").serialize(),
                    success: function(response) {
                        console.log(response);
                        $("#solar_form")[0].reset();
                        $('#consuccess').html(
                            '<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.' +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);

                        $("#solarbutton").prop("disabled", false);
                        $("#solarbutton").text("Send Message");
                    },
                    error: function(response) {
                        $('#consuccess').html(
                            '<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Sorry</strong> something went wrong while submitting the form.' +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);
                        console.log(response);

                        $("#solarbutton").prop("disabled", false);
                        $("#solarbutton").text("Send Message");
                    }


                })
            } else {
                $('#consuccess').html(
                    '<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">' +
                    '<strong>Please,</strong> fill the form properly.' +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>');
                setTimeout(function() {
                    $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                }, 5000);
            }
        })
    </script>
@endsection
