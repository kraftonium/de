@extends('partials.mainindex')

@push('title')
    <title>GPS | Divyashakti Enterprise</title>
@endpush

@push('meta')
<meta property="og:type" content="website" />
<meta property="og:title" content="GPS | Divyashakti Enterprise" />
<meta property="og:description"
    content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
<meta property="og:image" content="{{asset('assets/img/logo/logo.png')}}" />
<meta property="og:url" content="https://www.thedivyashakti.com/gps" />
<meta property="og:site_name" content="Divyashakti Enterprise" />
<link rel="canonical" href="https://www.thedivyashakti.com/gps">
@endpush

@push('logo')
    <a class="logo-sticky-none" href="{{url('/')}}"><img alt="Logo"
                                            src="assets/img/logo/logo-white.png"></a>
                                    <a class="logo-for-sticky" href="{{url('/')}}"><img alt="Logo"
                                            src="assets/img/logo/logo.png"></a>
@endpush

@section('main-section')

<!-- ----- POPUP DISPLAY START ----- -->
    <!-- Modal trigger button (Optional if you want manual trigger) -->
    <button type="button" class="btn btn-primary btn-lg d-none" data-bs-toggle="modal" data-bs-target="#modalId">
        Launch
    </button>
    <!-- Modal Body -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollablee modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <!-- <div class="modal-headerr py-3 font-weight-bold ">
                    <h4 class="modal-title text-center" id="modalTitleId">LUCKY DROW OF DIVYASHAKTI ENTERPRISE</h4>
                </div> -->
                <div class="modal-bodyy popup-modal-body">
                    <div class="popup-image">
                        <img src="assets/img/popup/popup.png" alt="Lucky Draw Image">
                    </div>
                    <div class="popup-content">
                        <h2 class="text-dark"><b>LUCKY DRAW</b></h2>
                        <div class="form-center">
                            <h5 class="mb-4"><b> Won Electric Scooter Or Gold </b></h5>
                            <form action="" class="popup-form" id="ld_form" method="post">
                                @csrf
                                <input type="text" name="ldname" id="ldname" placeholder="Your Name" onblur="validatecontactLDName()">
                                <span class="text-danger" id="ldname-error"></span>
                                <input type="text" name="ldphoneno" id="ldphoneno" placeholder="Your Phone No" maxlength="10" onblur="validatecontactLDPhoneno()">
                                <span class="text-danger" id="ldphoneno-error"></span>
                                <input type="text" name="ldcity" id="ldcity" placeholder="Your City" onblur="validatecontactLDCity()">
                                <span class="text-danger" id="ldcity-error"></span>
                                <div class="modal-btns">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-warning" id="ldbutton">Apply</button>
                                </div>
                                <div id="ldconsuccess"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----- POPUP DISPLAY END ----- -->



        <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h2>GPS Page </h2>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>GPS Page </li>
                    </ul>
                </div>
            </div>
        </div>


    <section class="about-gps">

        <div class="gps-hero">
            <div class="about-gps-content">
                <h3>About GPS</h3>
                <p><i class='fas fa-bullseye mr-10'></i> We have taken the standard of GPS solutions to international class in India, almost single handedly. Our continuous improvement, dedication to bring the ultra modern solution to our clients at an inexpensive rate and never compromising on the quality factor has made us the most respected name in this area with support of 31 team members</p>
                <p><i class='fas fa-bullseye mr-10'></i> GPS is not a very complex technology. The piece of GPS tracker system which is installed in your car, is directly linked to the satellites above with 30 Days Live Reports Backup with us. get report at any time with 99% Accuracy in fuel. We got expertise in GPS Product and Tracking solution and expanding our product range to other technology product which would help to save water , environment and energy</p>
            </div>
            <div class="about-gps-img">
                <img src="./assets/img/gps/gps-hero.webp" alt="gps-hero">
            </div>
        </div>
        
        <div class="gps-vision">
            <h3>Vision</h3>
            <p><i class='fas fa-bullseye mr-10'></i> People are not well educated with importance of GPS Tracking device , Home Automation Instrument as well Security & Surveillance System in Market</p>
        </div>

        <div class="gps-mission">
            <h3>Mission</h3>
            <p><i class='fas fa-bullseye mr-10'></i> Farming Activity still on traditional methods include there is not adequate water supply to crop as well some time over water supply to crop and those activities need to be automated to simplify life of Farmers.</p>
        </div>


        <div class="gps-highlights">
            <div class="highlight-img">
                <img src="./assets/img/gps/gps-highlight.jpg" alt="gps-highlight">
            </div>
            <div class="highlights-content">
                <h3>Key Highlights Of GPS</h3>
                <p>We are continuously focus on Automation and Innovation on GPS tracking device and Home Automation Solution which helps society to simplify their lives</p>
                <div class="highlights-year">
                        <p><i class='fas fa-bullseye mr-10'></i> We have installed more than 60 Devices in ONGC , Khambhat.</p>
                        <p><i class='fas fa-bullseye mr-10'></i> We have also installed more than 8000 Devices in Gujarat.</p>
                        <p><i class='fas fa-bullseye mr-10'></i>We have installed security system in Hospitals and Government Schools.</p>
                        <p><i class='fas fa-bullseye mr-10'></i>Installation of GPS Devices in Gujarat Nagar Palika Infrastructure.</p>
                        <p><i class='fas fa-bullseye mr-10'></i>
                            Installation of GPS Device Government sector like GEMI , Sachivalay , Udhyog Bhavan.
                        </p>
                        <p><i class='fas fa-bullseye mr-10'></i>Installation of our GPS Device in more than 70 % reupdated Transport Companies
                        </p>
                        <p><i class='fas fa-bullseye mr-10'></i>
                            We have also sold more than 13000 Devices in Gujarat.
                        </p>
                        <p><i class='fas fa-bullseye mr-10'></i>
                            We have installed security system in Hospitals and Government Schools and Govt. Offices
                        </p>
                        <p><i class='fas fa-bullseye mr-10'></i>We have sold LED recharable Bulb + Solar Street Lights in Uttar Gujarat, Madhya Gujarat and also Ahmedabad- Gandhinagar by 250 Dealers. 
                        </p>
                        <p><i class='fas fa-bullseye mr-10'></i>We have sold LED recharable Bulb + Solar Street Lights in South Gujarat, Saurastra, and kutch by 150 Dealers.
                        </p>
                </div>
            </div>
        </div>

    </section>


    <section class="gps-contact-form">
        <div class="col-lg-9">
            <div class="contact-message-wrapper">
                <h4 class="contact-title contact-title-custom">Get Your GPS</h4>
                <div class="contact-message">
                    <form id="gps_form" action="" method="post"
                        class="contact-form-custom">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="name" id="name" placeholder="Full Name" type="text" onblur="validatecareerName()">
                                    <span class="text-danger" id="name-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="email" id="email" placeholder="Email Address" type="email" onblur="validatecareerEmail()">
                                    <span class="text-danger" id="email-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style mb-20">
                                    <input name="phoneno" id="phoneno" placeholder="Phone No" type="text" maxlength="10" onblur="validatecareerPhoneno()" >
                                    <span class="text-danger" id="phoneno-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style mb-20">
                                    <input name="subject" id="subject" placeholder="Subject" type="text" onblur="validatecareerSubject()">
                                    <span class="text-danger" id="subject-error"></span>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="city" id="city" placeholder="City" type="text" onblur="validatecareerCity()">
                                    <span class="text-danger" id="city-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="state" id="state" placeholder="State" type="text" onblur="validatecareerState()">
                                    <span class="text-danger" id="state-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style">
                                    <textarea name="message" id="message" placeholder="Message" onblur="validatecareerMessage()"></textarea>
                                    <span class="text-danger" id="message-error"></span>
                                    <button class="submit cr-btn btn-style" type="button" id="gpsbutton"><span>SUBMIT
                                            </span></button>
                                </div>
                            </div>
                            <div id="consuccess"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

