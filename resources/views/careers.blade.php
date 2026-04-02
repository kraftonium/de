@extends('partials.mainindex')

@push('title')
    <title>Careers at Divyashakti Enterprise | EV Jobs in Gandhinagar | Divyashakti Enterprise | Drive The Future</title>
@endpush

@push('meta')
    <meta name="description"
        content="Explore career opportunities at Divyashakti Enterprise in Gandhinagar. Apply for jobs in electric vehicles, GPS tracking, and solar technology sectors.">
    <meta name="keywords"
        content="ev jobs gandhinagar, careers divyashakti enterprise, electric vehicle jobs gujarat, solar jobs india, gps tracking jobs, marketing sales technician jobs gujarat">
    <meta name="author" content="Divyashakti Enterprise">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.thedivyashakti.com/careers">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Careers at Divyashakti Enterprise">
    <meta property="og:description"
        content="Join our team and build your future in EV, GPS and solar technology industries.">
    <meta property="og:url" content="https://www.thedivyashakti.com/careers">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Careers at Divyashakti Enterprise">
    <meta name="twitter:description" content="Apply for EV, GPS, and solar industry jobs in Gujarat.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com/careers",
"logo": "https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png",
"description": "Join Divyashakti Enterprise and build your career in EV, GPS tracking, and solar solutions industry.",
"telephone": "+919664861237",
"address": {
  "@type": "PostalAddress",
  "addressLocality": "Gandhinagar",
  "addressRegion": "Gujarat",
  "postalCode": "382421",
  "addressCountry": "IN"
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "JobPosting",
"title": "Sales Executive",
"description": "We are hiring Sales Executives for EV scooters, GPS tracking and solar solutions. Candidates should have good communication skills.",
"identifier": {
  "@type": "PropertyValue",
  "name": "Divyashakti Enterprise",
  "value": "SE-001"
},
"datePosted": "2026-03-01",
"employmentType": "Full-time",
"hiringOrganization": {
  "@type": "Organization",
  "name": "Divyashakti Enterprise",
  "sameAs": "https://www.thedivyashakti.com",
  "logo": "https://www.thedivyashakti.com/assets/images/logo/logo.png"
},
"jobLocation": {
  "@type": "Place",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Gandhinagar",
    "addressRegion": "Gujarat",
    "addressCountry": "IN"
  }
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "JobPosting",
"title": "Sales Executive",
"description": "We are hiring Sales Executives for EV scooters, GPS tracking and solar solutions. Candidates should have good communication skills.",
"identifier": {
  "@type": "PropertyValue",
  "name": "Divyashakti Enterprise",
  "value": "SE-001"
},
"datePosted": "2026-03-01",
"employmentType": "Full-time",
"hiringOrganization": {
  "@type": "Organization",
  "name": "Divyashakti Enterprise",
  "sameAs": "https://www.thedivyashakti.com",
  "logo": "https://www.thedivyashakti.com/assets/images/logo/logo.png"
},
"jobLocation": {
  "@type": "Place",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Gandhinagar",
    "addressRegion": "Gujarat",
    "addressCountry": "IN"
  }
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "ContactPage",
"name": "Career Application Form",
"description": "Apply for jobs at Divyashakti Enterprise.",
"url": "https://www.thedivyashakti.com/careers"
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
  "@type": "Question",
  "name": "How can I apply for a job at Divyashakti Enterprise?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "You can apply by filling the career form on our website."
  }
},
{
  "@type": "Question",
  "name": "What roles are available?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "We offer roles in sales, technician, and marketing positions."
  }
},
{
  "@type": "Question",
  "name": "Where is the job location?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Jobs are based in Gandhinagar, Gujarat."
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

            <h1>Careers</h1>

            <p>
                Join Divyashakti Enterprise and build your future in the
                fast-growing
                electric vehicle, GPS, and solar technology industry.
            </p>

            <div class="breadcrumb">

                <a href="{{ url('/') }}">Home</a>

                <span>›</span>

                <span class="active">Careers</span>

            </div>

        </div>

    </section>

    <!-- breadcrumb ends here -->

    <!-- careers intro starts here -->

    <section class="career-intro">

        <div class="career-left fade-up">

            <h2>Build Your Career With Divyashakti</h2>

            <p>
                Join our growing team in the electric vehicle, GPS, and
                solar industry.
                We are looking for passionate individuals who want to grow
                with modern technology.
            </p>

        </div>

        <div class="career-right fade-up">

            <div class="career-highlight">⚡ Fast Growing Industry</div>
            <div class="career-highlight">🚀 Career Growth</div>
            <div class="career-highlight">💼 Real Opportunities</div>

        </div>

    </section>

    <!-- careers intro ends here -->

    <!-- why work with us starts here -->

    <section class="career-why">

        <h2 class="center">Why Work With Us</h2>

        <div class="why-row">

            <div class="why-item fade-up">💰 Competitive Salary</div>
            <div class="why-item fade-up delay-1">📈 Growth
                Opportunities</div>
            <div class="why-item fade-up delay-2">🧠 Skill Development</div>
            <div class="why-item fade-up delay-3">🤝 Supportive Team</div>

        </div>

    </section>

    <!-- why work with us ends here -->

    <!-- open positions starts here -->

    <section class="career-jobs">

        <h2 class="center">Open Positions</h2>

        <div class="jobs-grid">

            <div class="job-card fade-up">
                <h3>Sales Executive</h3>
                <p>Experience: 1-2 Years</p>
                <a href="#apply-form">Apply Now →</a>
            </div>

            <div class="job-card fade-up delay-1">
                <h3>Service Technician</h3>
                <p>Experience: 1+ Year</p>
                <a href="#apply-form">Apply Now →</a>
            </div>

            <div class="job-card fade-up delay-2">
                <h3>Marketing Executive</h3>
                <p>Experience: Fresher / Experienced</p>
                <a href="#apply-form">Apply Now →</a>
            </div>

        </div>

    </section>

    <!-- open positions ends here -->

    <!-- cta section starts here -->

    <section class="career-cta">

        <h2>Don’t See a Role That Fits?</h2>

        <p>Send us your details and we will contact you.</p>

        <a href="#apply-form" class="cta-btn">Apply Now</a>

    </section>

    <!-- cta section ends here -->

    <!-- career form starts here -->

    <section id="apply-form" class="career-form">

        <div class="form-wrapper">

            <h2>Apply for Job</h2>

            {{-- <form method="POST" id="career_form" enctype="multipart/form-data" action="">
                @csrf

                <div class="form-row">

                    <input type="text" placeholder="Full Name" id="name" name="name"
                        onblur="validatecareerName()">
                    <span id="name-error" class="text-danger"></span>
                    <input type="email" placeholder="Email" id="email" name="email" onblur="validatecareerEmail()">
                    <span id="email-error" class="text-danger"></span>

                </div>

                <div class="form-row">

                    <input type="text" placeholder="Phone Number" id="phoneno" name="phoneno"
                        onblur="validatecareerPhoneno()">
                    <br>
                    <span class="text-danger" id="phoneno-error"></span>

                    <select name="profile" id="profile" onblur="validatecareerProfile()">
                        <option>Select Position</option>
                        <option>Sales Executive</option>
                        <option>Technician</option>
                        <option>Marketing</option>
                        <option>Don't See A Role That Fits</option>
                    </select>
                    <span id="profile-error" class="text-danger"></span>

                </div>

                <div class="form-row">

                    <input type="text" name="experience" id="experience" onblur="validatecareerExperience()"
                        placeholder="Your Experience (e.g. 2 Years)">
                    <span id="experience-error" class="text-danger"></span>

                    <input type="text" name="city" id="city" onblur="validatecareerCity()"
                        placeholder="Current City">
                    <span id="city-error" class="text-danger"></span>

                </div>

                <!-- FILE UPLOAD -->

                <div class="form-row full">

                    <label class="file-label">Upload Resume / CV</label>

                    <input type="file" class="file-input" name="resume" id="resume" onblur="validatecareerResume()">
                    <span id="resume-error" class="text-danger"></span>

                </div>

                <div class="form-row full">

                    <textarea placeholder="Tell us about yourself..." name="coverletter" id="coverletter"
                        onblur="validatecareerCoverletter()"></textarea>
                    <span id="coverletter-error" class="text-danger"></span>

                </div>

                <button type="button" id="careerbutton">Submit Application →</button>

            </form> --}}
            <style>
                /* FIX FIELD */

                .field {
                    display: flex;
                    flex-direction: column;
                    flex: 1;
                }

                /* FIX ERROR POSITION */

                .text-danger {
                    display: block;
                    font-size: 12px;
                    margin-top: 5px;
                    color: red
                }

                /* REMOVE EXTRA SPACE IF EMPTY */

                .text-danger:empty {
                    display: none;
                }
            </style>


            <form method="POST" id="career_form" enctype="multipart/form-data" action="">
                @csrf

                <div class="form-row">

                    <div class="field">
                        <input type="text" placeholder="Full Name" id="name" name="name"
                            onblur="validatecareerName()">
                        <span id="name-error" class="text-danger"></span>
                    </div>

                    <div class="field">
                        <input type="email" placeholder="Email" id="email" name="email"
                            onblur="validatecareerEmail()">
                        <span id="email-error" class="text-danger"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="field">
                        <input type="text" placeholder="Phone Number" id="phoneno" name="phoneno"
                            onblur="validatecareerPhoneno()">
                        <span id="phoneno-error" class="text-danger"></span>
                    </div>

                    <div class="field">
                        <select name="profile" id="profile" onblur="validatecareerProfile()">
                            <option>Select Position</option>
                            <option>Sales Executive</option>
                            <option>Technician</option>
                            <option>Marketing</option>
                            <option>Don't See A Role That Fits</option>
                        </select>
                        <span id="profile-error" class="text-danger"></span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="field">
                        <input type="text" name="experience" id="experience" onblur="validatecareerExperience()"
                            placeholder="Your Experience (e.g. 2 Years)">
                        <span id="experience-error" class="text-danger"></span>
                    </div>

                    <div class="field">
                        <input type="text" name="city" id="city" onblur="validatecareerCity()"
                            placeholder="Current City">
                        <span id="city-error" class="text-danger"></span>
                    </div>

                </div>

                <!-- FILE -->

                <div class="form-row full">

                    <div class="field">
                        <label class="file-label">Upload Resume / CV</label>
                        <input type="file" class="file-input" name="resume" id="resume"
                            onblur="validatecareerResume()">
                        <span id="resume-error" class="text-danger"></span>
                    </div>

                </div>

                <!-- TEXTAREA -->

                <div class="form-row full">

                    <div class="field">
                        <textarea placeholder="Tell us about yourself..." name="coverletter" id="coverletter"
                            onblur="validatecareerCoverletter()"></textarea>
                        <span id="coverletter-error" class="text-danger"></span>
                    </div>

                </div>

                <button type="button" id="careerbutton">Submit Application →</button>

            </form>
            <div id="consuccess"></div>

        </div>

    </section>

    <!-- career form ends here -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
        function validatecareerName() {
            var name = document.getElementById('name').value;
            if (name === '') {
                document.getElementById('name-error').innerText = 'Please enter your name';
                return false;
            } else {
                document.getElementById('name-error').innerText = '';
                return true;
            }
        }

        function validatecareerEmail() {
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




        function validatecareerPhoneno() {
            var phoneno = document.getElementById('phoneno').value;
            var phoneRegex = /^[0-9]{10}$/;
            if (phoneno === '') {
                document.getElementById('phoneno-error').innerText = 'Please enter your phone no';

                return false;
            } else if (!phoneRegex.test(phoneno)) {
                document.getElementById('phoneno-error').innerText = 'Please enter a valid phone no';

                return false;
            } else {
                document.getElementById('phoneno-error').innerText = '';
                return true;
            }
        }

        // function validatecareerProfile() {
        //     var profile = document.getElementById('profile').value;
        //     if (profile === 'Select') {
        //         document.getElementById('profile-error').innerText = 'Please select your profile';
        //         return false;
        //     } else {
        //         document.getElementById('profile-error').innerText = '';
        //         return true;
        //     }
        // }

        function validatecareerExperience() {
            var experience = document.getElementById('experience').value;
            if (experience === '') {
                document.getElementById('experience-error').innerText = 'Please select your experience';
                return false;
            } else {
                document.getElementById('experience-error').innerText = '';
                return true;
            }
        }

        function validatecareerCity() {
            var city = document.getElementById('city').value;
            if (city === '') {
                document.getElementById('city-error').innerText = 'Please select your city';
                return false;
            } else {
                document.getElementById('city-error').innerText = '';
                return true;
            }
        }


        function validatecareerResume() {
            var fileInput = document.getElementById('resume');
            var file = fileInput.files[0];

            if (!file) {
                document.getElementById('resume-error').innerText = 'Please select a file';
                return false;
            } else {
                document.getElementById('resume-error').innerText = '';
                return true;
            }
        }



        function validatecareerCoverletter() {
            var message = document.getElementById('coverletter').value;
            if (message === '') {
                document.getElementById('coverletter-error').innerText = 'Please enter your message';
                return false;
            } else {
                document.getElementById('coverletter-error').innerText = '';
                return true;
            }
        }


        function validatecareerProfile() {
            var profile = document.getElementById('profile').value;
            if (profile === 'Select Position') {
                document.getElementById('profile-error').innerText = 'Please select your profile';
                return false;
            } else {
                document.getElementById('profile-error').innerText = '';
                return true;
            }
        }

        function validatecontactFields() {
            var isValid = true; // Assume all fields are valid initially

            // Validate Name
            if (!validatecareerName()) {
                isValid = false;
            }

            if (!validatecareerEmail()) {
                isValid = false;
            }

            // Validate Phone Number
            if (!validatecareerPhoneno()) {
                isValid = false;
            }

            if (!validatecareerExperience()) {
                isValid = false;
            }

            if (!validatecareerProfile()) {
                isValid = false;
            }

            if (!validatecareerCity()) {
                isValid = false;
            }


            if (!validatecareerResume()) {
                isValid = false;
            }

            // Validate Message
            if (!validatecareerCoverletter()) {
                isValid = false;
            }

            // Return overall validation result
            return isValid;
        }





        $('#careerbutton').on('click', function() {

            if (validatecontactFields()) {
                $("#careerbutton").prop("disabled", true);
                $("#careerbutton").text("Please wait..");
                var formData = new FormData($('#career_form')[0]);

                $.ajax({
                    url: '/send-career',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    // data:$("#career_form").serialize(),
                    success: function(response) {
                        console.log(response);
                        $("#career_form")[0].reset();
                        $('#consuccess').html(
                            '<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.' +
                            // '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);

                        $("#careerbutton").prop("disabled", false);
                        $("#careerbutton").text("Send Message");
                    },
                    error: function(response) {
                        $('#consuccess').html(
                            '<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">' +
                            '<strong>Sorry</strong> something went wrong while submitting the form.' +
                            // '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            '</div>');
                        setTimeout(function() {
                            $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                        }, 5000);
                        console.log(response);

                        $("#careerbutton").prop("disabled", false);
                        $("#careerbutton").text("Send Message");
                    }


                })
            } else {
                $('#consuccess').html(
                    '<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">' +
                    '<strong>Please,</strong> fill the form properly.' +
                    // '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                    '</div>');
                setTimeout(function() {
                    $('.alert').alert('close'); // Bootstrap 5 way of closing alert
                }, 5000);
            }
        })
    </script>
@endsection
