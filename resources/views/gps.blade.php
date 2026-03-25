@extends('partials.mainindex')

@push('title')
    <title>GPS | Divyashakti Enterprise | Drive The Future</title>
@endpush

@section('main-section')
    <!-- breadcrumb starts here -->

    <section class="page-banner">

        <div class="banner-bg"></div>

        <div class="banner-content fade-up">

            <h1>GPS Tracking Solutions</h1>

            <p>
                Advanced vehicle tracking systems designed for security,
                efficiency, and real-time monitoring across Gujarat.
            </p>

            <div class="breadcrumb">

                <a href="index.html">Home</a>

                <span>›</span>

                <span class="active">GPS Tracking</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb starts here -->

    <!-- about gps section starts here -->

    <section class="gps-about">

        <div class="container fade-up">

            <h2>About GPS Tracking Solutions</h2>

            <p>
                DivyaShakti Enterprise provides advanced GPS tracking
                solutions and vehicle monitoring systems designed to improve
                security, efficiency, and operational control.
            </p>

            <p>
                With years of experience, we offer reliable GPS devices at
                affordable prices. Our solutions are widely used across
                Gujarat for vehicle tracking, fleet management, and security
                monitoring.
            </p>

        </div>

    </section>

    <!-- about gps section ends here -->

    <!-- how gps works section starts here -->

    <section class="gps-how">

        <div class="container">

            <div class="how-text fade-up">

                <h2>How GPS Tracking Works</h2>

                <p>
                    A GPS tracker installed in a vehicle connects with
                    satellites to provide real-time location data. You can
                    monitor your vehicle anytime through a secure platform.
                </p>

            </div>

            <div class="how-features">

                <div class="feature fade-up delay-1">📍 Real-time
                    Tracking</div>
                <div class="feature fade-up delay-2">📊 30 Days Backup</div>
                <div class="feature fade-up delay-3">⛽ Fuel Monitoring</div>
                <div class="feature fade-up delay-4">🗺 Movement
                    History</div>
                <div class="feature fade-up delay-1">⚡ High
                    Performance</div>

            </div>

        </div>

    </section>

    <!-- how gps works section ends here -->

    <!-- vision & mission section starts here -->

    <section class="vision-mission">

        <div class="vm-container">

            <div class="vm-box fade-up">

                <h3>Our Vision</h3>

                <p>
                    We aim to increase awareness about GPS tracking, home
                    automation, and security technologies to make operations
                    safer and smarter.
                </p>

            </div>

            <div class="vm-box fade-up delay-2">

                <h3>Our Mission</h3>

                <p>
                    We promote automation and smart technology that
                    simplifies daily life and improves productivity across
                    industries like agriculture and transport.
                </p>

            </div>

        </div>

    </section>

    <!-- vision & mission section ends here -->

    <!-- key highlights section starts here -->

    <section class="gps-highlights">

        <div class="container">

            <h2 class="fade-up">Key Highlights</h2>

            <div class="highlight-grid">

                <div class="highlight-card fade-up delay-1">
                    <h3>8000+</h3>
                    <p>GPS Devices Installed</p>
                </div>

                <div class="highlight-card fade-up delay-2">
                    <h3>13000+</h3>
                    <p>Technology Devices Sold</p>
                </div>

                <div class="highlight-card fade-up delay-3">
                    <h3>70%</h3>
                    <p>Transport Companies Covered</p>
                </div>

                <div class="highlight-card fade-up delay-4">
                    <h3>ONGC</h3>
                    <p>Major Client Deployment</p>
                </div>

            </div>

        </div>

    </section>

    <!-- key highlights section ends here -->

    <!-- gujarat coverage section starts here -->

    <section class="gps-coverage">

        <div class="container fade-up">

            <h2>GPS Solutions Across Gujarat</h2>

            <p>
                We provide GPS tracking devices across Ahmedabad,
                Gandhinagar, and all regions of Gujarat. Our focus is to
                deliver smart tracking technology that improves safety,
                transparency, and efficiency.
            </p>

        </div>

    </section>

    <!-- gujarat coverage section ends here -->

    <!-- gps from starts here -->

    {{-- <section class="gps-form-section">

        <div class="gps-form-wrapper">

            <h2>Get GPS Tracking Solution</h2>

            <p>Fill the form and our team will contact you for GPS tracking
                setup.</p>

            <form id="gps_form">

                <div class="form-row">

                    <div class="form-group">
                        <input type="text" id="name" placeholder="Full Name">
                        <span id="name-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email Address">
                        <span id="email-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <input type="text" id="phoneno" placeholder="Phone Number">
                        <span id="phoneno-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <input type="text" id="subject" placeholder="Subject">
                        <span id="subject-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group">
                        <input type="text" id="city" placeholder="City">
                        <span id="city-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" id="state" placeholder="State">
                        <span id="state-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <textarea id="message" placeholder="Your Message"></textarea>
                        <span id="message-error"></span>
                    </div>

                </div>

                <button type="button" id="gpsbutton" class="submit-btn">
                    Send Inquiry →
                </button>

                <div id="consuccess"></div>

            </form>

        </div>

    </section> --}}



    <section class="solar-form-section">

        <div class="solar-form-wrapper">

            <h2>Get GPS Tracking Solution</h2>

            <p>Fill the form and our team will contact you for GPS tracking
                setup.</p>

            <form id="solar_form" method="POST" action="">
                @csrf

                <div class="form-row">

                    <div class="form-group">
                        <input name="name" id="name" placeholder="Full Name" type="text"
                            onblur="validatecareerName()">
                        <span id="name-error"></span>
                    </div>

                    <div class="form-group">
                        <input name="email" id="email" placeholder="Email Address" type="email"
                            onblur="validatecareerEmail()">
                        <span id="email-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <input name="phoneno" id="phoneno" placeholder="Phone Number" type="text" maxlength="10"
                            onblur="validatecareerPhoneno()">
                        <span id="phoneno-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <input name="subject" id="subject" placeholder="Subject" type="text"
                            onblur="validatecareerSubject()">
                        <span id="subject-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group">
                        <input name="city" id="city" placeholder="City" type="text"
                            onblur="validatecareerCity()">
                        <span id="city-error"></span>
                    </div>

                    <div class="form-group">
                        <input name="state" id="state" placeholder="State" type="text"
                            onblur="validatecareerState()">
                        <span id="state-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <textarea name="message" id="message" placeholder="Your Requirement / Message" onblur="validatecareerMessage()"></textarea>
                        <span id="message-error"></span>
                    </div>

                </div>

                <button type="button" id="solarbutton" class="solar-submit-btn">
                    Request Solar Quote →
                </button>

                <div id="consuccess"></div>

            </form>

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


    <!-- gps from ends here -->
@endsection
