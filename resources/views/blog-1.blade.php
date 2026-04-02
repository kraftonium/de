@extends('partials.mainindex')

@push('title')
    <title>Electric Scooter vs Petrol Scooter: Which Saves More Money in India? | Blogs | Divyashakti Enterprise | Drive The
        Future
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
            width: 50%;
            border-radius: 12px;
            margin: 20px 0;
            height: 50%;
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

            <h1>Electric Scooter vs Petrol Scooter: Which Saves More Money in India?</h1>

            <div class="blog-meta">
                <span>📅 2026</span>
                <span>⚡ EV Comparison</span>
                <span>📍 India</span>
            </div>

            <p class="blog-intro">
                If you are planning to buy a scooter today, one of the biggest questions is electric scooter vs petrol
                scooter — which one actually saves more money in India?
            </p>

        </div>

    </section>


    <!-- FEATURE IMAGE -->
    <section class="blog-image-section">
        <img src="{{ asset('assets/images/vehicles/1.png') }}" alt="Electric Scooter vs Petrol Scooter">
    </section>


    <!-- BLOG CONTENT -->
    <section class="blog-content-section">

        <div class="blog-content">

            <p>
                With rising fuel prices, growing EV awareness, and more people looking for affordable commuting options,
                this comparison has become very important for Indian buyers. Many people now want a scooter that is not only
                stylish and practical, but also economical in the long run.
            </p>

            <h2>Electric Scooter vs Petrol Scooter – Basic Difference</h2>

            <img src="{{ asset('assets/images/vehicles/2.png') }}" class="blog-img">

            <p>
                A petrol scooter runs on fuel and uses an internal combustion engine. It needs regular petrol refilling,
                engine servicing, oil changes, and periodic maintenance.
            </p>

            <p>
                An electric scooter, on the other hand, runs on battery power and uses an electric motor. It can be charged
                at home and offers a modern, cost-effective mobility solution.
            </p>

            <h2>Purchase Price Comparison</h2>

            <p>
                A petrol scooter may seem cheaper initially. Electric scooters may appear expensive, but long-term ownership
                cost tells a different story.
            </p>

            <h2>Running Cost Comparison</h2>

            <img src="{{ asset('assets/images/vehicles/3.png') }}" class="blog-img">

            <h3>Petrol Scooter Running Cost</h3>
            <p>
                Petrol scooters depend on fuel. Daily travel increases monthly expenses significantly.
            </p>

            <h3>Electric Scooter Running Cost</h3>
            <p>
                EV scooters run on electricity which is much cheaper. Daily commuting becomes affordable.
            </p>

            <h3>Monthly Savings Example</h3>
            <ul>
                <li>Petrol scooter → higher daily cost</li>
                <li>Electric scooter → lower daily cost</li>
            </ul>

            <h2>Maintenance Cost – Which One Is Cheaper?</h2>

            <img src="{{ asset('assets/images/vehicles/4.png') }}" class="blog-img">

            <p>
                Petrol scooters need regular servicing and repairs. Electric scooters have fewer moving parts and lower
                maintenance needs.
            </p>

            <h2>Charging vs Refuelling</h2>

            <p>
                Petrol = fast refueling. EV = home charging convenience.
            </p>

            <h2>Best Scooter for Daily Commute</h2>

            <ul>
                <li>Office → EV is better</li>
                <li>Students → EV saves money</li>
                <li>Business → EV reduces cost</li>
                <li>Long distance → Petrol easier</li>
            </ul>

            <h2>Pros and Cons</h2>

            <h3>Electric Scooter Pros</h3>
            <ul>
                <li>Low running cost</li>
                <li>Low maintenance</li>
                <li>Eco-friendly</li>
            </ul>

            <h3>Petrol Scooter Cons</h3>
            <ul>
                <li>High fuel cost</li>
                <li>High maintenance</li>
            </ul>

            <h2>Which Saves More Money in India?</h2>

            <img src="{{ asset('assets/images/vehicles/5.png') }}" class="blog-img">

            <p>
                For daily commuting, electric scooters save more money due to lower charging and servicing costs.
            </p>

            <h2>Final Conclusion</h2>

            <p>
                Electric scooters are a smarter financial decision for daily use. They reduce expenses and support
                eco-friendly commuting.
            </p>

        </div>

    </section>


    <!-- CTA -->
    <section class="blog-inner-cta">

        <h2>Ready to Switch to Electric?</h2>

        <p>Explore our EV scooters and save more every day.</p>

        <a href="{{ url('/ev-scooters') }}" class="blog-cta-btn">Explore EV Scooters →</a>

    </section>


    <!-- FAQ -->
    <section class="blog-faq">

        <h2>FAQs</h2>

        <div class="faq-item">
            <h4>Is an electric scooter cheaper?</h4>
            <p>Yes, due to low running and maintenance cost.</p>
        </div>

        <div class="faq-item">
            <h4>What is EV running cost?</h4>
            <p>It is significantly lower than petrol scooters.</p>
        </div>

        <div class="faq-item">
            <h4>Best scooter for daily commute?</h4>
            <p>Electric scooters are best for city commuting.</p>
        </div>

    </section>
@endsection
