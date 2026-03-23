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

    <section class="gps-form-section">

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

    </section>

    <!-- gps from ends here -->
@endsection
