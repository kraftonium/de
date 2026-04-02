@extends('partials.mainindex')

@push('title')
    <title>Contact Us | EV, GPS & Solar Solutions Gujarat | Divyashakti Enterprise | Drive The Future</title>
@endpush

@push('meta')
    <meta name="description"
        content="Contact Divyashakti Enterprise in Gandhinagar for EV scooters, GPS tracking systems, solar panel installation, and dealership opportunities. Call or visit our showroom today.">
    <meta name="keywords"
        content="contact ev showroom gandhinagar, gps tracking contact gujarat, solar panel contact ahmedabad, ev dealership contact, divyashakti enterprise contact">
    <meta name="author" content="Divyashakti Enterprise">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.thedivyashakti.com/contact-us">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Contact Divyashakti Enterprise">
    <meta property="og:description" content="Get in touch for EV vehicles, GPS tracking and solar solutions in Gujarat.">
    <meta property="og:url" content="https://www.thedivyashakti.com/contact-us">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Divyashakti Enterprise">
    <meta name="twitter:description" content="Call or visit our showroom for EV, GPS and solar solutions.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "LocalBusiness",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com/contact-us",
"logo": "https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png",
"image": "https://www.thedivyashakti.com/assets/images/vehicles/victory.png",
"description": "EV showroom, GPS tracking provider and solar solution company in Gandhinagar, Gujarat.",
"telephone": "+919664861237",
"email": "ride@thedivyashakti.com",
"address": {
  "@type": "PostalAddress",
  "streetAddress": "Sargasan, Gandhinagar",
  "addressLocality": "Gandhinagar",
  "addressRegion": "Gujarat",
  "postalCode": "382421",
  "addressCountry": "IN"
},
"geo": {
  "@type": "GeoCoordinates",
  "latitude": "23.2156",
  "longitude": "72.6369"
},
"openingHours": "Mo-Sa 09:00-19:00",
"sameAs": [
  "https://www.facebook.com/",
  "https://www.instagram.com/"
]
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "ContactPage",
"name": "Contact Divyashakti Enterprise",
"description": "Contact us for EV scooters, GPS tracking systems, solar installation and dealership opportunities.",
"url": "https://www.thedivyashakti.com/contact-us"
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"name": "Divyashakti Enterprise",
"contactPoint": {
  "@type": "ContactPoint",
  "telephone": "+919664861237",
  "contactType": "customer service",
  "areaServed": "IN",
  "availableLanguage": ["English", "Hindi", "Gujarati"]
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
  "@type": "Question",
  "name": "How can I contact Divyashakti Enterprise?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "You can call +91 96648 61237 or fill the contact form on our website."
  }
},
{
  "@type": "Question",
  "name": "Where is your showroom located?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Our showroom is located in Gandhinagar, Gujarat."
  }
},
{
  "@type": "Question",
  "name": "What services do you provide?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "We provide EV scooters, GPS tracking systems, solar solutions, and dealership opportunities."
  }
}
]
}
</script>
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

                <a href="{{ url('/') }}">Home</a>

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
                📞 +91 96648 61237
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
                <p>+91 96648 61237</p>
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

            <form action="" id="contact_form" method="POST">
                @csrf

                <div class="form-row">

                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Full Name"
                            onblur="validatecontactName()">
                        <span class="text-danger" id="name-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email Address" name="email"
                            onblur="validatecontactEmail()">
                        <span class="text-danger" id="email-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group">
                        <input type="text" id="phone" name="phone" placeholder="Phone Number"
                            onblur="validatecontactPhone()">
                        <span class="text-danger" id="phone-error"></span>
                    </div>

                    <div class="form-group">
                        <select id="service" name="service" onblur="validatecontactService()">
                            <option value>Select Inquiry Type</option>
                            <option>EV Scooter</option>
                            <option>EV Auto</option>
                            <option>GPS Tracking</option>
                            <option>Solar System</option>
                            <option>Dealership</option>
                        </select>
                        <span class="text-danger" id="service-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <input type="text" id="subject" name="subject" placeholder="Subject"
                            onblur="validatecontactSubject()">
                        <span class="text-danger" id="subject-error"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group full">
                        <textarea id="message" name="message" placeholder="Write your message..." onblur="validatecontactMessage()"></textarea>
                        <span class="text-danger" id="message-error"></span>
                    </div>

                </div>

                <button type="button" id="contactbutton" class="contact-submit-btn">
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
        function validatecontactName() {
            var name = document.getElementById('name').value;
            if (name === '') {
                document.getElementById('name-error').innerText = 'Please enter your name';
                return false;
            } else {
                document.getElementById('name-error').innerText = '';
                return true;
            }
        }

        function validatecontactEmail() {
            var email = document.getElementById('email').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email === '') {
                document.getElementById('email-error').innerText = 'Please enter your email';
                return false;
            } else if (!emailRegex.test(email)) {
                document.getElementById('email-error').innerText = 'Please enter a valid email address';
                return false;
            } else {
                document.getElementById('email-error').innerText = '';
                return true;
            }
        }




        function validatecontactPhoneno() {
            var phoneno = document.getElementById('phone').value;
            var phoneRegex = /^[0-9]{10}$/;
            if (phoneno === '') {
                document.getElementById('phone-error').innerText = 'Please enter your phone number';

                return false;
            } else if (!phoneRegex.test(phoneno)) {
                document.getElementById('phone-error').innerText = 'Please enter a valid phone number';

                return false;
            } else {
                document.getElementById('phone-error').innerText = '';
                return true;
            }
        }

        function validatecontactService() {
            var service = document.getElementById('service').value;
            if (service === '') {
                document.getElementById('service-error').innerText = 'Please select a service';
                return false;
            } else {
                document.getElementById('service-error').innerText = '';
                return true;
            }
        }

        function validatecontactSubject() {
            var subject = document.getElementById('subject').value;
            if (subject === '') {
                document.getElementById('subject-error').innerText = 'Please enter your subject';
                return false;
            } else {
                document.getElementById('subject-error').innerText = '';
                return true;
            }
        }


        function validatecontactMessage() {
            var message = document.getElementById('message').value;
            if (message === '') {
                document.getElementById('message-error').innerText = 'Please enter your message';
                return false;
            } else {
                document.getElementById('message-error').innerText = '';
                return true;
            }
        }

        function validatecontactFields() {
            var isValid = true; // Assume all fields are valid initially

            // Validate Name
            if (!validatecontactName()) {
                isValid = false;
            }

            if (!validatecontactEmail()) {
                isValid = false;
            }

            // Validate Phone Number
            if (!validatecontactPhoneno()) {
                isValid = false;
            }

            // Validate Service
            if (!validatecontactService()) {
                isValid = false;
            }

            // Validate Subject
            if (!validatecontactSubject()) {
                isValid = false;
            }

            // Validate Message
            if (!validatecontactMessage()) {
                isValid = false;
            }

            // Return overall validation result
            return isValid;
        }



        $('#contactbutton').on('click', function() {

            if (validatecontactFields()) {
                $("#contactbutton").prop("disabled", true);
                $("#contactbutton").text("Please wait..");

                $.ajax({
                    url: '/contact-submit',
                    type: 'POST',
                    data: $("#contact_form").serialize(),
                    success: function(response) {
                        console.log(response);
                        $("#contact_form")[0].reset();
                        $('#consuccess').html(
                            '<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.' +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);

                        $("#contactbutton").prop("disabled", false);
                        $("#contactbutton").text("Send Message");
                    },
                    error: function(response) {
                        $('#consuccess').html(
                            '<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Sorry</strong> something went wrong while submitting the form.' +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);
                        console.log(response);

                        $("#contactbutton").prop("disabled", false);
                        $("#contactbutton").text("Send Message");
                    }


                })
            } else {
                $('#consuccess').html(
                    '<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">' +
                    '<strong>Please,</strong> fill the form properly.' +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>');
                setTimeout(function() {
                    $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                }, 5000);
            }
        })
    </script>
@endsection
