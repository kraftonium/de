@extends('partials.mainindex')

@push('title')
    <title>Privacy Policy | Divyashakti Enterprise | Drive The Future</title>
@endpush

@push('meta')
    <meta name="description"
        content="Read the Privacy Policy of Divyashakti Enterprise. Learn how we collect, use, and protect your personal information across our EV, GPS, and solar services.">
    <meta name="keywords"
        content="privacy policy divyashakti enterprise, ev company privacy policy india, website privacy policy gujarat, data protection ev company">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.thedivyashakti.com/privacy-policy">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Privacy Policy | Divyashakti Enterprise">
    <meta property="og:description"
        content="Learn how Divyashakti Enterprise protects your data and ensures privacy across its services.">
    <meta property="og:url" content="https://www.thedivyashakti.com/privacy-policy">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Privacy Policy | Divyashakti Enterprise">
    <meta name="twitter:description"
        content="Understand how your data is collected and protected at Divyashakti Enterprise.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com",
"logo": "https://www.thedivyashakti.com/assets/images/logo/logo.png",
"contactPoint": {
  "@type": "ContactPoint",
  "telephone": "+919737561301",
  "contactType": "customer service",
  "areaServed": "IN",
  "availableLanguage": ["English", "Hindi", "Gujarati"]
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
"@type": "WebPage",
"name": "Privacy Policy",
"url": "https://www.thedivyashakti.com/privacy-policy",
"description": "Privacy policy explaining how Divyashakti Enterprise collects and protects user data.",
"inLanguage": "en"
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "CreativeWork",
"name": "Privacy Policy - Divyashakti Enterprise",
"about": "User data privacy, security and policies",
"publisher": {
  "@type": "Organization",
  "name": "Divyashakti Enterprise"
}
}
</script>
@endpush

@section('main-section')
    <section class="privacy-section">

        <div class="privacy-container">

            <h1 class="privacy-title">
                Privacy Policy
                <span>Divyashakti Enterprise</span>
            </h1>

            <p class="privacy-subtitle">
                Your privacy is important to us. Learn how we collect, use,
                and protect your information.
            </p>

            <!-- SECTION -->

            <div class="privacy-card fade-up">
                <h2>1. Introduction</h2>
                <p>
                    Divyashakti Enterprise is committed to ensuring the
                    privacy of users on our website.
                    This policy explains how we collect, use, and manage
                    your information.
                </p>
                <p>
                    By using our website, you agree to our privacy practices
                    and terms.
                </p>
            </div>

            <div class="privacy-card fade-up delay-1">
                <h2>2. Who We Are</h2>
                <p>
                    Divyashakti Enterprise is a forward-thinking EV company
                    offering eco-friendly electric scooters
                    and smart mobility solutions across Gujarat.
                </p>
                <p>
                    We focus on innovation, sustainability, and customer
                    satisfaction.
                </p>
            </div>

            <div class="privacy-card fade-up delay-2">
                <h2>3. Information We Collect</h2>
                <p>
                    We collect information directly from users,
                    automatically through website usage,
                    and from third-party sources when required.
                </p>
            </div>

            <div class="privacy-card fade-up delay-3">
                <h2>4. Important Terms</h2>
                <p>
                    By using our website, you agree to the collection and
                    use of your information as described.
                </p>
                <p>
                    We may update this policy at any time. Please review
                    regularly.
                </p>
            </div>

            <div class="privacy-card fade-up">
                <h2>5. Security Practices</h2>
                <p>
                    We use SSL encryption and secure systems to protect your
                    personal data from unauthorized access.
                </p>
            </div>

            <div class="privacy-card fade-up delay-1">
                <h2>6. Policy Updates</h2>
                <p>
                    We may update this policy periodically. Continued use of
                    our website means acceptance of updates.
                </p>
            </div>

            <div class="privacy-card fade-up delay-2">
                <h2>7. Governing Law</h2>
                <p>
                    This website is governed by Indian laws. Jurisdiction:
                    Gandhinagar.
                </p>
            </div>

            <div class="privacy-card fade-up delay-3">
                <h2>8. GPS Tracker Data</h2>
                <p>
                    Using our GPS devices means you agree to data collection
                    for tracking and monitoring purposes.
                </p>
            </div>

            <div class="privacy-card fade-up">
                <h2>9. Conflict Policy</h2>
                <p>
                    All disputes should be resolved amicably through
                    discussion rather than legal action.
                </p>
            </div>

            <div class="privacy-card contact-card fade-up">
                <h2>10. Contact Us</h2>

                <p>
                    📍 B 102 Swagat Flamingo, Gandhinagar Highway<br>
                    📞 +91 97375 61301<br>
                    📧 ride@thedivyashakti.com
                </p>

            </div>

        </div>

    </section>
@endsection
