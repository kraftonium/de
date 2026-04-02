@extends('partials.mainindex')

@push('title')
    <title>Scooter Details | Divyashakti Enterprise | Drive The Future</title>
@endpush

@section('main-section')
    <!-- breadcrumb starts here -->

    <section class="page-banner">

        <div class="banner-bg"></div>

        <div class="banner-content fade-up">

            <h1>Victory EV Scooter</h1>

            <p>
                Explore our range of high-performance electric scooters
                designed
                for smart, eco-friendly mobility.
            </p>

            <div class="breadcrumb">

                <a href="{{ url('/') }}">Home</a>

                <span>›</span>

                <a href="scooters.html">Scooters</a>

                <span>›</span>

                <span class="active">Victory EV Scooter</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb starts here -->

    <!-- scooters section starts here -->

    <section class="scooter-details">

        <div class="details-container">

            <!-- LEFT IMAGE -->

            <div class="details-image fade-left">

                <img src="assets/images/vehicles/1.png" alt="Victory Scooter">

            </div>

            <!-- RIGHT CONTENT -->

            <div class="details-content fade-right">

                <h1>Victory EV Scooter</h1>

                <p class="price">Starting ₹65,000*</p>

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
                        <h4>45 km/h</h4>
                    </div>

                    <div class="spec">
                        <span>🔋 Battery</span>
                        <h4>Lithium-ion</h4>
                    </div>

                    <div class="spec">
                        <span>⏱ Charging</span>
                        <h4>2-3 Hours</h4>
                    </div>

                    <div class="spec">
                        <span>📍 Range</span>
                        <h4>90-120 km</h4>
                    </div>

                </div>

                <!-- BUTTONS -->

                <div class="details-buttons">

                    <a href="#" class="btn-primary">Book Test Ride</a>

                    <a href="https://wa.me/919664861237" class="btn-secondary">
                        WhatsApp Inquiry
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- scooters section ends here -->
@endsection
