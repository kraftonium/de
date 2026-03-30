@extends('partials.mainindex')

@push('title')
    <title>EV Scooters | Divyashakti Enterprise | Drive The Future</title>
@endpush

@push('meta')
    <meta name="description"
        content="Explore the best electric scooters in Gandhinagar at Divyashakti Enterprise. Affordable EV scooters with long range, fast charging, and low running cost across Gujarat.">
    <meta name="keywords"
        content="electric scooters gandhinagar, ev scooters gujarat, buy electric scooter india, best ev scooter gandhinagar, affordable electric scooter, lithium battery scooter">
    <meta name="author" content="Divyashakti Enterprise">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.thedivyashakti.com/ev-scooters">

    <meta property="og:type" content="product.group">
    <meta property="og:title" content="Electric Scooters in Gandhinagar | Divyashakti Enterprise">
    <meta property="og:description"
        content="Explore affordable electric scooters with long range, lithium battery and smart features.">
    <meta property="og:url" content="https://www.thedivyashakti.com/ev-scooters">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/vehicles/victory.png">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Electric Scooters in Gandhinagar">
    <meta name="twitter:description"
        content="Buy electric scooters with low running cost and high performance across Gujarat.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/vehicles/victory.png">
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "AutoDealer",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com/ev-scooters",
"logo": "https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png",
"description": "Electric scooter dealer in Gandhinagar offering affordable EV scooters with lithium battery and long range.",
"telephone": "+919737561301",
"address": {
  "@type": "PostalAddress",
  "addressLocality": "Gandhinagar",
  "addressRegion": "Gujarat",
  "postalCode": "382421",
  "addressCountry": "IN"
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "ItemList",
"name": "Electric Scooters",
"itemListElement": [
{
  "@type": "Product",
  "name": "Victory EV Scooter",
  "image": "https://www.thedivyashakti.com/assets/images/vehicles/victory.png",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "INR",
    "price": "65000",
    "availability": "https://schema.org/InStock"
  }
},
{
  "@type": "Product",
  "name": "Breeze EV Scooter",
  "image": "https://www.thedivyashakti.com/assets/images/vehicles/3.png",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "INR",
    "price": "39999",
    "availability": "https://schema.org/InStock"
  }
},
{
  "@type": "Product",
  "name": "Classic EV Scooter",
  "image": "https://www.thedivyashakti.com/assets/images/vehicles/classic.png",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "INR",
    "price": "60000",
    "availability": "https://schema.org/InStock"
  }
}
]
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
  "@type": "Question",
  "name": "What is the price of electric scooters in Gandhinagar?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Electric scooters start from ₹39,999 at Divyashakti Enterprise."
  }
},
{
  "@type": "Question",
  "name": "What is the range of EV scooters?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Our EV scooters offer a range of 80–120 km on a single charge."
  }
},
{
  "@type": "Question",
  "name": "How long does charging take?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Charging takes around 2–4 hours depending on battery type."
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

            <h1>EV Scooters</h1>

            <p>
                Explore our EV Scooters range of high-performance electric scooters
                designed
                for smart, eco-friendly mobility.
            </p>

            <div class="breadcrumb">

                <a href="index.html">Home</a>

                <span>›</span>

                <span class="active">EV Scooters</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb starts here -->

    <!-- hero section starts here -->

    <section class="product-hero">

        <div class="hero-content fade-up">

            <h1>
                Electric Scooters for <br>
                <span>Smart Urban Mobility</span>
            </h1>

            <p>
                Explore the latest range of electric scooters at Divyashakti
                Enterprise in Gandhinagar.
                Designed for daily comfort, low running cost, and
                eco-friendly performance.
            </p>

            <a href="#models" class="hero-btn">Explore Models →</a>

        </div>

    </section>

    <!-- hero section ends here -->

    <!-- scooters section starts here -->

    <section class="scooter-page-section">

        <div class="section-header fade-up">

            <h2>Our EV Scooters</h2>

            <p>
                Explore high-performance electric scooters designed for
                smart,
                eco-friendly and cost-effective mobility.
            </p>

        </div>

        <div class="scooter-grid">

            <!-- Scooter 1 -->
            {{-- <div class="scooter-card fade-up delay-1">

                <img src="assets/images/vehicles/victory.png" alt="Victory">

                <h3>Victory</h3>

                <p class="price">Starting ₹65,000*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 Lithium Battery</span>
                    <span>🛑 Disc Brake</span>
                </div>

                <a href="#" class="scooter-btn">View Details</a>

            </div> --}}

            <!-- Scooter 2 -->
            {{-- <div class="scooter-card fade-up delay-2">

                <img src="assets/images/vehicles/3.png" alt="Breeze EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Breeze</h3>

                <p class="price">Starting ₹39,999*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 Portable Battery</span>
                    <span>💡 LED Lights</span>
                </div>

                <a href="{{ url('/breeze-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div> --}}

            <!-- Scooter 3 -->
            {{-- <div class="scooter-card fade-up delay-3">

                <img src="assets/images/vehicles/classic.png"
                    alt="Classic EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Classic</h3>

                <p class="price">Starting ₹60,000*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 Long Range</span>
                    <span>🛑 Disc Brake</span>
                </div>

                <a href="{{ url('/classic-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div> --}}

            <!-- Scooter 4 -->
            {{-- <div class="scooter-card fade-up delay-4">

                <img src="assets/images/vehicles/eternal.png"
                    alt="Eternal EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Eternal</h3>

                <p class="price">Starting ₹68,000*</p>

                <div class="scooter-features">
                    <span>⚡ 50 km/h</span>
                    <span>🔋 High Capacity</span>
                    <span>🔐 Anti Theft</span>
                </div>

                <a href="{{ url('/eternal-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div> --}}

        </div>

        <div class="scooter-grid" style="margin-top:3rem;">

            <!-- Scooter 1 -->
            <div class="scooter-card fade-up delay-1">

                <img src="assets/images/vehicles/New-Vehicles/Divine-24-Blue-Front.png"
                    alt="Divine 24 EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Divine 24</h3>

                <p class="price">Starting ₹44,999*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 Leadgel Battery</span>
                    <span>🛑 Disc Brake</span>
                </div>

                <a href="{{ url('/divine-24-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <!-- Scooter 2 -->
            <div class="scooter-card fade-up delay-2">

                <img src="assets/images/vehicles/New-Vehicles/Affair-White-Front.png"
                    alt="Affair EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Affair</h3>

                <p class="price">Starting ₹43,999*</p>

                <div class="scooter-features">
                    <span>⚡ 40 km/h</span>
                    <span>🔋 Portable Battery</span>
                    <span>💡 LED Lights</span>
                </div>

                <a href="{{ url('/affair-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <!-- Scooter 3 -->
            <div class="scooter-card fade-up delay-3">

                <img src="assets/images/vehicles/New-Vehicles/Affair-Lite-Purple-Front.png"
                    alt="Affair Lite EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Affair Lite</h3>

                <p class="price">Starting ₹47,999*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 Long Range</span>
                    <span>🛑 Disc Brake</span>
                </div>

                <a href="{{ url('/affair-lite-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <!-- Scooter 4 -->
            <div class="scooter-card fade-up delay-4">

                <img src="assets/images/vehicles/New-Vehicles/Liberty-Black-Front.png"
                    alt="Liberty EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Liberty</h3>

                <p class="price">Starting ₹61,999*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 High Capacity</span>
                    <span>🔐 Anti Theft</span>
                </div>

                <a href="{{ url('/liberty-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <!-- Scooter 1 -->
            <div class="scooter-card fade-up delay-1">

                <img src="assets/images/vehicles/New-Vehicles/Liberty-Plus-Blue-Front.png"
                    alt="Liberty Plus EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Liberty Plus</h3>

                <p class="price">Starting ₹44,999*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 Leadgel Battery</span>
                    <span>🛑 Disc Brake</span>
                </div>

                <a href="{{ url('/liberty-plus-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <!-- Scooter 2 -->
            {{-- <div class="scooter-card fade-up delay-2">

                <img src="assets/images/vehicles/7.png" alt="Affair EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Selfi</h3>

                <p class="price">Starting ₹43,999*</p>

                <div class="scooter-features">
                    <span>⚡ 40 km/h</span>
                    <span>🔋 Portable Battery</span>
                    <span>💡 LED Lights</span>
                </div>

                <a href="{{ url('/selfi-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div> --}}

            <!-- Scooter 4 -->
            <div class="scooter-card fade-up delay-4">

                <img src="assets/images/vehicles/New-Vehicles/Loader-Front.png"
                    alt="Loader EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Loader</h3>

                <p class="price">Starting ₹68,500*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 High Capacity</span>
                    <span>🔐 Anti Theft</span>
                </div>

                <a href="{{ url('/loader-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <div class="scooter-card fade-up delay-2">

                <img src="assets/images/vehicles/New-Vehicles/Breeze-Red-Front.png"
                    alt="Breeze EV Scooter | Divyashakti Enterprise | Drive The Future">

                <h3>Breeze</h3>

                <p class="price">Starting ₹39,999*</p>

                <div class="scooter-features">
                    <span>⚡ 45 km/h</span>
                    <span>🔋 Portable Battery</span>
                    <span>💡 LED Lights</span>
                </div>

                <a href="{{ url('/breeze-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <div class="scooter-card fade-up delay-4">

                <img src="assets/images/vehicles/New-Vehicles/Passenger-Auto.png"
                    alt="Passenger Auto | Divyashakti Enterprise | Drive The Future">

                <h3>Passenger Auto</h3>

                <p class="price">Starting ₹2,38,500*</p>

                <div class="scooter-features">
                    <span>⚡ 25 km/h</span>
                    <span>🔋 High Capacity</span>
                    <span>🔐 Anti Theft</span>
                </div>

                <a href="{{ url('/passenger-auto') }}" class="scooter-btn">View Details</a>

            </div>

            <div class="scooter-card fade-up delay-2">

                <img src="assets/images/vehicles/New-Vehicles/Loader-Auto.png"
                    alt="Loader Auto | Divyashakti Enterprise | Drive The Future">

                <h3>Loader Auto</h3>

                <p class="price">Starting ₹2,42,500*</p>

                <div class="scooter-features">
                    <span>⚡ 25 km/h</span>
                    <span>🔋 Portable Battery</span>
                    <span>💡 LED Lights</span>
                </div>

                <a href="{{ url('/loader-auto') }}" class="scooter-btn">View Details</a>

            </div>

        </div>

    </section>

    <!-- scooters section ends here -->

    <!-- key features starts here -->

    <section class="ev-features">

        <h2 class="ev-section-title">Key Features</h2>

        <div class="ev-features-grid">

            <div class="ev-feature-card">
                <div class="icon">⚡</div>
                <h3>45 km/h Top Speed</h3>
                <p>Fast and smooth performance for daily city rides.</p>
            </div>

            <div class="ev-feature-card">
                <div class="icon">🔋</div>
                <h3>Lithium-ion Battery</h3>
                <p>Reliable battery with long life and efficiency.</p>
            </div>

            <div class="ev-feature-card">
                <div class="icon">🛑</div>
                <h3>Front Disc Brake</h3>
                <p>Better control and enhanced braking safety.</p>
            </div>

            <div class="ev-feature-card">
                <div class="icon">🔐</div>
                <h3>Anti Theft Alarm</h3>
                <p>Advanced security system for your vehicle safety.</p>
            </div>

            <div class="ev-feature-card">
                <div class="icon">📡</div>
                <h3>Remote Lock</h3>
                <p>Smart locking system with remote access.</p>
            </div>

            <div class="ev-feature-card">
                <div class="icon">↩</div>
                <h3>Reverse Gear</h3>
                <p>Easy parking and maneuvering in tight spaces.</p>
            </div>

        </div>

    </section>

    <!-- key features ends here -->

    <!-- battery & range starts here -->

    <section class="ev-battery">

        <div class="battery-container">

            <div class="battery-text">

                <h2>Battery & Range</h2>

                <p>
                    Advanced lithium-ion technology ensures long range,
                    fast charging, and reliable daily performance.
                </p>

                <ul>
                    <li>⚡ Range: 80–120 km</li>
                    <li>🔋 Fast Charging: 2–4 hrs</li>
                    <li>🔄 Long Battery Life</li>
                </ul>

            </div>

            <div class="battery-visual">
                <div class="battery-bar">
                    <div class="battery-fill"></div>
                </div>
                <p>80% Charge in 2 Hours</p>
            </div>

        </div>

    </section>

    <!-- battery & range ends here -->

    <!-- why choose us starts here -->

    <section class="ev-why">

        <h2 class="ev-section-title">Why Choose Our EV Scooters</h2>

        <div class="ev-why-grid">

            <div class="why-card">
                <div class="why-icon">💰</div>
                <h3>Save Fuel Cost</h3>
                <p>Ride at very low cost compared to petrol vehicles.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">🌱</div>
                <h3>Eco Friendly</h3>
                <p>Zero emission vehicles for a cleaner environment.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">⚙</div>
                <h3>Low Maintenance</h3>
                <p>Fewer moving parts means lower maintenance cost.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">🚀</div>
                <h3>Smooth Ride</h3>
                <p>Enjoy silent and vibration-free riding experience.</p>
            </div>

        </div>

    </section>

    <!-- why choose us ends here -->

    <!-- cta section starts here -->

    <section class="ev-ride-cta">

        <h2 class="ev-ride-title">Ready to Ride Electric?</h2>

        <p class="ev-ride-subtitle">
            Book your test ride today and experience the future.
        </p>

        <a href="#book_ride_form" class="ev-ride-btn">Book Test Ride →</a>

    </section>
    <!-- cta section ends here -->

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
