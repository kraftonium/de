@extends('partials.mainindex')

@push('title')
    <title>Careers | Divyashakti Enterprise | Drive The Future</title>
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

                <a href="index.html">Home</a>

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

            <form>

                <div class="form-row">

                    <input type="text" placeholder="Full Name">
                    <input type="email" placeholder="Email">

                </div>

                <div class="form-row">

                    <input type="text" placeholder="Phone Number">

                    <select>
                        <option>Select Position</option>
                        <option>Sales Executive</option>
                        <option>Technician</option>
                        <option>Marketing</option>
                        <option>Don't See A Role That Fits</option>
                    </select>

                </div>

                <div class="form-row">

                    <input type="text" placeholder="Your Experience (e.g. 2 Years)">

                    <input type="text" placeholder="Current City">

                </div>

                <!-- FILE UPLOAD -->

                <div class="form-row full">

                    <label class="file-label">Upload Resume / CV</label>

                    <input type="file" class="file-input">

                </div>

                <div class="form-row full">

                    <textarea placeholder="Tell us about yourself..."></textarea>

                </div>

                <button>Submit Application →</button>

            </form>

        </div>

    </section>

    <!-- career form ends here -->
@endsection
