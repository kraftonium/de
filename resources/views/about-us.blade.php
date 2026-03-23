@extends('partials.mainindex')

@push('title')
    <title>About Us | Divyashakti Enterprise | Drive The Future</title>
@endpush

@section('main-section')
    <!-- about hero section starts here -->

    <section class="about-hero">

        <div class="about-container">

            <div class="about-text fade-up">

                <h2>About Divyashakti Enterprise</h2>

                <p>
                    Divyashakti Enterprise is a trusted EV vehicle showroom
                    in Gandhinagar,
                    offering electric scooters, EV autos, GPS tracking
                    systems, and solar solutions.
                </p>

                <p>
                    We help customers move towards smarter, eco-friendly and
                    cost-effective mobility.
                </p>

            </div>

            <div class="about-image fade-up">

                <img src="assets/images/about-us/about-hero.jpg" alt="Divyashakti Enterprise Showroom">

            </div>

        </div>

    </section>

    <!-- about hero section ends here -->

    <!-- our story section starts here -->

    <section class="ev-sales-stats">

        <div class="stats-grid">

            <div class="stat">
                <h3>5000+</h3>
                <p>EV Scooters Sold</p>
            </div>

            <div class="stat">
                <h3>5000+</h3>
                <p>Happy Customers</p>
            </div>

            <div class="stat">
                <h3>5+</h3>
                <p>EV Models Available</p>
            </div>

            <div class="stat">
                <h3>Gujarat</h3>
                <p>Wide Service Network</p>
            </div>

        </div>

    </section>

    <section class="dealership-stats">

        <div class="stats-grid">

            <div class="stat">
                <h3>20+</h3>
                <p>Active Dealers</p>
            </div>

            <div class="stat">
                <h3>Growing Fast</h3>
                <p>EV Market Demand</p>
            </div>

            <div class="stat">
                <h3>High ROI</h3>
                <p>Profitable Business</p>
            </div>

            <div class="stat">
                <h3>Full Support</h3>
                <p>Training & Guidance</p>
            </div>

        </div>

    </section>

    <section class="about-story">

        <h2 class="center">Our Journey</h2>

        <div class="timeline">

            <div class="timeline-item fade-up">
                <h3>Founded</h3>
                <p>Started with a vision to promote electric mobility.</p>
            </div>

            <div class="timeline-item fade-up delay-1">
                <h3>Expansion</h3>
                <p>Added GPS tracking and solar solutions.</p>
            </div>

            <div class="timeline-item fade-up delay-2">
                <h3>Today</h3>
                <p>Serving customers across Gujarat with smart
                    technology.</p>
            </div>

        </div>

    </section>

    <!-- our story section ends here -->

    <!-- what we offer section starts here -->

    <section class="about-services">

        <h2 class="center">What We Offer</h2>

        <div class="services-grid">

            <div class="service-card fade-up">
                <img src="assets/images/vehicles/victory.png">
                <h3>EV Scooters</h3>
            </div>

            <div class="service-card fade-up delay-1">
                <img src="assets/images/vehicles/passenger.png">
                <h3>EV Auto</h3>
            </div>
            <div class="service-card fade-up delay-2">

                <div class="service-icon">📡</div>

                <h3>GPS Solutions</h3>

                <p>Advanced tracking systems</p>

            </div>

            <div class="service-card fade-up delay-3">

                <div class="service-icon">☀️</div>

                <h3>Solar Systems</h3>

                <p>Clean energy solutions</p>

            </div>

        </div>

    </section>

    <!-- what we offer section ends here -->

    <!-- why choose us section starts here -->

    <section class="about-why">

        <div class="why-container">

            <div class="why-left fade-up">

                <h2>Why Choose Us</h2>

                <ul>
                    <li>⚡ Trusted EV Dealer</li>
                    <li>💰 Affordable Pricing</li>
                    <li>🔧 Expert Support</li>
                    <li>📍 Gujarat Wide Service</li>
                </ul>

            </div>

            <div class="why-right fade-up">

                <img src="assets/images/about-us/about-choose.jpg" alt="Divyashakti Enterprise"
                    style="height: 100%;width: 100%;">

            </div>

        </div>

    </section>

    <!-- why choose us section ends here -->

    <!-- stats section starts here -->

    <section class="about-stats">

        <div class="stats-grid">

            <div class="stat">
                <h3>8000+</h3>
                <p>GPS Installed</p>
            </div>

            <div class="stat">
                <h3>13000+</h3>
                <p>Devices Sold</p>
            </div>

            <div class="stat">
                <h3>70%</h3>
                <p>Transport Coverage</p>
            </div>

            <div class="stat">
                <h3>Gujarat</h3>
                <p>Service Area</p>
            </div>

        </div>

    </section>

    <!-- stats section ends here -->
@endsection
