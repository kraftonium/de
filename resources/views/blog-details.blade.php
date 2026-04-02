@extends('partials.mainindex')

@push('title')
    <title>Blog Details | Divyashakti Enterprise | Drive The Future</title>
@endpush

@section('main-section')
    <!-- breadcrumb starts here -->

    <section class="page-banner">

        <div class="banner-bg"></div>

        <div class="banner-content fade-up">

            <h1>EV Blogs & Insights</h1>

            <p>
                Stay updated with the latest news, trends, and insights on
                electric scooters,
                battery technology, and smart mobility solutions in Gujarat.
            </p>

            <div class="breadcrumb">

                <a href="{{ url('/') }}">Home</a>

                <span>›</span>

                <span class="active">Blogs</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb starts here -->

    <!-- BLOG HERO STARTS -->

    <section class="blog-detail-hero">

        <div class="blog-detail-container">

            <h1>
                Top Benefits of Electric Scooters in India
            </h1>

            <div class="blog-meta">
                <span>📅 March 2026</span>
                <span>⚡ EV Scooters</span>
                <span>📍 Gujarat</span>
            </div>

            <p class="blog-intro">
                Electric scooters are transforming urban mobility in India.
                Discover why more people in Gandhinagar and Ahmedabad are
                switching to EV scooters.
            </p>

            <!-- HERO IMAGE -->
            <div class="blog-hero-img">
                <img src="assets/images/blogs/blog-7.jpg" alt="Electric scooter in India">
            </div>

        </div>

    </section>

    <!-- BLOG HERO ENDS -->

    <!-- BLOG CONTENT STARTS -->

    <section class="blog-content-section">

        <div class="blog-content">

            <h2>Why Electric Scooters Are the Future</h2>

            <img src="assets/images/blogs/blog-4.jpg" class="blog-img" alt="future of electric scooters">

            <p>
                Electric scooters are becoming the preferred choice for
                daily commuting due to
                their low running cost, eco-friendly nature, and advanced
                features.
            </p>

            <h2>1. Low Running Cost</h2>

            <img src="assets/images/blogs/blog-3.jpg" class="blog-img" alt="EV cost saving India">

            <p>
                Compared to petrol vehicles, EV scooters cost only 10–15
                paise per km,
                making them highly economical for daily use.
            </p>

            <h2>2. Eco-Friendly Mobility</h2>

            <img src="assets/images/blogs/blog-6.jpg" class="blog-img" alt="eco friendly electric scooter">

            <p>
                Electric scooters produce zero emissions, helping reduce
                pollution and
                promote sustainable transportation.
            </p>

            <h2>3. Low Maintenance</h2>

            <img src="assets/images/blogs/blog-7.jpg" class="blog-img" alt="low maintenance EV scooter">

            <p>
                With fewer moving parts, EV scooters require less
                maintenance compared
                to traditional vehicles.
            </p>

            <h2>4. Smart Features</h2>

            <img src="assets/images/blogs/blog-8.jpg" class="blog-img" alt="smart EV features">

            <ul>
                <li>Remote Lock System</li>
                <li>Anti-Theft Alarm</li>
                <li>Reverse Gear</li>
                <li>Digital Display</li>
            </ul>

            <h2>Conclusion</h2>

            <p>
                Switching to electric scooters is not just a smart financial
                decision,
                but also a step towards a greener future.
            </p>

        </div>

    </section>

    <!-- BLOG CONTENT ENDS -->

    <!-- BLOG CTA STARTS -->

    <section class="blog-inner-cta">

        <h2>Thinking of Buying an EV Scooter?</h2>

        <p>
            Explore our latest electric scooters and book a test ride today.
        </p>

        <a href="#" class="blog-cta-btn">Explore Vehicles →</a>

    </section>

    <!-- BLOG CTA ENDS -->

    <!-- RELATED BLOGS STARTS -->

    <section class="related-blogs">

        <h2 class="section-title">Related Blogs</h2>

        <div class="related-grid">

            <div class="related-card">

                <img src="assets/images/blogs/blog-9.jpg" alt="EV vs petrol scooter">

                <h3>EV vs Petrol Scooters</h3>

                <a href="#">Read More →</a>

            </div>

            <div class="related-card">

                <img src="assets/images/blogs/blog-1.jpg" alt="battery maintenance tips">

                <h3>Battery Maintenance Tips</h3>

                <a href="#">Read More →</a>

            </div>

            <div class="related-card">

                <img src="assets/images/blogs/blog-2.jpg" alt="best EV scooters Gujarat">

                <h3>Best EV Scooters in Gujarat</h3>

                <a href="#">Read More →</a>

            </div>

        </div>

    </section>

    <!-- RELATED BLOGS ENDS -->
@endsection
