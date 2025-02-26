@extends('partials.mainindex')

@push('title')
    <title>Career | Divyashakti Enterprise</title>
@endpush

@push('meta')
<meta property="og:type" content="website" />
<meta property="og:title" content="Career | Divyashakti Enterprise" />
<meta property="og:description"
    content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
<meta property="og:image" content="{{asset('assets/img/logo/logo.png')}}" />
<meta property="og:url" content="https://www.thedivyashakti.com/career" />
<meta property="og:site_name" content="Divyashakti Enterprise" />
<link rel="canonical" href="https://www.thedivyashakti.com/career">
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
                    <h2>Careers Page </h2>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Careers Page </li>
                    </ul>
                </div>
            </div>
        </div>

    <section class="carrers-contact-form ">


        <div class="col-lg-9">
            <div class="contact-message-wrapper">
                <h4 class="contact-title contact-title-custom">Find Your Jobs</h4>
                <div class="contact-message">
                    <form id="career_form" action="" method="post"
                        class="contact-form-custom" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="name" placeholder="Your Name" id="name" type="text" onblur="validatecareerName()">
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
                                    <input name="phoneno" id="phoneno" placeholder="Phone No" type="text" maxlength="10" onblur="validatecareerPhoneno()">
                                    <span class="text-danger" id="phoneno-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12  ">
                                <div class="contact-form-style mb-20 ">
                                     <select name="profile" id="profile" onblur="validatecareerProfile()">
                                        <option value="Select Position">Select Position</option>
                                        <option value="BDM">BDM</option>
                                        <option value="Sales Person">Sales Person</option>
                                     </select>
                                     <span class="text-danger" id="profile-error"></span>
                                </div>
                            </div>

                            <div class="col-lg-12"></div>
                                <div class="contact-form-style mb-20 ">
                                    <input name="resume" id="resume" placeholder="Resume" type="file" class="pt-2" onblur="validatecareerResume()">
                                     <span class="text-danger" id="resume-error"></span>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-12">
                                <div class="contact-form-style">
                                    <textarea name="coverletter" id="coverletter" placeholder="Cover Letter" onblur="validatecareerCoverletter()"></textarea>
                                     <span class="text-danger" id="coverletter-error"></span>
                                    <button class="submit cr-btn btn-style mt-3" type="button" id="careerbutton"><span>SUBMIT
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
    if (profile === 'Select') {
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


    if (!validatecareerProfile()) {
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



$('#careerbutton').on('click',function(){

  if(validatecontactFields()){
$("#careerbutton").prop("disabled", true);
$("#careerbutton").text("Please wait..");
var formData = new FormData($('#career_form')[0]);

  $.ajax({
    url:'/send-career',
    type:'POST',
    data:formData,
    contentType: false,
            processData: false,
    // data:$("#career_form").serialize(),
    success:function(response){
      console.log(response);
      $("#career_form")[0].reset();
      $('#consuccess').html('<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
  $('.alert').alert('close'); // Bootstrap 5 way of closing alert
}, 5000);

      $("#careerbutton").prop("disabled", false);
            $("#careerbutton").text("Send Message");
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

    $("#careerbutton").prop("disabled", false);
            $("#careerbutton").text("Send Message");
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