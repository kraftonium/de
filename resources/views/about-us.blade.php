@extends('partials.mainindex')

@push('title')
    <title>About Us | Divyashakti Enterprise | Drive The Future</title>
@endpush

@push('meta')
    <meta name="description"
        content="Learn about Divyashakti Enterprise, a trusted electric vehicle showroom in Gandhinagar offering EV scooters, EV autos, GPS tracking and solar solutions across Gujarat.">
    <meta name="keywords"
        content="about divyashakti enterprise, ev showroom gandhinagar, electric scooter dealer gujarat, ev company india, gps tracking gandhinagar, solar solutions gujarat">
    <meta name="author" content="Divyashakti Enterprise">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.thedivyashakti.com/about-us">

    <meta property="og:type" content="website">
    <meta property="og:title" content="About Us | Divyashakti Enterprise | Drive The Future">
    <meta property="og:description"
        content="Trusted EV dealer in Gandhinagar offering electric scooters, EV autos, GPS tracking and solar solutions.">
    <meta property="og:url" content="https://www.thedivyashakti.com/about-us">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/about-us/about-hero.jpg">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About Us | Divyashakti Enterprise | Drive The Future">
    <meta name="twitter:description"
        content="Explore our journey, EV solutions, and smart technology services across Gujarat.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/about-us/about-hero.jpg">
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "AutoDealer",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com",
"logo": "https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png",
"description": "Divyashakti Enterprise is a trusted EV showroom in Gandhinagar offering electric scooters, EV autos, GPS tracking and solar solutions.",
"telephone": "+919664861237",
"address": {
  "@type": "PostalAddress",
  "streetAddress": "Swagat Flamingo, Sargasan",
  "addressLocality": "Gandhinagar",
  "addressRegion": "Gujarat",
  "postalCode": "382421",
  "addressCountry": "IN"
},
"areaServed": ["Gandhinagar", "Ahmedabad", "Gujarat"],
"foundingDate": "2020",
"sameAs": [
  "https://www.facebook.com/",
  "https://www.instagram.com/"
]
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "AboutPage",
"name": "About Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com/about",
"description": "Learn about Divyashakti Enterprise, EV dealer in Gandhinagar providing electric scooters, EV autos, GPS tracking and solar solutions."
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "AggregateRating",
"itemReviewed": {
  "@type": "Organization",
  "name": "Divyashakti Enterprise"
},
"ratingValue": "4.8",
"reviewCount": "5000"
}
</script>
@endpush

@section('main-section')
    <!-- breadcrumb starts here -->

    <section class="page-banner">

        <div class="banner-bg"></div>

        <div class="banner-content fade-up">

            <h1>About Us</h1>

            <p>
                Explore our EV Scooters range of high-performance electric scooters
                designed
                for smart, eco-friendly mobility.
            </p>

            <div class="breadcrumb">

                <a href="{{ url('/') }}">Home</a>

                {{-- <span>›</span>

                <a href="{{ url('/ev-scooters') }}">Scooters</a> --}}

                <span>›</span>

                <span class="active">About Us</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb ends here -->

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

                <img src="assets/images/vehicles/1.png" alt="Divyashakti Enterprise Showroom">

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

                <img src="assets/images/vehicles/2.png" alt="Divyashakti Enterprise" style="height: 100%;width: 100%;">

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
