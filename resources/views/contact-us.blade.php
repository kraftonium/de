@extends('partials.mainindex')

@push('title')
    <title>Contact Us | Divyashakti Enterprise | Drive The Future</title>
@endpush

@section('main-section')
    <!-- breadcrumb starts here -->

    <section class="page-banner">

        <div class="banner-bg"></div>

        <div class="banner-content fade-up">

            <h1>Contact Us</h1>

            <p>
                Get in touch with Divyashakti Enterprise for EV vehicles,
                GPS tracking, solar solutions, and smart technology
                services.
            </p>

            <div class="breadcrumb">

                <a href="index.html">Home</a>

                <span>›</span>

                <span class="active">Contact Us</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb ends here -->

    <!-- contact intro starts here -->

    <section class="contact-intro">

        <div class="contact-left fade-up">

            <h2>Get in Touch with DivyaShakti Enterprise</h2>

            <p>
                Have questions about electric vehicles, GPS solutions, or
                solar systems?
                Our team is here to help you with product details, pricing,
                dealership opportunities, and installations.
            </p>

            <p>
                We proudly serve customers across Gandhinagar, Ahmedabad,
                and nearby areas.
            </p>

        </div>

        <div class="contact-right fade-up">

            <div class="contact-box">
                📍 Gandhinagar Showroom
            </div>

            <div class="contact-box">
                📞 +91 97375 61301
            </div>

            <div class="contact-box">
                📧 ride@thedivyashakti.com
            </div>

        </div>

    </section>

    <!-- contact intro ends here -->

    <!-- showroom section starts here -->

    <section class="contact-showroom">

        <div class="showroom-content fade-up">

            <h2>Visit Our Showroom</h2>

            <p>
                Experience the latest EV scooters, GPS tracking systems, and
                solar solutions
                at our Gandhinagar showroom. Our team will guide you in
                choosing the right solution.
            </p>

        </div>

    </section>

    <!-- showroom section ends here -->

    <!-- contact cards starts here -->

    <section class="contact-cards">

        <div class="cards-container">

            <div class="card fade-up delay-1">
                <h3>Call Us</h3>
                <p>+91 97375 61301</p>
            </div>

            <div class="card fade-up delay-2">
                <h3>Email Us</h3>
                <p>ride@thedivyashakti.com</p>
            </div>

            <div class="card fade-up delay-3">
                <h3>Location</h3>
                <p>Gandhinagar, Gujarat</p>
            </div>

        </div>

    </section>

    <!-- contact cards ends here -->

    <!-- form intro starts here -->

    <section class="contact-form-intro">

        <p class="fade-up">
            Get price details, dealership information, or installation
            support — our team will contact you shortly.
        </p>

    </section>

    <!-- form intro ends here -->

    <!-- contact us form starts here -->

    <section class="contact-form-section">

        <div class="contact-form-wrapper">

            <h2>Send Us a Message</h2>

            <p class="form-subtext">
                Get price details, dealership information, or installation
                support — our team will contact you shortly.
            </p>

            <form id="contact_form">

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
                        <input type="text" id="phone" placeholder="Phone Number">
                        <span id="phone-error"></span>
                    </div>

                    <div class="form-group">
                        <select id="service">
                            <option value>Select Inquiry Type</option>
                            <option>EV Scooter</option>
                            <option>EV Auto</option>
                            <option>GPS Tracking</option>
                            <option>Solar System</option>
                            <option>Dealership</option>
                        </select>
                        <span id="service-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <input type="text" id="subject" placeholder="Subject">
                        <span id="subject-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <textarea id="message" placeholder="Write your message..."></textarea>
                        <span id="message-error"></span>
                    </div>

                </div>

                <button type="button" class="contact-submit-btn">
                    Send Message →
                </button>

                <div id="consuccess"></div>

            </form>

        </div>

    </section>

    <!-- contact us form ends here -->

    <!-- contact map starts here -->

    <section class="contact-map">

        <iframe src="https://maps.google.com/maps?q=gandhinagar&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
            height="350" style="border:0;">
        </iframe>

    </section>

    <!-- contact map ends here -->
@endsection
