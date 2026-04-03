@extends('partials.mainindex')

@push('title')
    <title>EV Blogs & Insights | Divyashakti Enterprise | Drive The Future</title>
@endpush

@push('meta')
    <meta name="description"
        content="Read the latest EV blogs on electric scooters, battery technology, cost savings and smart mobility in Gujarat. Learn everything about electric vehicles with Divyashakti Enterprise.">

    <meta name="keywords"
        content="electric vehicle blogs india, ev scooter blogs, lithium vs lead battery ev, electric scooter benefits india, ev cost saving india, ev trends gujarat">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://www.thedivyashakti.com/blogs">

    <meta property="og:type" content="website">
    <meta property="og:title" content="EV Blogs & Insights | Divyashakti Enterprise">
    <meta property="og:description"
        content="Explore EV blogs on electric scooters, battery technology, and cost savings for smart mobility.">
    <meta property="og:url" content="https://www.thedivyashakti.com/blogs">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Electric Vehicle Blogs & Insights">
    <meta name="twitter:description"
        content="Learn about EV scooters, battery technology and cost-saving benefits in India.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Blog",
"name": "Divyashakti EV Blogs",
"description": "Latest blogs on electric scooters, EV technology, battery innovations and smart mobility.",
"url": "https://www.thedivyashakti.com/blogs",
"publisher": {
  "@type": "Organization",
  "name": "Divyashakti Enterprise",
  "logo": {
    "@type": "ImageObject",
    "url": "https://www.thedivyashakti.com/assets/img/logo/logo-only-1.png"
  }
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "ItemList",
"itemListElement": [
{
  "@type": "BlogPosting",
  "position": 1,
  "headline": "Top Benefits of Electric Scooters in India",
  "image": "https://www.thedivyashakti.com/assets/images/blogs/blog-3.jpg",
  "url": "https://www.thedivyashakti.com/blogs/top-benefits-electric-scooters"
},
{
  "@type": "BlogPosting",
  "position": 2,
  "headline": "Lithium Battery vs Lead Acid Battery",
  "image": "https://www.thedivyashakti.com/assets/images/blogs/blog-2.jpg",
  "url": "https://www.thedivyashakti.com/blogs/lithium-vs-lead-battery"
},
{
  "@type": "BlogPosting",
  "position": 3,
  "headline": "How EV Scooters Save Your Money",
  "image": "https://www.thedivyashakti.com/assets/images/blogs/blog-1.jpg",
  "url": "https://www.thedivyashakti.com/blogs/ev-cost-saving"
}
]
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com",
"logo": "https://www.thedivyashakti.com/assets/img/logo/logo-only-1.png",
"contactPoint": {
  "@type": "ContactPoint",
  "telephone": "+919664861237",
  "contactType": "customer service"
},
"address": {
  "@type": "PostalAddress",
  "addressLocality": "Gandhinagar",
  "addressRegion": "Gujarat",
  "addressCountry": "IN"
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "WebSite",
"url": "https://www.thedivyashakti.com",
"potentialAction": {
  "@type": "SearchAction",
  "target": "https://www.thedivyashakti.com/blogs?search={search_term_string}",
  "query-input": "required name=search_term_string"
}
}
</script>
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

                <a href="{{ url('/') }}">Home</a>

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

                <img src="assets/images/blogs/blog-3.png" alt="Electric Scooter Benefits">

                <div class="blog-content">

                    <h2>Electric Scooter vs Petrol Scooter: Which Saves More Money in India?</h2>

                    <p>
                        If you are planning to buy a scooter today, one of the biggest questions is electric scooter vs
                        petrol
                        scooter — which one actually saves more money in India?
                    </p>

                    <a href="{{ url('/blogs/electric-scooters-vs-petrol-scooters') }}" class="blog-btn">Read More →</a>

                </div>

            </div>

            <!-- BLOG CARD -->
            <div class="blog-card">

                <img src="assets/images/blogs/blog-2.png" alt="EV Battery Technology">

                <div class="blog-content">

                    <h2>Things to Check Before Buying an Electric Scooter</h2>

                    <p>
                        Buying an electric scooter is becoming a smart choice in India. But before making a final decision,
                        it is
                        important to understand the key factors that matter in real life.
                    </p>

                    <a href="{{ url('/blogs/things-to-check-before-buying-an-electric-scooter') }}" class="blog-btn">Read
                        More →</a>

                </div>

            </div>

            <!-- BLOG CARD -->
            <div class="blog-card">

                <img src="assets/images/blogs/blog-1.png" alt="EV Cost Saving">

                <div class="blog-content">

                    <h2>Before You Buy an Electric Scooter, Check These 8 Things</h2>

                    <p>
                        Electric scooters are becoming a popular choice in India. Before you buy an electric scooter, it is
                        important to check the right things to make a smart decision.
                    </p>

                    <a href="{{ url('/blogs/before-you-buy-an-electric-scooter-check-these-8-things') }}"
                        class="blog-btn">Read More →</a>

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
