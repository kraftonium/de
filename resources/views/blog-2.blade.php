@extends('partials.mainindex')

@push('title')
    <title>Things to Check Before Buying an Electric Scooter | Blogs | Divyashakti Enterprise | Drive The Future
    </title>
@endpush

@section('main-section')
    <style>
        .blog-detail-container {
            max-width: 900px;
            margin: auto;
            text-align: center;
            padding: 60px 20px;
        }

        .blog-detail-hero h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .blog-meta {
            display: flex;
            gap: 15px;
            justify-content: center;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .blog-intro {
            font-size: 16px;
            color: #666;
        }

        .blog-image-section img {
            width: 50%;
            height: 25%;
            margin: auto;
            display: block;
            align-items: center;
            justify-items: center;
        }

        .blog-content {
            max-width: 850px;
            margin: auto;
            padding: 40px 20px;
            line-height: 1.8;
        }

        .blog-content h2 {
            margin-top: 30px;
            font-size: 26px;
        }

        .blog-img {
            /* width: 100%; */
            border-radius: 12px;
            margin: 20px 0;
            width: 50%;
            height: 25%;
            /* margin: auto;
                                                            display: block;
                                                            align-items: center;
                                                            justify-items: center; */
        }

        .blog-inner-cta {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(90deg, #2b8cff, #ff6aa2);
            color: #fff;
        }

        .blog-cta-btn {
            display: inline-block;
            margin-top: 15px;
            background: #fff;
            color: #000;
            padding: 12px 25px;
            border-radius: 30px;
        }

        .blog-faq {
            max-width: 800px;
            margin: auto;
            padding: 50px 20px;
        }

        .faq-item {
            margin-bottom: 20px;
        }

        /* RESPONSIVE */
        @media(max-width:768px) {
            .blog-detail-hero h1 {
                font-size: 24px;
            }
        }
    </style>

    <!-- BLOG HERO -->
    <section class="blog-detail-hero">

        <div class="blog-detail-container">

            <h1>Things to Check Before Buying an Electric Scooter</h1>

            <div class="blog-meta">
                <span>📅 2026</span>
                <span>⚡ EV Guide</span>
                <span>📍 India</span>
            </div>

            <p class="blog-intro">
                Buying an electric scooter is becoming a smart choice in India. But before making a final decision, it is
                important to understand the key factors that matter in real life.
            </p>

        </div>

    </section>


    <!-- FEATURE IMAGE -->
    <section class="blog-image-section">
        <img src="{{ asset('assets/images/vehicles/1.png') }}" alt="Electric Scooter Buying Guide">
    </section>


    <!-- BLOG CONTENT -->
    <section class="blog-content-section">

        <div class="blog-content">

            <p>
                Buying an electric scooter is becoming a smart choice for many people in India. With rising petrol prices
                and growing interest in eco-friendly travel, more buyers are now exploring EV options for daily use.
            </p>

            <h2>Understand Your Daily Travel Needs</h2>

            <img src="{{ asset('assets/images/vehicles/2.png') }}" class="blog-img">

            <p>
                The first step before buying an electric scooter is to understand how you will use it.
            </p>

            <ul>
                <li>How far do you travel every day?</li>
                <li>Office, college, or business use?</li>
                <li>City traffic usage?</li>
                <li>Single or family use?</li>
            </ul>

            <p>
                A good electric scooter buying guide always starts with daily usage.
            </p>

            <h2>Check the Battery Type and Battery Life</h2>

            <img src="{{ asset('assets/images/vehicles/3.png') }}" class="blog-img">

            <p>
                The battery is the heart of the electric scooter. Always check battery type, warranty, charging time, and
                replacement support.
            </p>

            <p>
                Lithium-ion batteries are more reliable and long-lasting. Electric scooter battery life directly affects
                long-term cost and performance.
            </p>

            <h2>Know the Real Range of the Scooter</h2>

            <img src="{{ asset('assets/images/vehicles/4.png') }}" class="blog-img">

            <p>
                Range means how far the scooter can travel on one charge. Always check real-world range instead of brochure
                claims.
            </p>

            <ul>
                <li>Rider weight</li>
                <li>Traffic</li>
                <li>Road conditions</li>
            </ul>

            <h2>Compare Charging Time</h2>

            <p>
                Charging time is important for daily users. Ask:
            </p>

            <ul>
                <li>Time for full charge</li>
                <li>Home charging support</li>
                <li>Portable battery availability</li>
            </ul>

            <h2>Check Running Cost and Maintenance</h2>

            <img src="{{ asset('assets/images/vehicles/5.png') }}" class="blog-img">

            <p>
                EV scooters offer lower running cost and less maintenance compared to petrol scooters.
            </p>

            <ul>
                <li>Low cost per km</li>
                <li>Less servicing</li>
                <li>Better long-term savings</li>
            </ul>

            <h2>Look at Features and Safety</h2>

            <img src="{{ asset('assets/images/vehicles/6.png') }}" class="blog-img">

            <p>Check important features like:</p>

            <ul>
                <li>Braking system</li>
                <li>Anti-theft alarm</li>
                <li>Reverse mode</li>
                <li>Digital display</li>
            </ul>

            <h2>Check Warranty and After-Sales Support</h2>

            <p>
                Always check battery warranty, motor warranty, and service availability before buying.
            </p>

            <h2>Compare Price with Value</h2>

            <img src="{{ asset('assets/images/vehicles/7.png') }}" class="blog-img">

            <p>
                Do not focus only on price. Compare value including battery, features, and support.
            </p>

            <h2>Take a Test Ride Before Final Decision</h2>

            <img src="{{ asset('assets/images/vehicles/8.png') }}" class="blog-img">

            <p>
                Test ride helps you understand real comfort, braking, balance, and ride quality.
            </p>

            <h2>Conclusion</h2>

            <p>
                Before buying, always check daily needs, battery, range, charging time, cost, features, and support.
            </p>

            <p>
                A good EV scooter can help you save money and make your daily commute easier.
            </p>

        </div>

    </section>


    <!-- CTA -->
    <section class="blog-inner-cta">

        <h2>Planning to Buy an EV Scooter?</h2>

        <p>Explore our latest electric scooters and book a test ride today.</p>

        <a href="{{ url('/ev-scooters') }}" class="blog-cta-btn">Explore EV Scooters →</a>

    </section>


    <!-- FAQ -->
    <section class="blog-faq">

        <h2>FAQs</h2>

        <div class="faq-item">
            <h4>What should I check before buying an electric scooter?</h4>
            <p>Battery, range, charging time, features, warranty, and support.</p>
        </div>

        <div class="faq-item">
            <h4>How important is battery life?</h4>
            <p>Very important for long-term performance and cost.</p>
        </div>

        <div class="faq-item">
            <h4>What is ideal range?</h4>
            <p>Depends on daily usage but should cover your commute easily.</p>
        </div>

        <div class="faq-item">
            <h4>Is EV good for daily commute?</h4>
            <p>Yes, it is cost-effective and low maintenance.</p>
        </div>

    </section>
@endsection
