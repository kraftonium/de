@extends('partials.mainindex')

@push('title')
    <title>Affair EV Scooter | EV Scooters | Divyashakti Enterprise | Drive The Future</title>
@endpush

@push('meta')
    <meta name="description"
        content="Buy Affair EV Scooter in Gujarat at ₹47,999. 60km range, lithium battery, fast charging, anti-theft system & smart features. Book test ride today.">
    <meta name="keywords"
        content="affair ev scooter price, electric scooter under 50000, ev scooter gujarat, lithium battery scooter india, buy ev scooter gandhinagar">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.thedivyashakti.com/ev-scooters/affair">

    <meta property="og:type" content="product">
    <meta property="og:title" content="Affair EV Scooter | EV Scooters | Divyashakti Enterprise | Drive The Future">
    <meta property="og:description" content="Affordable EV scooter with 60km range, lithium battery and smart features.">
    <meta property="og:url" content="https://www.thedivyashakti.com/ev-scooters/affair">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/vehicles/7.png">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Affair EV Scooter Price in Gujarat">
    <meta name="twitter:description" content="Explore affordable EV scooter with smart features and long battery range.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/vehicles/7.png">
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Product",
"name": "Affair Lite EV Scooter",
"image": [
"https://www.thedivyashakti.com/assets/images/vehicles/7.png",
"https://www.thedivyashakti.com/assets/images/vehicles/4.png",
"https://www.thedivyashakti.com/assets/images/vehicles/1.png"
],
"description": "Affair EV Scooter with 60km range, lithium battery, fast charging, anti-theft alarm, reverse gear and smart features.",
"brand": {
  "@type": "Brand",
  "name": "Divyashakti Enterprise"
},
"offers": {
  "@type": "Offer",
  "url": "https://www.thedivyashakti.com/ev-scooters/affair",
  "priceCurrency": "INR",
  "price": "47999",
  "availability": "https://schema.org/InStock"
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "AggregateRating",
"itemReviewed": {
  "@type": "Product",
  "name": "Affair EV Scooter"
},
"ratingValue": "4.8",
"reviewCount": "1200"
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "AutoDealer",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com",
"telephone": "+919737561301",
"address": {
  "@type": "PostalAddress",
  "addressLocality": "Gandhinagar",
  "addressRegion": "Gujarat",
  "addressCountry": "IN"
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Event",
"name": "Affair EV Scooter Test Ride",
"description": "Book a test ride for Affair Lite EV Scooter at Divyashakti Enterprise in Gandhinagar.",
"location": {
  "@type": "Place",
  "name": "Divyashakti Enterprise",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Gandhinagar",
    "addressRegion": "Gujarat",
    "addressCountry": "IN"
  }
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
  "@type": "Question",
  "name": "What is the price of Affair EV Scooter?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "The starting price of Affair EV Scooter is ₹47,999."
  }
},
{
  "@type": "Question",
  "name": "What is the range of Affair EV Scooter?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "The scooter offers a range of up to 60 km per charge."
  }
},
{
  "@type": "Question",
  "name": "How long does charging take?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Charging takes around 2-3 hours."
  }
}
]
}
</script>
@endpush

