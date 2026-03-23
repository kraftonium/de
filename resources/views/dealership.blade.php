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

            <form id="dealership_form">

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

                    <div class="form-group">
                        <input type="text" id="phoneno" placeholder="Phone Number">
                        <span id="phoneno-error"></span>
                    </div>

                    <div class="form-group">
                        <select id="dealership">
                            <option value>Select Dealership Type</option>
                            <option>Area Dealership</option>
                            <option>Taluka Dealership</option>
                            <option>Jilla Dealership</option>
                            <option>Zone Dealership</option>
                            <option>State Dealership</option>
                        </select>
                        <span id="dealership-error"></span>
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
                        <input type="text" id="pincode" placeholder="Pincode">
                        <span id="pincode-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <textarea id="address" placeholder="Full Address"></textarea>
                        <span id="address-error"></span>
                    </div>

                </div>

                <button type="button" class="submit-btn">
                    Apply Now →
                </button>

            </form>

        </div>

    </section>

    <!-- dealership form ends here -->
@endsection
