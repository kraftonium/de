@extends('partials.mainindex')

@push('title')
    <title>Blogs | Divyashakti Enterprise | Drive The Future</title>
@endpush

@section('main-section')
    <!-- breadcrumb starts here -->

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

                <a href="index.html">Home</a>

                <span>›</span>

                <span class="active">Blogs</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb ends here -->

    <!-- breadcrumb starts here -->

    <!-- blog hero starts here -->

    <section class="blog-hero">

        <h1>
            Electric Vehicle Blogs <br>
            <span>Insights on Smart Mobility</span>
        </h1>

        <p>
            Explore the latest updates on electric scooters, EV technology,
            battery innovations, and cost-saving benefits for modern
            commuting.
        </p>

    </section>

    <!-- blog hero ends here -->

    <!-- blog grid starts here -->

    <section class="blog-section">

        <div class="blog-container">

            <!-- BLOG CARD -->
            <div class="blog-card">

                <img src="assets/images/blogs/blog-3.jpg" alt="Electric Scooter Benefits">

                <div class="blog-content">

                    <h2>Top Benefits of Electric Scooters in India</h2>

                    <p>
                        Discover why electric scooters are becoming the
                        future of transportation
                        with low cost, eco-friendly design, and modern
                        technology.
                    </p>

                    <a href="#" class="blog-btn">Read More →</a>

                </div>

            </div>

            <!-- BLOG CARD -->
            <div class="blog-card">

                <img src="assets/images/blogs/blog-2.jpg" alt="EV Battery Technology">

                <div class="blog-content">

                    <h2>Lithium Battery vs Lead Acid Battery</h2>

                    <p>
                        Compare lithium-ion and lead-acid batteries and find
                        out which one
                        is best for your EV scooter.
                    </p>

                    <a href="#" class="blog-btn">Read More →</a>

                </div>

            </div>

            <!-- BLOG CARD -->
            <div class="blog-card">

                <img src="assets/images/blogs/blog-1.jpg" alt="EV Cost Saving">

                <div class="blog-content">

                    <h2>How EV Scooters Save Your Money</h2>

                    <p>
                        Learn how switching to electric scooters can reduce
                        your daily
                        fuel and maintenance expenses.
                    </p>

                    <a href="#" class="blog-btn">Read More →</a>

                </div>

            </div>

        </div>

    </section>

    <!-- blog grid ends here -->

    <!-- blogs category section starts here -->

    <section class="blog-categories">

        <h2>Explore Topics</h2>

        <div class="category-tags">

            <span>EV Scooters</span>
            <span>Battery Technology</span>
            <span>Cost Savings</span>
            <span>Electric Mobility</span>

        </div>

    </section>

    <!-- blogs category section ends here -->

    <!-- cta section starts here -->

    <section class="blog-cta">

        <h2>Ready to Switch to Electric?</h2>

        <p>Explore our EV scooters and book your test ride today.</p>

        <a href="scooters.html" class="blog-cta-btn">Explore Vehicles →</a>

    </section>

    <!-- cta section ends here -->
@endsection
