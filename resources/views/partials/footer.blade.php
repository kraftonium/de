 <!-- footer starts here -->

 <footer class="footer">

     <div class="footer-container">

         <!-- LEFT -->

         <div class="footer-about">

             <div class="footer-logo">

                 <img src="{{ asset('assets/images/logo/logo-only-1.png') }}" alt="Divyashakti Enterprise Logo">

                 <h2>Divyashakti Enterprise</h2>

             </div>

             <p>
                 Trusted EV showroom in Gandhinagar offering electric
                 scooters,
                 EV autos, GPS solutions, solar products and smart
                 automation systems.
             </p>

         </div>

         <!-- LINKS -->

         <div class="footer-links">

             <h3>Quick Links</h3>

             <ul>
                 <li><a href="{{ url('/') }}">Home</a></li>
                 <li><a href="{{ url('/about-us') }}">About Us</a></li>
                 <li><a href="{{ url('/ev-scooters') }}">EV Scooters</a></li>
                 <li><a href="{{ url('/dealership') }}">Dealership</a></li>
                 <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                 <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                 <li><a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a></li>
             </ul>

         </div>

         <!-- SERVICES -->

         <div class="footer-links">

             <h3>Our Services</h3>

             <ul>
                 <li><a href="{{ url('/ev-scooters') }}">EV Scooters</a></li>
                 <li><a href="{{ url('/solar') }}">Solar Installation</a></li>
                 <li><a href="{{ url('/gps') }}">GPS Tracker</a></li>
                 <li><a href="{{ url('/dealership') }}">Get EV Dealership</a></li>
                 <li><a href="{{ url('/careers') }}">Careers</a></li>
             </ul>

         </div>

         <!-- CONTACT -->

         <div class="footer-contact">

             <h3>Contact Us</h3>

             <p>📞 +91 97375 61301</p>

             <p>📧 ride@thedivyashakti.com</p>

             <p>📍 Gandhinagar, Gujarat</p>

             <div class="footer-social">

                 <a href="https://www.facebook.com/profile.php?id=61561142282586" target="_blank"><i
                         class="fa-brands fa-facebook-f"></i></a>
                 <a href="https://www.instagram.com/thedivyashakti/" target="_blank"><i
                         class="fa-brands fa-instagram"></i></a>
                 {{-- <a href="#"><i class="fa-brands fa-youtube"></i></a> --}}
                 <a href="https://api.whatsapp.com/send/?phone=919737561301&text=Hello+Divyashakti+Enterprise%2C+I+am+interested+in+your+EV+vehicles&type=phone_number&app_absent=0"
                     target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                 <a href="https://www.linkedin.com/company/divyashakti-enterprise/" target="_blank"><i
                         class="fa-brands fa-linkedin-in"></i></a>

             </div>

         </div>

     </div>

     <!-- BOTTOM -->

     <div class="footer-bottom">

         <p>© 2026 Divyashakti Enterprise. All Rights Reserved.</p>

     </div>

 </footer>

 <!-- footer ends here -->

 <!-- floating whatsapp icon starts here -->

 <style>
     .calculator-float {
         position: fixed;
         bottom: 90px;
         /* above whatsapp */
         right: 20px;
         background: #0D0A41;
         color: #fff;
         font-size: 22px;
         width: 55px;
         height: 55px;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
         z-index: 999;
         transition: 0.3s;
     }

     .calculator-float:hover {
         background: #FC8F00;
         transform: scale(1.1);
     }
 </style>

 <a href="{{ url('/profit-calculator') }}" class="calculator-float" style="text-decoration: none;">

     🧮

 </a>

 <a href="https://wa.me/919737561301?text=Hello%20Divyashakti%20Enterprise%2C%20I%20am%20interested%20in%20your%20EV%20vehicles"
     class="whatsapp-float" target="_blank" style="text-decoration: none;">

     <i class="fa-brands fa-whatsapp"></i>

 </a>

 <!-- floating whatsapp icon ends here -->

 <script src="{{ asset('assets/script/script.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
 </script>
 </body>

 </html>
