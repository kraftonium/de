 <div class="newsletter-area pt-125">
                <div class="container">
                    <div class="newsletter-wrapper-all theme-bg-2">
                        <div class="row">
                            <div class="col-lg-5 col-12 col-md-12">
                                <div class="newsletter-img bg-img"
                                    style="background-image: url(assets/img/banner/newsletter-bg.png)">
                                    <!-- <img alt="image" src="assets/img/team/newsletter-img.png"> -->
                                    <img alt="image" src="assets/img/home/breeze-removebg-preview.png">
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 col-md-12">
                                <div class="newsletter-wrapper text-center">
                                    <div class="newsletter-title">
                                        <h3>Subscribe our newsletter</h3>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form
                                            action=""
                                            method="post" id="newsletter_form" name="newsletter_form"
                                            class="validate">
                                            @csrf
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="text" name="nlphoneno" id="nlphoneno" class=""
                                                    placeholder="Enter your phone here..." required>
                                                    
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                {{-- <div class="mc-news" aria-hidden="true">
                                                    
                                                </div> --}}
                                                <div class="clear">
                                                    {{-- <input type="button"  value="Subscribe" name="subscribe"
                                                        id="newsletterbutton" class="button"> --}}
                                                        <button type="button" name="subscribe"
                                                        id="newsletterbutton" class="button">Subscribe</button>
                                                        
                                                    </div>
                                                    
                                            </div>
                                            
                                        </form>
                                        <span class="text-danger" id="nlphoneno-error"></span>
                                        <div id=
                                        "nlconsuccess"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <footer>
        <div class="footer-top pt-210 pb-98 theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-widget mb-30">
                            <div class="footer-logo">
                                <a href="{{url('/')}}">
                                    <img src="assets/img/logo/logo-white.png" alt="">
                                </a>
                            </div>
                            <div class="footer-about">
                                <p><span>DIVYASHAKTI ENTERPRISE</span> the most largest EV Scooter Showroom in the
                                    gandhinagar can
                                    serve you latest qulity of EV Scooter also you buy dealership of EV Scooter</p>

                            </div>
                            <div class="footer-social-media">
                                <ul>
                                    <li class="facebook"><a
                                            href="https://www.facebook.com/profile.php?id=61561142282586"><i
                                                class="icofont icofont-social-facebook"></i></a></li>
                                    <li class="twitter"><a href="https://www.instagram.com/thedivyashakti"><i class="icofont icofont-social-instagram"></i></a>
                                    </li>
                                    <li class="pinterest"><a href="mailto:contact@thedivyashakti.com"><i class="icofont icofont-email"></i></a></li>
                                    <li class="linkedin"><a href="https://www.linkedin.com/company/divyashakti-enterprise/"><i class="icofont icofont-social-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-widget mb-30 pl-60">
                            <div class="footer-widget-title">
                                <h3>QUICK LINK</h3>
                            </div>
                            <div class="quick-links">
                                <ul>
                                    <li><a href="{{url('/about-us')}}">About us</a></li>
                                    <li><a href="{{url('/dealership')}}">Dealership</a></li>
                                    <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                                    <li><a href="{{url('/terms-and-conditions')}}">Terms & Conditions</a></li>
                                    <li><a href="{{url('/career')}}">Career</a></li>
                                    <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-widget mb-30 ">
                            <div class="footer-widget-title">
                                <h3> PRODUCTS</h3>
                            </div>
                            <div class="quick-links">
                                <ul>
                                    <li><a href="{{url('/gps')}}">GPS</a></li>
                                    <li><a href="{{url('/vehicles')}}">Electric Vehicles</a></li>
                                    <li><a href="{{url('/solar')}}">Solar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-widget mb-30">
                            <div class="footer-widget-title">
                                <h3>CONTACT INFO</h3>
                            </div>
                            <div class="food-info-wrapper">
                                <div class="food-address">
                                    <div class="food-info-title">
                                        <span>Address</span>
                                    </div>
                                    <div class="food-info-content">
                                        <a href="https://maps.app.goo.gl/V1X6fhiU4zQsziVv5">B 102 Swagat Flamingo, Sarkhej - Gandhinagar Hwy, near Sargasan, Chokdi, Gujarat 382421.</a>
                                    </div>
                                </div>
                                <div class="food-address">
                                    <div class="food-info-title">
                                        <span>Phone</span>
                                    </div>
                                    <div class="food-info-content">
                                        <a href="tel:+919737561301">+91 97375 61301</a>
                                    </div>
                                </div>
                                <div class="food-address">
                                    <div class="food-info-title">
                                        <span>Email</span>
                                    </div>
                                    <div class="food-info-content">
                                        <a href="mailto:contact@divyashakti.in">contact@thedivyashakti.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ptb-35 black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="copyright">
                            <p>© 2024 DIVYASHAKTI ENTERPRISE, Inc. All rights reserved.
                                Powered By <a href="https://www.divineinfoverse.com" target="_blank"> DIVINE
                                    INFOVERSE</a></p>
                        </div>
                    </div>
                    <!-- <div class="col-md-4 col-12">
                        <div class="footer-payment-method">
                            <a href="#"><img alt="" src="assets/img/icon-img/payment.png"></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
    
    </div>
    <!-- all js here -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/custom-main.js"></script>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script>


