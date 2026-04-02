@extends('partials.mainindex')

@push('title')
    <title>Divyashakti Enterprise | Drive The Future | Best Electric Scooters in Gandhinagar</title>
@endpush

@push('meta')
    <meta name="description"
        content="Divyashakti Enterprise is the best electric scooter showroom in Gandhinagar offering affordable EV scooters, EV autos, GPS tracking and solar solutions across Gujarat.">
    <meta name="keywords"
        content="electric scooter gandhinagar, ev scooter gujarat, ev showroom gandhinagar, electric vehicle india, ev auto rickshaw, gps tracking gujarat, solar solutions gujarat">
    <meta name="author" content="Divyashakti Enterprise">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.thedivyashakti.com/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Divyashakti Enterprise | Drive The Future | Best Electric Scooters in Gandhinagar">
    <meta property="og:description"
        content="Explore electric scooters, EV autos, GPS tracking & solar solutions in Gandhinagar and Ahmedabad.">
    <meta property="og:url" content="https://www.thedivyashakti.com/">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Divyashakti Enterprise | Drive The Future | Best Electric Scooters in Gandhinagar">
    <meta name="twitter:description"
        content="Affordable EV scooters, EV autos, GPS tracking and solar solutions in Gujarat.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">

    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    {{-- <link rel="icon" href="/assets/images/logo/favicon.png" type="image/png"> --}}
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "AutoDealer",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com",
"logo": "https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png",
"description": "Electric scooter showroom in Gandhinagar offering EV scooters, EV autos, GPS tracking and solar solutions.",
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
"sameAs": [
  "https://www.facebook.com/",
  "https://www.instagram.com/"
]
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Product",
"name": "Electric Scooters",
"brand": "Divyashakti Enterprise",
"description": "Affordable electric scooters for daily commuting in Gujarat.",
"offers": {
  "@type": "Offer",
  "priceCurrency": "INR",
  "price": "60000",
  "availability": "https://schema.org/InStock"
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Review",
"reviewRating": {
  "@type": "Rating",
  "ratingValue": "5"
},
"author": {
  "@type": "Person",
  "name": "Customer"
},
"reviewBody": "Very smooth riding experience and excellent performance."
}
</script>
@endpush

