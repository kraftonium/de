@extends('partials.mainindex')

@push('title')
    <title>Terms & Conditions | Divyashakti Enterprise</title>
@endpush

@push('meta')
<meta property="og:type" content="website" />
<meta property="og:title" content="Terms And Conditions | Divyashakti Enterprise" />
<meta property="og:description"
    content="DIVYASHAKTI ENTERPRISE the most largest EV VEHICLES Showroom in the gandhinagar can serve you latest qulity of EV VEHICLES. Discover a new era of transportation at our electric vehicles showroom. Embrace sustainable, stylish, and powerful rides designed for the future." />
<meta property="og:image" content="{{asset('assets/img/logo/logo.png')}}" />
<meta property="og:url" content="https://www.thedivyashakti.com/terms-and-conditions" />
<meta property="og:site_name" content="Divyashakti Enterprise" />
<link rel="canonical" href="https://www.thedivyashakti.com/terms-and-conditions">
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
                    <h2>*T & C Page </h2>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>*T & C Page </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container-privacy">
            <h1 class="title">Divyashakti Enterprise<br>Term & Condition</h1>
            {{-- <p class="effective-date">Effective Date: 19 / 09 / 2024</p> --}}
            <hr class="divider">
            <section class="section">
                <h2 class="section-title">1. PRE-ORDER</h2>
                <p>1.1. By accepting these Booking Terms, You hereby confirm that You wish to pay an advance for EV scooter which will be set off from the final price of the vehicle at the time of purchase.You understand that We may not have begun manufacturing the Scooter at the time of Your pre-order or Scooter may still be in development stage.</p>
                <p>1.2.  Placing a pre-order does not guarantee that Scooter will be available to You nor does it constitute an offer to sell. However, in case the scooter is not allotted to you, the pre-order amount would be refundable in full.</p>
                <p>1.3. The amount that you are paying does not include any taxes including but not limited to Goods and Service Tax.</p>
                <p>1.4. Customer and dealer have to make one hundred percent advance payment one week before and get delivery of the scooter within one week Delivery time can be changed by company anytime based on circumstances because of PDI (Pre Delivery Inspection).
                </p>
            </section>
            <section class="section">
                <h2 class="section-title">2.  PURCHASE PRICE</h2>
                <p>2.1. The price of the Scooter and any option pricing may not be available at the time of Your pre-order and, if pricing is available, it is subject to change without any intimation to You until agreed upon in a duly executed purchase agreement. </p>
                <p>2.2. According to the rules, the customer and the dealer have to pay GST and other taxes.
                </p>
                <p>2.3. In case of cancellation of order by customer and dealer, it must be done within 24 hours of placing the order otherwise the tax will be borne by customer and dealer.
                </p>
                <p>2.4. Merchandise sold will not be returned.
                </p>
                <p>2.5. The rate of steelrate and lithium battery will depend on the price prevailing in the market and will also depend on the government tax and policy.
                </p>
            </section>
            <div class="section">
                <h2>3. DEFERRAL, MODIFICATION AND NON-TRANSFERABILITY</h2>
                <p>3.1. If You do not wish to enter into a purchase agreement at the time that you are contacted by Us, You will give up your pre-order sequence position completely and/or will be entitled to defer to a later position as determined subject to the conditions below.</p>
                <p>3.2. However, such deferral is permitted only 1 (one) time.). If You do not communicate Your decision to us within ten (10) days of notification, You will automatically be granted such a deferral. This Agreement is not transferable or assignable to another party without the prior written approval by Us.</p>
            </div>
            <section class="section">
                <h2 class="section-title">4.  IMPORTANT TERMS</h2>
                
                <p>4.1. This Term & Condition forms an integral part of the “Terms of Use” of the Website Divyashakti Enterprise. If You do not agree with the terms of this Privacy Policy, please do not use this Website Divyashakti Enterprise. By visiting this Website / using the Mobile App, you (a) unconditionally accept, and agree to be bound by the “Terms of Use” of the Website Divyashakti Enterprise, read with this Privacy Policy; and (b) expressly consent to the collection, receipt, possession, storage, usage, dealing, handling or transfer of Your personal information by Divyashakti Enterprise in accordance with the terms of this Privacy Policy.</p>
                <p>4.2. The Privacy Policy can undergo a change at any time at the discretion of Divyashakti Enterprise. Therefore, it is suggested that You regularly check the Website Divyashakti Enterprise to be apprised of the latest changes made to the Privacy Policy.</p>
            </section>
            
            
            <section class="section">
                <h2 class="section-title">5. PRIORITY</h2>
                <p>5.1. We will establish your pre-order sequence position in our sole discretion. We may decline pre-orders to avoid over-subscription, if We are unable to commence shipping of the Scooter to Your region or as We deem appropriate in our sole discretion. If Your pre-order is declined, You will be notified and Your Pre-Order Payment will be refunded within 15 working days of such refund being initiated.</p>
            </section>
            <section class="section">
                <h2 class="section-title">6. DISCLAIMER OF WARRANTIES</h2>
                <p>6.1. We make no representation or warranty of any kind, express or implied, in connection with this Agreement or its subject matter. </p>
                <p>6.2.  You hereby disclaim any and all representations and warranties as maybe available to You under applicable law or otherwise, including but not limited to, any implied warranties of merchantability and/or fitness for a particular purpose, quality, course of dealings, usage of trade, accuracy, quiet enjoyment or non-infringement, all of which are expressly disclaimed. </p>
                <p>6.3. In view of Our endeavor to continuously improve and innovate Our Scooter,  Electric reserves the right to modify or alter or change the specifications, features, design without any prior written notice and without any liability. </p>
                <p>6.4. The parts which rub are not covered by warranty and guarantee like jumper, typer, throttles, break, wireas, disbrake, accessories and plastic part etc.
                </p>
                <p>6.5. The motor, charger and controller in the scooter will have only one year warranty of these three.</p>
                <p>6.6. The battery comes with a warranty ranging from one to five years depending on the type of purchase you have made.
                </p>
                <p>
                    6.7. In the color which at that time the scooter of that color is available in the company will be available.
                </p>
            </section>
            <section class="section">
                <h2 class="section-title">7. LIMITATION OF LIABILITY</h2>
                <p>7.1. Not with standing anything under this Agreement, if We are held liable for any damages related to Your pre-order or this Agreement, Your sole and exclusive remedy will be limited to reimbursement of the Pre-Order Payment paid to Us and you agree that Our cumulative liability whether under tort or contract or otherwise will be limited to the reimbursement of the Pre-Order Payment.</p>
            </section>
            <section class="section">
                <h2 class="section-title">8.  GOVERNING LAW AND JURISDICTION</h2>
                <p>8.1. This Agreement is governed by the laws of India without regard to its conflict of law provisions. Disputes that arise from the Agreement, and which cannot be settled amicably through mutual negotiation, shall be subject to the exclusive jurisdiction of the courts at Gandhinagar, Gujarat  </p>
            </section>
            <section class="section">
                <h2 class="section-title">9. Contact Us</h2>
                <p>9.1. If you have any questions or concerns about this Term & Condition or any point then, please contact us at:</p>
                Divyashakti Enterprise <br>
                B 102 Swagat Flamingo, Sarkhej - Gandhinagar Hwy, near Sargasan, Chokdi, Gujarat 382421,<br>
                Phone: [+91 97375 61301],<br>
                Email: [contact@thedivyashakti.com],
            </section>
            
            
             <section class="section">
                <h2 class="section-title">10. Dealership Terms & Conditions</h2>
                <p>10.1. If in 3 months the dealer feels that I do not want to have a dealership, the company will deduct the price of the vehicle(Used/Demo) from the deposit and the remaining deposit will be returned after 3 months.Demo vehicles will have to be purchased separately from the company.</p>
                <p>10.2. Rent is available only for the month in which the dealer sells 5 or more EV scooters.</p>
                <p>10.3. Incentive will be available after 15 days of achievement.</p>
                <p>10.4. If an EV scooter is not sold by a dealer for three consecutive months, their dealership will be cancelled.</p>
                <p>10.5. The company will pay the transport expenses only if more than 10 vehicles are delivered.
                </p>
                <p>10.6. Jurisdiction will be Gandhinagar.
                </p>
                <p>
                    10.7. In the color which at that time the scooter of that color is available in the company will be available.
                </p>
                <p>10.8. In case the company has any scheme for sale on the occasion of festivals, the dealer will have to send the payment of such vehicle directly to the company from the customer.And the dealer will be entitled to commission only and the company will have its agreement, cheque, bill etc. in the name of the customer and in such case the dealer will have to make payment to the company one week in advance.</p>
            </section>
            
            
             <section class="section">
                <h2 class="section-title">11. Lucky Draw Terms & Conditions</h2>
                <p>11.1. This dhamaka offer is only for friends & relaives.
                </p>    
                <p>11.2. The number of members in this draw will be 200.
                </p>    
                <p>11.3. This draw is for 24 months.
                </p>
                <p>11.4. 2800/- each member in this draw Rs. It has to be filled up to 24 months.
                </p>
                <p>11.5. There will be a lucky draw every month. In which the winner of the single draw will get an electric scooter or a 10 gram gold coin (24 carat). (either one)
                </p>
                <p>11.6. After winning the lucky draw, the name of the winning member will be canceled from the membership and the winning member will not have to pay any installments thereafter.
                </p>
                <p>11.7. It will be the member's responsibility to collect the price from the office within 7 days after drawing the number in the lucky draw.
                </p>
                <p>11.8. Each member will get an electric scooter or a 10 gram gold coin. No payment will be received under any circumstances.
                </p>
                <p>11.9. Any member who stops paying installments before 24 installments will get his full payment without interest only after completion of 24 installments.
                </p>
                <p>11.10. The electric scooter will come with a 2-year warranty and will cover a distance of 70 km on a single charge.
                </p>
                <p>11.11. If a member wants to take an electric scooter in advance, the members have to pay Rs. 20,000/- down payment and security of any two continuing members. Only after paying five installments will be entitled to take electric scooter in advance. The installments will continue even after purchasing the electric scooter and the advance payment will be refunded after 24 months.
                </p>
                <p>11.12. 5% GST on electric scooters for each member at the time of claiming the price. 3% GST on charges and gold coins. It has to be given separately.
                </p>
                <p>11.13. The price of the electric scooter is Rs. 74,999/- and the price of 10 gram gold coin which will be based on the market at that time, which will be borne by the company.
                </p>
                <p>11.14. Organizer may change this draw keeping in view the time circumstances.
                 </p>
                <p>11.15. Each member shall be responsible for getting the signature of the authorized agent and obtaining the receipt after making the payment to his card. It will be mandatory to deposit the given card and receipt while claiming the price.
                </p>
                <p>11.16. Draw will be held on the last Saturday of every month at 03:00 PM</p>
                <p>11.17. It is mandatory for every member to be present at the draw, so that there is no dispute later.
                </p>
                <p>11.18. Other than the lucky draw winning member, the remaining members will get an electric scooter or a 10 gram gold coin within 15 days after the completion of the 24th draw. For which every other member has to inform in advance one of the two price items of their choice.
            </p>
            <p>11.19. Every member has to make the payment in QR Code of the company and its screen shot has to be delivered to the authorized agent. Every member will make distribution through authorized agent between 1st to 10th of every month. Daily after 10th payment Rs. 100/- has to be paid as penalty.
            </p>
            <p>11.20. A member's account will not be included in a month in which a member's payment is not received.
            </p>
            <p>11.21. Prices will be eligible only after deposit of receipts and tickets.
              </p>
              <p>11.22. Merchandise sold will not be returned.
                </p>
                <p>11.23. In the event that the customer or the dealer has any conflicts or disputes with the company in the future, instead of filing a police case or a court case, they have to sit down and find an amicable solution.
                </p>
            <p>11.24. Jurisdiction will be Gandhinagar.
                </p>
            </section>
            
             <section class="section">
                <h2 class="section-title">12. Insurance</h2>
                <p>12.1. The responsibility of taking insurance will be at the customer's own expense.
                </p>
                <p>
                    12.2. Scooter will not be delivered without insurance.
                </p>
            </section>
            
            
            
             <section class="section">
                <h2 class="section-title">13. Purchase Policy</h2>
                <p>13.1. The responsibility of taking insurance will be at the customer's own expense.
                </p>
                <p>
                    12.2. Scooter will not be delivered without insurance.
                </p>
            </section>
            
            
            
            
            
            
            
            
            
            
        </div>

@endsection