function validatecareerNLPhoneno() {
    var nlphoneno = document.getElementById('nlphoneno').value;
    var nlphoneRegex = /^[0-9]{10}$/;
    if (nlphoneno === '') {
        document.getElementById('nlphoneno-error').innerText = 'Please enter your phone no';

        return false;
    } else if (!nlphoneRegex.test(nlphoneno)) {
        document.getElementById('nlphoneno-error').innerText = 'Please enter a valid phone no';

        return false;
    } else {
        document.getElementById('nlphoneno-error').innerText = '';
        return true;
    }
}


function validatecontactNLFields() {
    var isValid = true; // Assume all fields are valid initially

    // Validate Phone Number
    if (!validatecareerNLPhoneno()) {
        isValid = false;
    }

    // Return overall validation result
    return isValid;
}



$('#newsletterbutton').on('click',function(){

  if(validatecontactNLFields()){
//   $("#contactbutton").prop("disabled", true);
//       $("#contactbutton").val("Please wait..");
$("#newsletterbutton").prop("disabled", true);
$("#newsletterbutton").text("Please wait..");
var formData = new FormData($('#newsletter_form')[0]);

  $.ajax({
    url:'/send-newsletter',
    type:'POST',
    data:formData,
    contentType: false,
            processData: false,
    // data:$("#career_form").serialize(),
    success:function(response){
      console.log(response);
      $("#newsletter_form")[0].reset();
      $('#nlconsuccess').html('<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
  $('.alert').alert('close'); // Bootstrap 5 way of closing alert
}, 5000);

      $("#newsletterbutton").prop("disabled", false);
            $("#newsletterbutton").text("Send Message");
    },
    error:function(response){
      $('#nlconsuccess').html('<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Sorry</strong> something went wrong while submitting the form.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
        $('.alert').alert('close'); // Bootstrap 5 way of closing alert
        }, 5000);
      console.log(response);

    $("#newsletterbutton").prop("disabled", false);
            $("#newsletterbutton").text("Send Message");
  }


  })
}
else{
  $('#nlconsuccess').html('<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Please,</strong> fill the form properly.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
        $('.alert').alert('close'); // Bootstrap 5 way of closing alert
        }, 5000);
}
})
</script>


{{-- lucky draw code starts here --}}

<script>


function validatecontactLDName() {
    var ldname = document.getElementById('ldname').value;
    if (ldname === '') {
        document.getElementById('ldname-error').innerText = 'Please enter your name';
        return false;
    } else {
        document.getElementById('ldname-error').innerText = '';
        return true;
    }
}

function validatecontactLDPhoneno() {
    var ldphoneno = document.getElementById('ldphoneno').value;
    var ldphoneRegex = /^[0-9]{10}$/;
    if (ldphoneno === '') {
        document.getElementById('ldphoneno-error').innerText = 'Please enter your phone no';

        return false;
    } else if (!ldphoneRegex.test(ldphoneno)) {
        document.getElementById('ldphoneno-error').innerText = 'Please enter a valid phone no';

        return false;
    } else {
        document.getElementById('ldphoneno-error').innerText = '';
        return true;
    }
}

function validatecontactLDCity() {
    var ldcity = document.getElementById('ldcity').value;
    if (ldcity === '') {
        document.getElementById('ldcity-error').innerText = 'Please enter your city';
        return false;
    } else {
        document.getElementById('ldcity-error').innerText = '';
        return true;
    }
}


function validatecontactLDFields() {
    var isValid = true; // Assume all fields are valid initially

    // Validate Name
    if (!validatecontactLDName()) {
        isValid = false;
    }

    if (!validatecontactLDCity()) {
        isValid = false;
    }

    // Validate Phone Number
    if (!validatecontactLDPhoneno()) {
        isValid = false;
    }

    

    // Return overall validation result
    return isValid;
}



$('#ldbutton').on('click',function(){

  if(validatecontactLDFields()){
//   $("#contactbutton").prop("disabled", true);
//       $("#contactbutton").val("Please wait..");
$("#ldbutton").prop("disabled", true);
$("#ldbutton").text("Please wait..");

  $.ajax({
    url:'/send-lucky-draw',
    type:'POST',
    data:$("#ld_form").serialize(),
    success:function(response){
      console.log(response);
      $("#ld_form")[0].reset();
      $('#ldconsuccess').html('<div class="alert alert-success alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Successfully</strong> Your Message Has Been Sent Please Wait For Community To Response.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
  $('.alert').alert('close'); // Bootstrap 5 way of closing alert
}, 5000);

      $("#ldbutton").prop("disabled", false);
            $("#ldbutton").text("Send Message");
    },
    error:function(response){
      $('#ldconsuccess').html('<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Sorry</strong> something went wrong while submitting the form.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
        $('.alert').alert('close'); // Bootstrap 5 way of closing alert
        }, 5000);
      console.log(response);

    $("#ldbutton").prop("disabled", false);
            $("#ldbutton").text("Send Message");
  }


  })
}
else{
  $('#ldconsuccess').html('<div class="alert alert-danger alert-dismissible fade show marg text-dark" role="alert">'+
        '<strong>Please,</strong> fill the form properly.'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
      '</div>');
      setTimeout(function() {
        $('.alert').alert('close'); // Bootstrap 5 way of closing alert
        }, 5000);
}
})
</script>





</body>

</html>