@section('main-section')
    {{-- hero section starts here --}}

    <section class="hero">

        <div class="hero-container">

            <div class="hero-text fade-up">

                <h1>
                    Drive The Future <br>
                    <span>With <br> Divyashakti</span>
                </h1>

                <p>
                    High performance electric scooters
                    built for the next generation of mobility.
                </p>

                <div class="hero-buttons">
                    <a href="{{ url('/ev-scooters') }}" class="btn-primary">Explore EV Scooters</a>
                    <a href="{{ url('/ev-scoters') }}" class="btn-secondary">Book Test Ride</a>
                </div>

            </div>

            <div class="hero-image-wrapper fade-down">

                <img id="heroImage" class="hero-image active" src="assets/images/vehicles/1.png" alt="Divyashakti Victory">

            </div>

        </div>

    </section>

    <!-- hero section ends here -->

    <section class="ev-features-marquee">

        <div class="marquee">

            <div class="marquee-content">

                <span>⚡ 45kmph Top Speed</span>
                <span>🔋 Lithium Ion Battery</span>
                <span>🛑 Front Disc Brake</span>
                <span>🔐 Anti Theft Alarm System</span>
                <span>📡 Remote Lock System</span>
                <span>↩ Reverse Gear</span>
                <span>🔋 Long Range Battery</span>
                <span>⚡ Eco Friendly Electric Drive</span>

                <!-- repeat for smooth loop -->

                <span>⚡ 45kmph Top Speed</span>
                <span>🔋 Lithium Ion Battery</span>
                <span>🛑 Front Disc Brake</span>
                <span>🔐 Anti Theft Alarm System</span>
                <span>📡 Remote Lock System</span>
                <span>↩ Reverse Gear</span>
                <span>🔋 Long Range Battery</span>
                <span>⚡ Eco Friendly Electric Drive</span>

            </div>

        </div>

    </section>

    <!-- about us section starts here -->

    <section class="about">

        <div class="about-container">

            <div class="about-text fade-up">

                <h2>
                    DIVYASHAKTI ENTERPRISE <br>
                    <span>Best Electric Vehicle Showroom In Gandhinagar</span>
                </h2>

                <p>
                    Divyashakti Enterprise is a trusted electric vehicle
                    showroom in Gandhinagar offering high-quality electric
                    scooters and EV auto rickshaws for personal and
                    commercial use. We proudly serve customers from
                    Gandhinagar, Ahmedabad, and nearby regions with reliable
                    and affordable electric mobility solutions.
                </p>

                <div class="about-contact">

                    <h4>HAVE ANY QUESTION?</h4>

                    <a href="tel:+919664861237" class="about-phone">
                        +91 96648 61237
                    </a>

                </div>

            </div>

            <div class="about-highlight fade-down">

                <div class="highlight-box">
                    ⚡ Premium EV Vehicles
                </div>

                <div class="highlight-box">
                    🔋 Eco Friendly Mobility
                </div>

                <div class="highlight-box">
                    🚚 Commercial EV Options
                </div>

                <div class="highlight-box">
                    📍 Gandhinagar Showroom
                </div>

            </div>

        </div>

    </section>

    <!-- about us section ends here -->

    <!-- ev action section starts here -->

    <section class="ev-options">

        <div class="options-container">

            <div class="option fade-up">

                <img src="assets/images/vehicles/victory.png" alt="Divyashakti Enterprise EV Scooter">

                <div class="option-content">
                    <h3>BUY EV SCOOTER</h3>
                    <p>Explore high performance electric scooters built for
                        modern mobility.</p>
                    <a href="{{ url('/ev-scooters') }}">Explore Vehicles →</a>
                </div>

            </div>

            <div class="option fade-up">

                <img src="assets/images/vehicles/passenger.png" alt="EV Auto">

                <div class="option-content">
                    <h3>BUY EV AUTO</h3>
                    <p>Reliable electric auto rickshaws for passenger and
                        commercial use.</p>
                    <a href="{{ url('/ev-scooters') }}">Explore EV Auto →</a>
                </div>

            </div>

            <div class="option icon-option fade-up">

                <div class="icon">🏬</div>

                <div class="option-content">
                    <h3>GET DEALERSHIP</h3>
                    <p>Partner with Divyashakti Enterprise and grow your EV
                        business.</p>
                    <a href="{{ url('/dealership') }}">Apply Now →</a>
                </div>

            </div>

            <div class="option icon-option fade-up">

                <div class="icon">📡</div>

                <div class="option-content">
                    <h3>BUY GPS TRACKER</h3>
                    <p>Smart GPS solutions for vehicle safety and fleet
                        management.</p>
                    <a href="{{ url('/gps') }}">Buy Now →</a>
                </div>

            </div>

        </div>

    </section>

    <!-- ev action section ends here -->

    <!-- our ev section starts here -->

    <section class="ev-scooters">

        <div class="section-header fade-up">

            <h2>Our EV Scooters</h2>

            <p>Explore our range of high performance electric scooters
                designed for smart and eco-friendly mobility.</p>

        </div>

        <div class="scooters-grid">

            <div class="scooter-card fade-up delay-1">

                <img src="assets/images/vehicles/New-Vehicles/Breeze-Red-Front.png" alt="Breeze EV Scooter">

                <h3>Breeze</h3>

                <p class="price">Starting ₹39,999*</p>

                <a href="{{ url('/breeze-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <div class="scooter-card fade-up delay-2">

                <img src="assets/images/vehicles/New-Vehicles/Affair-Lite-Grey-Front.png" alt="Affair Lite EV Scooter">

                <h3>Affair Lite</h3>

                <p class="price">Starting ₹47,999*</p>

                <a href="{{ url('/affair-lite-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <div class="scooter-card fade-up delay-3">

                <img src="assets/images/vehicles/New-Vehicles/Liberty-Black-Front.png" alt="Liberty EV Scooter">

                <h3>Liberty</h3>

                <p class="price">Starting ₹61,999*</p>

                <a href="{{ url('/liberty-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

            <div class="scooter-card fade-up delay-4">

                <img src="assets/images/vehicles/New-Vehicles/Divine-24-Red-Front.png" alt="Divine 24 EV Scooter">

                <h3>Divine 24</h3>

                <p class="price">Starting ₹44,999*</p>

                <a href="{{ url('/divine-24-ev-scooter') }}" class="scooter-btn">View Details</a>

            </div>

        </div>

    </section>

    <!-- our ev section ends here -->

    <!-- ev offer section starts here -->

    <section class="ev-offer-split">

        <div class="offer-left fade-up">

            <h2>
                Latest Offers <br>
                <span>On Popular EV Vehicles</span>
            </h2>

            <p>
                At <strong>Divyashakti Enterprise</strong>, one of the best
                electric vehicle showrooms in Gandhinagar, explore stylish,
                powerful and eco-friendly EV scooters at competitive prices.
            </p>

            <div class="offer-price">
                BUY NOW AT <br>
                <span>LOW PRICE</span>
            </div>

            <a href="{{ url('/ev-scooters') }}" class="offer-btn">
                See More Details →
            </a>

        </div>

        <div class="offer-right fade-down">

            <div class="vehicle-circle">

                <img src="assets/images/vehicles/victory.png" alt="EV Scooter">

            </div>

        </div>

    </section>

    <!-- ev offer section ends here -->

    <!-- about ev section starts here -->

    <section class="brand-statement">

        <div class="statement-container fade-up">

            <h2>
                <span>DIVYASHAKTI ENTERPRISE</span> is a trusted electric
                scooter
                and EV vehicle dealer in Gandhinagar
            </h2>

            <p>
                Offering a wide range of affordable electric scooters and
                electric auto vehicles.
                Explore our smart, eco-friendly vehicles built for daily
                travel, business use,
                and modern electric mobility.
            </p>

        </div>

    </section>

    <!-- about ev section ends here -->

    <!-- tech services section starts here -->

    <section class="tech-services mt-5">

        <div class="tech-header fade-up">

            <h2>Our Smart Solutions</h2>

            <p>Beyond EV vehicles, we offer advanced technology solutions
                for smarter living and efficient energy use.</p>

        </div>

        <div class="tech-grid">

            <!-- GPS -->

            <div class="tech-card fade-up delay-1">

                <div class="tech-icon">📡</div>

                <h3>GPS Tracking</h3>

                <p>Real-time vehicle tracking, security alerts and smart
                    monitoring for your vehicles and fleet.</p>

                <a href="{{ url('/gps') }}">Explore GPS →</a>

            </div>

            <!-- HOME AUTOMATION -->

            <div class="tech-card fade-up delay-2">

                <div class="tech-icon">🏠</div>

                <h3>Home Automation</h3>

                <p>Control lights, appliances and security systems with
                    smart automation for modern living.</p>

                <a href="{{ url('/solar') }}">Explore Automation →</a>

            </div>

            <!-- SOLAR -->

            <div class="tech-card fade-up delay-3">

                <div class="tech-icon">☀️</div>

                <h3>Solar & Solar Lights</h3>

                <p>Eco-friendly solar solutions including solar lights and
                    systems for energy saving and sustainability.</p>

                <a href="{{ url('/solar') }}">Explore Solar →</a>

            </div>

        </div>

    </section>

    <!-- tech services section ends here -->

    <!-- key features section starts here -->

    <section class="key-features">

        <div class="features-header fade-up">

            <h2>Key Features</h2>

            <p>Advanced technology and performance designed for smart
                electric mobility.</p>

        </div>

        <div class="features-grid">

            <!-- Feature 1 -->
            <div class="feature-card fade-up delay-1">

                <div class="feature-icon">💰</div>

                <h3>Economical Ride</h3>

                <p>Enjoy very low running costs — ride at just 10–15 paise
                    per km.</p>

            </div>

            <!-- Feature 6 -->
            <div class="feature-card fade-up delay-2">

                <div class="feature-icon">🔐</div>

                <h3>Anti-Theft Security Alarm</h3>

                <p>Keyless entry with anti-theft alarm to keep your EV
                    safe.</p>

            </div>

            <!-- Feature 3 -->
            <div class="feature-card fade-up delay-3">

                <div class="feature-icon">🔋</div>

                <h3>Lithium-ion Battery</h3>

                <p>Portable lithium battery with dependable performance and
                    a 3-year warranty.</p>

            </div>

            <!-- Feature 4 -->
            <div class="feature-card fade-up delay-4">

                <div class="feature-icon">🏎️</div>

                <h3>High Torque Motor</h3>

                <p>Smooth and powerful performance with 0–40 km/h
                    acceleration in 6.5 seconds.</p>

            </div>

            <!-- Feature 5 -->
            <div class="feature-card fade-up delay-1">

                <div class="feature-icon">♻️</div>

                <h3>Regenerative Braking</h3>

                <p>Smart braking system that recovers energy and improves
                    battery efficiency.</p>

            </div>

            <!-- Feature 2 -->
            <div class="feature-card fade-up delay-2">

                <div class="feature-icon">🛑</div>

                <h3>Front Disc Brake</h3>

                <p>Advanced front disc braking system ensures better
                    control, safety and quick stopping performance.</p>

            </div>

        </div>

    </section>

    <!-- key features section ends here -->

    <!-- testimonials section starts here -->

    <section class="testimonials">

        <div class="testimonial-header fade-up">

            <h2>What Our Customers Say</h2>

            <p>Real experiences from customers who trust Divyashakti
                Enterprise for their EV journey.</p>

        </div>

        <div class="testimonial-grid">

            <div class="testimonial-card fade-up delay-1">

                <img src="assets/images/testimonials/t1.png"
                    alt="Divyashakti Enterprise | Best EV Scooters in Gandhinagar">

                <h3>Jayaben Patel</h3>

                <span>Gandhinagar</span>

                <div class="stars">★★★★★</div>

                <p>
                    Very smooth riding experience. The scooter is
                    cost-effective and perfect for daily use.
                    Highly satisfied with Divyashakti service.
                </p>

            </div>

            <div class="testimonial-card fade-up delay-2">

                <img src="assets/images/testimonials/t2.png"
                    alt="Divyashakti Enterprise | Best EV Scooters in Gandhinagar">

                <h3>Krunal Nayak</h3>

                <span>Gandhinagar</span>

                <div class="stars">★★★★★</div>

                <p>
                    Purchased EV auto for business. Great performance and
                    low maintenance cost.
                    Best decision for my business.
                </p>

            </div>

            <div class="testimonial-card fade-up delay-3">

                <img src="assets/images/testimonials/t3.png"
                    alt="Divyashakti Enterprise | Best EV Scooters in Gandhinagar">

                <h3>Rameshbhai Patel</h3>

                <span>Gandhinagar</span>

                <div class="stars">★★★★★</div>

                <p>
                    Stylish design and excellent battery life. Charging is
                    fast and very convenient.
                    Highly recommended EV scooters.
                </p>

            </div>

        </div>

    </section>


    <!-- testimonials section ends here -->
@endsection
