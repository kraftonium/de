@extends('partials.mainindex')

@push('title')
    <title>Contact Us | Divyashakti Enterprise</title>
@endpush

@push('meta')
<meta property="og:type" content="website" />
<meta property="og:title" content="Contact Us | Divyashakti Enterprise" />
<meta property="og:description"
    content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
<meta property="og:image" content="{{asset('assets/img/logo/logo.png')}}" />
<meta property="og:url" content="https://www.thedivyashakti.com/contact-us" />
<meta property="og:site_name" content="Divyashakti Enterprise" />
<link rel="canonical" href="https://www.thedivyashakti.com/contact-us">
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
                    <h2>Contact Us</h2>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-area pt-130">
            
            <div class="all-info ptb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-info-wrapper">
                                <h4 class="contact-title">INFORMATION</h4>
                                <div class="communication-info">
                                    <div class="single-communication">
                                        <div class="communication-icon">
                                            <i class="ti-home" aria-hidden="true"></i>
                                        </div>
                                        <div class="communication-text">
                                            <h4>Address:</h4>
                                            <p><a href="https://maps.app.goo.gl/V1X6fhiU4zQsziVv5">B 102 Swagat Flamingo, Sarkhej - Gandhinagar Hwy, near Sargasan, Chokdi, Gujarat 382421</a></p>
                                        </div>
                                    </div>
                                    <div class="single-communication">
                                        <div class="communication-icon">
                                            <i class="ti-mobile" aria-hidden="true"></i>
                                        </div>
                                        <div class="communication-text">
                                            <h4>Phone:</h4>
                                            <p><a href="tel:+919737561301">+91 97375 61301</a></p>
                                        </div>
                                    </div>
                                    <div class="single-communication">
                                        <div class="communication-icon">
                                            <i class="ti-email" aria-hidden="true"></i>
                                        </div>
                                        <div class="communication-text">
                                            <h4>Email:</h4>
                                            <p><a href="mailto:contact@thedivyashakti.com">contact@thedivyashakti.com</a></p>
                                        </div>
                                    </div>
                                    <div class="single-communication">
                                        <div class="communication-icon">
                                            <i class="ti-world" aria-hidden="true"></i>
                                        </div>
                                        <div class="communication-text">
                                            <h4>Website:</h4>
                                            <p><a href="https://www.thedivyashakti.com"
                                                    target="_blank">www.thedivyashakti.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-message-wrapper">
                                <h4 class="contact-title">GET IN TOUCH</h4>
                                <div class="contact-message">
                                    <form action="" id="contact_form" method="POST"
                                        class="contact-form-custom">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="name" id="name" placeholder="Full Name" type="text" onblur="validatecontactName()">
                                                    <span class="text-danger" id="name-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="email" placeholder="Email Address" id="email" type="email" onblur="validatecontactEmail()">
                                                    <span class="text-danger" id="email-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="phoneno" id="phoneno" placeholder="Phone No" type="text" onblur="validatecontactPhoneno()">
                                                    <span class="text-danger" id="phoneno-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="subject" placeholder="Subject" id="subject" type="text" onblur="validatecontactSubject()">
                                                    <span class="text-danger" id="subject-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-form-style">
                                                    <textarea name="message" placeholder="Message" id="message" onblur="validatecontactMessage()"></textarea>
                                                    <span class="text-danger" id="message-error"></span>
                                                    
                                                </div>
                                                <div class="mt-3"><button class="submit cr-btn btn-style" id="contactbutton" type="button"><span>SEND
                                                            MESSAGE</span></button></div>
                                            </div>
                                            <div id="consuccess"></div>
                                        </div>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="contact-map">
                    <div id="" class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7334.923790175774!2d72.59874189357907!3d23.18983180000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c298927012871%3A0x53b0a7f82e2a170a!2sSwagat%20Flamingo!5e0!3m2!1sen!2sin!4v1729157602676!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        

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



$('#contactbutton').on('click',function(){

  if(validatecontactFields()){
$("#contactbutton").prop("disabled", true);
$("#contactbutton").text("Please wait..");

  $.ajax({
    url:'/contact-submit',
    type:'POST',
    data:$("#contact_form").serialize(),
    success:function(response){
      console.log(response);
      $("#contact_form")[0].reset();
      $('#consuccess').html('<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
  $('.alert').alert('close'); // Bootstrap 5 way of closing alert
}, 5000);

      $("#contactbutton").prop("disabled", false);
            $("#contactbutton").text("Send Message");
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

    $("#contactbutton").prop("disabled", false);
            $("#contactbutton").text("Send Message");
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