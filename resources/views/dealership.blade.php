@extends('partials.mainindex')

@push('title')
    <title>Dealership | Divyashakti Enterprise | Drive The Future</title>
@endpush

@section('main-section')
    <!-- breadcrumb starts here -->

    <section class="page-banner">

        <div class="banner-bg"></div>

        <div class="banner-content fade-up">

            <h1>Dealership Opportunity</h1>

            <p>
                Partner with Divyashakti Enterprise and start your journey
                in the
                fast-growing electric vehicle industry across Gujarat.
            </p>

            <div class="breadcrumb">

                <a href="index.html">Home</a>

                <span>›</span>

                <span class="active">Dealership</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb starts here -->

    <!-- dealership para starts here -->

    <section class="dealership-section">

        <div class="dealership-container">

            <div class="dealership-content fade-up">

                <h2>
                    Become a <span>Divyashakti Dealer</span>
                </h2>

                <p>
                    Partner with Divyashakti Enterprise and start your
                    journey in the fast-growing
                    electric vehicle industry. We offer exciting EV scooter
                    dealership opportunities
                    for individuals and businesses looking to grow in this
                    evolving market.
                    Join us and be a part of the future of electric mobility
                    across Gujarat.
                </p>

                <div class="dealership-buttons">

                    <a href="#dealership-form-section" class="deal-btn-primary">Apply for
                        Dealership</a>

                    <a href="tel:+919737561301" class="deal-btn-secondary">
                        Call Now
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- dealership para ends here -->

    <!-- dealership form starts here -->

    <section class="dealership-form-section" id="dealership-form-section">

        <div class="form-wrapper">

            <h2>Apply for Dealership</h2>

            <p>Join Divyashakti Enterprise and grow your EV business.</p>

            <form id="dealership_form" method="POST" action="">
                @csrf

                <div class="form-row">

                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Full Name"
                            onblur="validatecareerName()">
                        <span class="text-danger" id="name-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email Address"
                            onblur="validatecareerEmail()">
                        <span class="text-danger" id="email-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group">
                        <input type="text" id="phoneno" name="phoneno" placeholder="Phone Number"
                            onblur="validatecareerPhone()">
                        <span class="text-danger" id="phoneno-error"></span>
                    </div>

                    <div class="form-group">
                        <select id="dealership" name="dealership" onblur="validatecareerDealership()">
                            <option value>Select Dealership Type</option>
                            <option>Area Dealership</option>
                            <option>Taluka Dealership</option>
                            <option>Jilla Dealership</option>
                            <option>Zone Dealership</option>
                            <option>State Dealership</option>
                        </select>
                        <span class="text-danger" id="dealership-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group">
                        <input type="text" id="city" name="city" placeholder="City"
                            onblur="validatecareerCity()">
                        <span class="text-danger" id="city-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" id="state" name="state" placeholder="State"
                            onblur="validatecareerState()">
                        <span class="text-danger" id="state-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <input type="text" id="pincode" name="pincode" placeholder="Pincode"
                            onblur="validatecareerPincode()">
                        <span class="text-danger" id="pincode-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <textarea id="address" name="address" placeholder="Full Address" onblur="validatecareerAddress()"></textarea>
                        <span class="text-danger" id="address-error"></span>
                    </div>

                </div>

                <button type="button" id="dealershipbutton" class="submit-btn">
                    Apply Now →
                </button>

                <div id="consuccess"></div>
            </form>


        </div>

    </section>

    <!-- dealership form ends here -->

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

        function validatecareerDealership() {
            var dealership = document.getElementById('dealership').value;
            console.log("Selected Dealership: ", dealership); // Check if the value is being logged correctly
            if (dealership === '') {
                document.getElementById('dealership-error').innerText = 'Please select the dealership type';
                return false;
            } else {
                document.getElementById('dealership-error').innerText = '';
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


        function validatecareerPincode() {
            var pincode = document.getElementById('pincode').value;
            if (pincode === '') {
                document.getElementById('pincode-error').innerText = 'Please enter your pincode';
                return false;
            } else {
                document.getElementById('pincode-error').innerText = '';
                return true;
            }
        }


        function validatecareerAddress() {
            var address = document.getElementById('address').value;
            if (address === '') {
                document.getElementById('address-error').innerText = 'Please enter your address';
                return false;
            } else {
                document.getElementById('address-error').innerText = '';
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


            if (!validatecareerDealership()) {
                isValid = false;
            }


            if (!validatecareerCity()) {
                isValid = false;
            }

            // Validate Message
            if (!validatecareerState()) {
                isValid = false;
            }

            if (!validatecareerPincode()) {
                isValid = false;
            }

            if (!validatecareerAddress()) {
                isValid = false;
            }

            // Return overall validation result
            return isValid;
        }



        $('#dealershipbutton').on('click', function() {

            if (validatecontactFields()) {
                //   $("#contactbutton").prop("disabled", true);
                //       $("#contactbutton").val("Please wait..");
                $("#dealershipbutton").prop("disabled", true);
                $("#dealershipbutton").text("Please wait..");
                var formData = new FormData($('#dealership_form')[0]);

                $.ajax({
                    url: '/send-dealership',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    // data:$("#career_form").serialize(),
                    success: function(response) {
                        console.log(response);
                        $("#dealership_form")[0].reset();
                        $('#consuccess').html(
                            '<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.' +
                            // '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);

                        $("#dealershipbutton").prop("disabled", false);
                        $("#dealershipbutton").text("Send Message");
                    },
                    error: function(response) {
                        $('#consuccess').html(
                            '<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Sorry</strong> something went wrong while submitting the form.' +
                            // '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);
                        console.log(response);

                        $("#dealershipbutton").prop("disabled", false);
                        $("#dealershipbutton").text("Send Message");
                    }


                })
            } else {
                $('#consuccess').html(
                    '<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">' +
                    '<strong>Please,</strong> fill the form properly.' +
                    // '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>');
                setTimeout(function() {
                    $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                }, 5000);
            }
        })
    </script>
@endsection