function validatecareerSubject() {
    var subject = document.getElementById('subject').value;
    // console.log("Selected Dealership: ", subject); // Check if the value is being logged correctly
    if (subject === '') {
        document.getElementById('subject-error').innerText = 'Please enter the subject';
        return false;
    } else {
        document.getElementById('subject-error').innerText = '';
        return true;
    }
}

function validatecareerCity() {
    var city = document.getElementById('city').value;
    if (city === '') {
        document.getElementById('city-error').innerText = 'Please enter your city';
        return false;
    } else {
        document.getElementById('city-error').innerText = '';
        return true;
    }
}

function validatecareerState() {
    var state = document.getElementById('state').value;
    if (state === '') {
        document.getElementById('state-error').innerText = 'Please enter your state';
        return false;
    } else {
        document.getElementById('state-error').innerText = '';
        return true;
    }
}


function validatecareerMessage() {
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


    if (!validatecareerSubject()) {
        isValid = false;
    }


    if (!validatecareerCity()) {
        isValid = false;
    }

    // Validate Message
    if (!validatecareerState()) {
        isValid = false;
    }

    if (!validatecareerMessage()) {
        isValid = false;
    }

    // Return overall validation result
    return isValid;
}



$('#gpsbutton').on('click',function(){

  if(validatecontactFields()){
//   $("#contactbutton").prop("disabled", true);
//       $("#contactbutton").val("Please wait..");
$("#gpsbutton").prop("disabled", true);
$("#gpsbutton").text("Please wait..");
var formData = new FormData($('#gps_form')[0]);

  $.ajax({
    url:'/send-gps',
    type:'POST',
    data:formData,
    contentType: false,
            processData: false,
    // data:$("#career_form").serialize(),
    success:function(response){
      console.log(response);
      $("#gps_form")[0].reset();
      $('#consuccess').html('<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
  $('.alert').alert('close'); // Bootstrap 5 way of closing alert
}, 5000);

      $("#gpsbutton").prop("disabled", false);
            $("#gpsbutton").text("Send Message");
    },
    error:function(response){
      $('#consuccess').html('<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Sorry</strong> something went wrong while submitting the form.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
        $('.alert').alert('close'); // Bootstrap 5 way of closing alert
        }, 5000);
      console.log(response);

    $("#gpsbutton").prop("disabled", false);
            $("#gpsbutton").text("Send Message");
  }


  })
}
else{
  $('#consuccess').html('<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Please,</strong> fill the form properly.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
        $('.alert').alert('close'); // Bootstrap 5 way of closing alert
        }, 5000);
}
})
</script>




@endsection