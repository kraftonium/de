@extends('partials.mainindex')

@push('title')
    <title>Before You Buy an Electric Scooter, Check These 8 Things | Blogs | Divyashakti Enterprise | Drive The Future
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

            <h1>Before You Buy an Electric Scooter, Check These 8 Things</h1>

            <div class="blog-meta">
                <span>📅 2026</span>
                <span>⚡ EV Buying Guide</span>
                <span>📍 India</span>
            </div>

            <p class="blog-intro">
                Electric scooters are becoming a popular choice in India. Before you buy an electric scooter, it is
                important to check the right things to make a smart decision.
            </p>

        </div>

    </section>


    <!-- FEATURE IMAGE -->
    <section class="blog-image-section">
        <img src="{{ asset('assets/images/vehicles/1.png') }}" alt="Things to check before buying electric scooter">
    </section>


    <!-- BLOG CONTENT -->
    <section class="blog-content-section">

        <div class="blog-content">

            <p>
                Electric scooters are becoming a popular choice in India. With petrol prices rising, many buyers are now
                shifting towards EV scooters for daily use.
            </p>

            <h2>1. Know Your Daily Travel Needs</h2>

            <img src="{{ asset('assets/images/vehicles/2.png') }}" class="blog-img">

            <p>Before buying, understand how you will use your scooter.</p>

            <ul>
                <li>Daily travel distance</li>
                <li>Office, college or business use</li>
                <li>City riding conditions</li>
            </ul>

            <h2>2. Check the Battery Type</h2>

            <img src="{{ asset('assets/images/vehicles/3.png') }}" class="blog-img">

            <p>
                The battery is the heart of the scooter. Lithium-ion batteries are more efficient and reliable for everyday
                use.
            </p>

            <h2>3. Understand the Battery Life</h2>

            <p>
                Battery life affects long-term performance. Always check warranty and replacement support.
            </p>

            <h2>4. Check the Real Range</h2>

            <img src="{{ asset('assets/images/vehicles/4.png') }}" class="blog-img">

            <p>
                Real range depends on riding conditions, traffic, and speed. Always check practical usage range.
            </p>

            <h2>5. Compare Charging Time</h2>

            <p>
                Ask about full charge time, fast charging, and home charging support.
            </p>

            <h2>6. Look at Running Cost and Maintenance</h2>

            <img src="{{ asset('assets/images/vehicles/5.png') }}" class="blog-img">

            <p>
                EV scooters have lower maintenance and running cost compared to petrol scooters.
            </p>

            <h2>7. Check Features, Safety, and Comfort</h2>

            <img src="{{ asset('assets/images/vehicles/6.png') }}" class="blog-img">

            <ul>
                <li>Brakes</li>
                <li>Anti-theft system</li>
                <li>Reverse mode</li>
                <li>Comfort & suspension</li>
            </ul>

            <h2>8. Check Warranty and After-Sales Support</h2>

            <p>
                Always check service support, spare parts availability, and warranty.
            </p>

            <h2>Always Take a Test Ride</h2>

            <img src="{{ asset('assets/images/vehicles/7.png') }}" class="blog-img">

            <p>
                Test ride helps you check real performance, comfort, and control before final decision.
            </p>

            <h2>Final Conclusion</h2>

            <p>
                Buying an EV scooter is a smart decision if you choose the right one based on your needs.
            </p>

            <ul>
                <li>Daily usage</li>
                <li>Battery & range</li>
                <li>Charging time</li>
                <li>Features</li>
                <li>Warranty</li>
            </ul>

            <p>
                Making the right choice today gives better savings and comfort in the future.
            </p>

        </div>

    </section>


    <!-- CTA -->
    <section class="blog-inner-cta">

        <h2>Looking for the Right EV Scooter?</h2>

        <p>Explore our latest electric scooters and book your test ride today.</p>

        <a href="{{ url('/ev-scooters') }}" class="blog-cta-btn">Explore EV Scooters →</a>

    </section>


    <!-- FAQ -->
    <section class="blog-faq">

        <h2>FAQs</h2>

        <div class="faq-item">
            <h4>What should I check before buying an EV scooter?</h4>
            <p>Battery, range, charging time, features, warranty and support.</p>
        </div>

        <div class="faq-item">
            <h4>Why is battery life important?</h4>
            <p>It affects long-term performance and value.</p>
        </div>

        <div class="faq-item">
            <h4>What is a good EV range?</h4>
            <p>It should match your daily commute needs.</p>
        </div>

        <div class="faq-item">
            <h4>Is EV scooter good for daily use?</h4>
            <p>Yes, it is cost-effective and easy to maintain.</p>
        </div>

    </section>
@endsection