@section('main-section')
    <!-- breadcrumb starts here -->

    <section class="page-banner">

        <div class="banner-bg"></div>

        <div class="banner-content fade-up">

            <h1>Affair EV Scooter</h1>

            <p>
                Explore our EV Scooters range of high-performance electric scooters
                designed
                for smart, eco-friendly mobility.
            </p>

            <div class="breadcrumb">

                <a href="{{ url('/') }}">Home</a>

                <span>›</span>

                <a href="{{ url('/ev-scooters') }}">Scooters</a>

                <span>›</span>

                <span class="active">Affair EV Scooter</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb ends here -->

    <!-- scooters section starts here -->

    <section class="scooter-details">

        <div class="details-container">

            <!-- LEFT IMAGE -->

            {{-- <div class="details-image fade-left">

                <img src="assets/images/vehicles/1.png" alt="Breeze Scooter">

            </div> --}}

            <style>
                /* MAIN IMAGE */

                .main-image img {
                    width: 100%;
                    border-radius: 12px;
                }

                /* THUMBNAILS */

                .thumbnail-carousel {
                    display: none;
                    gap: 10px;
                    margin-top: 15px;
                    justify-content: center;
                }

                .thumbnail-carousel.active {
                    display: flex;
                }

                .thumbnail-carousel img {
                    width: 70px;
                    height: 70px;
                    object-fit: cover;
                    border-radius: 8px;
                    cursor: pointer;
                }

                /* COLORS */

                .color-options {
                    display: flex;
                    justify-content: center;
                    gap: 12px;
                    margin-top: 20px;
                }

                .color {
                    width: 25px;
                    height: 25px;
                    border-radius: 50%;
                    cursor: pointer;
                    /* border: 2px solid transparent; */
                    border: 2px solid whitesmoke;
                }

                .color.active {
                    border: 2px solid #2b8cff;
                }
            </style>

            <div class="details-image fade-left">

                <!-- MAIN IMAGE -->
                <div class="main-image">
                    <img id="mainImage" src="assets/images/vehicles/New-Vehicles/Affair-White-Front.png"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                </div>

                <!-- WHITE CAROUSEL -->
                <div class="thumbnail-carousel color-set active" id="white-set">
                    <img src="assets/images/vehicles/New-Vehicles/Affair-White-Front.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                    <img src="assets/images/vehicles/New-Vehicles/Affair-White-Left.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                    <img src="assets/images/vehicles/New-Vehicles/Affair-White-Right.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                    <img src="assets/images/vehicles/New-Vehicles/Affair-White-Back.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                </div>

                <!-- RED CAROUSEL -->
                <div class="thumbnail-carousel color-set" id="red-set">
                    <img src="assets/images/vehicles/4.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                    <img src="assets/images/vehicles/5.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                    <img src="assets/images/vehicles/6.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                </div>

                <!-- BLACK CAROUSEL -->
                <div class="thumbnail-carousel color-set" id="black-set">
                    <img src="assets/images/vehicles/7.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                    <img src="assets/images/vehicles/8.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                    <img src="assets/images/vehicles/9.png" onclick="changeImage(this)"
                        alt="Affair EV Scooter | Divyashakti Enterprise">
                </div>

                <!-- COLOR OPTIONS -->
                <div class="color-options">

                    <span class="color active" style="background:#fff" onclick="switchColor('white', this)"></span>
                    {{-- 
                    <span class="color" style="background:red" onclick="switchColor('red', this)"></span>

                    <span class="color" style="background:black" onclick="switchColor('black', this)"></span> --}}

                </div>

            </div>


            <script>
                // CHANGE MAIN IMAGE

                function changeImage(el) {
                    document.getElementById("mainImage").src = el.src;
                }

                // SWITCH COLOR (SHOW HIDE DIV)

                function switchColor(color, el) {

                    // remove active from all color buttons
                    document.querySelectorAll(".color").forEach(c => c.classList.remove("active"));
                    el.classList.add("active");

                    // hide all carousels
                    document.querySelectorAll(".color-set").forEach(set => {
                        set.classList.remove("active");
                    });

                    // show selected one
                    document.getElementById(color + "-set").classList.add("active");

                    // change main image to first image of that color
                    let firstImg = document.querySelector("#" + color + "-set img");
                    if (firstImg) {
                        document.getElementById("mainImage").src = firstImg.src;
                    }
                }
            </script>


            <!-- RIGHT CONTENT -->

            <div class="details-content fade-right">

                <h1> Affair Lite EV Scooter</h1>

                <p class="price">Starting ₹47,999*</p>

                <p class="desc">
                    Experience smooth, eco-friendly rides with advanced
                    electric mobility.
                    Perfect for daily commuting with low running cost and
                    high performance.
                </p>

                <!-- SPECS -->

                <div class="specs">

                    <div class="spec">
                        <span>⚡ Top Speed</span>
                        <h4>25 km/h</h4>
                    </div>

                    <div class="spec">
                        <span>🔋 Battery</span>
                        <h4>Leadgel Battery</h4>
                    </div>

                    <div class="spec">
                        <span>⏱ Charging</span>
                        <h4>6-7 Hours</h4>
                    </div>

                    <div class="spec">
                        <span>📍 Range</span>
                        <h4>60 km</h4>
                    </div>

                    <!-- NEW FEATURES -->

                    <div class="spec">
                        <span>🛑 Front Disc Brake</span>
                        <h4>Advanced Braking</h4>
                    </div>

                    <div class="spec">
                        <span>↩ Reverse Gear</span>
                        <h4>Easy Parking</h4>
                    </div>

                    <div class="spec">
                        <span>🚀 Cruise Control</span>
                        <h4>Smooth Ride</h4>
                    </div>

                    <div class="spec">
                        <span>🔐 Anti-Theft Alarm</span>
                        <h4>Key Remote System</h4>
                    </div>

                    <div class="spec">
                        <span>🛞 Tyres</span>
                        <h4>10" Tubeless</h4>
                    </div>

                </div>

                <!-- BUTTONS -->

                <div class="details-buttons">

                    <a href="#book_ride_form" class="btn-primary">Book Test Ride</a>

                    <a href="https://wa.me/919737561301" class="btn-secondary">
                        WhatsApp Inquiry
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- scooters section ends here -->

    <!-- book a ride section starts here -->

    <section class="ev-book-ride">

        <div class="ride-container">

            <h2 class="ride-title">Book Your Test Ride</h2>

            <p class="ride-subtitle">
                Experience the future of electric mobility with Divyashakti
            </p>

            <form id="book_ride_form" class="ride-form" method="POST" action="">
                @csrf

                <div class="ride-grid">

                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder=" "
                            onblur="validatecareerName()">
                        <label>Full Name</label>
                        <span class="text-danger" id="name-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder=" "
                            onblur="validatecareerEmail()">
                        <label>Email Address</label>
                        <span class="text-danger" id="email-error"></span>
                    </div>

                    <div class="form-group full">
                        <input type="text" id="phone" name="phone" placeholder=" "
                            onblur="validatecareerPhone()">
                        <label>Phone Number</label>
                        <span class="text-danger" id="phone-error"></span>
                    </div>

                    <div class="form-group full">
                        <select id="vehicle" name="vehicle" onblur="validatecareerVehicle()">
                            <option value>Select Vehicle</option>
                            <option>Victory</option>
                            <option>Classic</option>
                            <option>Breeze</option>
                            <option>Eternal</option>
                            <option>Divine 24</option>
                            <option>Affair</option>
                            <option>Affair Lite</option>
                            <option>Liberty</option>
                            <option>Passenger Auto</option>
                            <option>Loader Close Auto</option>
                            <option>Loader Open Auto</option>
                        </select>
                        <span class="text-danger" id="vehicle-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="date" id="ride_date" name="ride_date" onblur="validatecareerRidedate()">
                        <label class="active">Ride Date</label>
                        <span class="text-danger" id="ride_date-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="time" id="ride_time" name="ride_time" onblur="validatecareerRidetime()">
                        <label class="active">Ride Time</label>
                        <span class="text-danger" id="ride_time-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" id="city" name="city" placeholder=" "
                            onblur="validatecareerCity()">
                        <label>City</label>
                        <span class="text-danger" id="city-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" id="state" name="state" placeholder=" "
                            onblur="validatecareerState()">
                        <label>State</label>
                        <span class="text-danger" id="state-error"></span>
                    </div>

                    <div class="form-group full">
                        <input type="text" id="pincode" name="pincode" placeholder=" "
                            onblur="validatecareerPincode()">
                        <label>Pincode</label>
                        <span class="text-danger" id="pincode-error"></span>
                    </div>

                    <div class="form-group full">
                        <textarea id="address" name="address" placeholder=" " onblur="validatecareerAddress()"></textarea>
                        <label>Address</label>
                        <span class="text-danger" id="address-error"></span>
                    </div>

                </div>

                <button type="button" id="ridebutton" class="ride-btn">
                    Book Test Ride →
                </button>

            </form>
            <div id="consuccess"></div>
        </div>

    </section>

    <!-- book a ride section ends here -->



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
            var phoneno = document.getElementById('phone').value;
            var phoneRegex = /^[0-9]{10}$/;
            if (phoneno === '') {
                document.getElementById('phone-error').innerText = 'Please enter your phone no';

                return false;
            } else if (!phoneRegex.test(phoneno)) {
                document.getElementById('phone-error').innerText = 'Please enter a valid phone no';

                return false;
            } else {
                document.getElementById('phone-error').innerText = '';
                return true;
            }
        }

        function validatecareerVehicle() {
            var vehicle = document.getElementById('vehicle').value;
            console.log("Selected vehicle: ", vehicle); // Check if the value is being logged correctly
            if (vehicle === '') {
                document.getElementById('vehicle-error').innerText = 'Please select the vehicle type';
                return false;
            } else {
                document.getElementById('vehicle-error').innerText = '';
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


        function validatecareerRidedate() {
            var ride_date = document.getElementById('ride_date').value;
            if (ride_date === '') {
                document.getElementById('ride_date-error').innerText = 'Please enter your ride date';
                return false;
            } else {
                document.getElementById('ride_date-error').innerText = '';
                return true;
            }
        }


        function validatecareerRidetime() {
            var ride_time = document.getElementById('ride_time').value;
            if (ride_time === '') {
                document.getElementById('ride_time-error').innerText = 'Please enter your ride time';
                return false;
            } else {
                document.getElementById('ride_time-error').innerText = '';
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


            if (!validatecareerVehicle()) {
                isValid = false;
            }


            if (!validatecareerRidedate()) {
                isValid = false;
            }


            if (!validatecareerRidetime()) {
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



        $('#ridebutton').on('click', function() {

            if (validatecontactFields()) {
                $("#ridebutton").prop("disabled", true);
                $("#ridebutton").text("Please wait..");
                var formData = new FormData($('#book_ride_form')[0]);

                $.ajax({
                    url: '/send-bookride',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    // data:$("#career_form").serialize(),
                    success: function(response) {
                        console.log(response);
                        $("#book_ride_form")[0].reset();
                        $('#consuccess').html(
                            '<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.' +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);

                        $("#ridebutton").prop("disabled", false);
                        $("#ridebutton").text("Send Message");
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

                        $("#ridebutton").prop("disabled", false);
                        $("#ridebutton").text("Send Message");
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
