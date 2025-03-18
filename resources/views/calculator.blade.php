<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="keywords"
        content="practo clone, Divine Infoverse, doctor appointment, Practo clone html template, doctor booking template">
    <meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
    <meta property="og:url" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Doctors Appointment HTML Website Templates | Divine Infoverse">
    <meta property="og:description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta property="og:image" content="backend-assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta property="twitter:url" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Divine Infoverse">
    <meta name="twitter:description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="twitter:image" content="backend-assets/img/preview-banner.jpg">
    <title>Calculator | Divyashakti Enterprise</title>

    <link rel="shortcut icon" type="image/x-icon" href="/backend-assets/img/logo/favicon.png">

    <link rel="stylesheet" href="/backend-assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="/backend-assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/backend-assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="/backend-assets/css/feathericon.min.css">
    <link rel="stylesheet" href="/backend-assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="/backend-assets/css/custom.css">
    <style>
        #vehicle,
        #battery,
        #selectwarrenty,
        #addCustomer {
            display: none;
        }

        /* @media(max-width:767px) {
            .add-customer h2 {
                text-align: center;
            }

            .totalprofit h3 {
                text-align: center;
            }
        } */

        .add-customer h2 {
            text-align: left;
            margin-bottom: 2rem;
            margin-top: 2rem;
            font-weight: bold;
            color: #FC8F00;
        }

        .totalprofit h3 {
            text-align: left;
            font-weight: bold;
            color: #0D0A41;
            border: 1px solid #FB3D87;
            width: fit-content;
            margin-bottom: 3rem;
            margin-top: 2rem;
            padding: 0.6rem;
            border-radius: 20px;
        }

        .hidden {
            display: none !important;
        }
    </style>
</head>

<body>
    <div class="page-wrapper-calculator">


        <div class=" col-12">
            <div class="logo-container">
                <a href="{{ url('/') }}" class="logo">
                    <img src="/backend-assets/img/logo/logo-divyashakti.png" alt="Logo">
                </a>
            </div>


            <div class="select-details">


                <h1 class="title-calculator">CALCULATE YOUR PROFIT</h1>


                <div class="dealer-type">
                    <div class="mb-3 col-12">
                        <label for="usertype">Dealer Type</label>
                        <select name="usertype" id="usertype" class="form-control">
                            <option value="" selected disabled>Select Dealer Type</option>
                            <option value="State Dealer">State Dealer</option>
                            <option value="Zone Dealer">Zone Dealer</option>
                            <option value="District Dealer">District Dealer</option>
                            <option value="Taluka Dealer">Taluka Dealer</option>
                            <option value="Area Dealer">Area Dealer</option>
                        </select>
                    </div>
                </div>

                <div class="vehicle-type" id="vehicle">
                    <div class="mb-3 col-12">
                        <label for="vehicletype">Select Vehicle </label>
                        <select name="vehicletype" id="vehicletype" class="form-control">
                            <option value="" selected disabled>Select Vehicle </option>
                            <option value="Victory"> Victory</option>
                            <option value="Classic"> Classic</option>
                            <option value="Breeze"> Breeze</option>
                            <option value="Eternal"> Eternal</option>
                            <option value="Divine24"> Divine24</option>
                        </select>
                    </div>
                </div>


                <div class="battery-type" id="battery">
                    <div class="mb-3 col-12">
                        <label for="batterytype">Select Battery Type </label>
                        <select name="batterytype" id="batterytype" class="form-control">
                            <option value="" selected disabled>Select Battery Type</option>
                            <option value="LedGel Battery"> LedGel Battery</option>
                            <option value="Lithium Battery"> Lithium Battery</option>
                        </select>
                    </div>
                </div>


                <div class="warrenty" id="selectwarrenty">
                    <div class="mb-3 col-12">
                        <label for="warrenty">Select Warrenty </label>
                        <select name="warrenty" id="warrenty" class="form-control">
                            <option value="" selected disabled>Select Warrenty</option>
                            <option value="1 Year"> 1 Year</option>
                            <option value="2 Year"> 2 Year</option>
                            <option value="3 Year"> 3 Year</option>
                            <option value="5 Year"> 5 Year</option>
                            <option value="6 Year"> 6 Year</option>
                        </select>
                    </div>
                </div>


                <div class="add-customer" id="addCustomer">

                    <h3 style="color: #0D0A41; font-weight: bold;">Your Vehicle Price: <span id="vehiclePrice">0
                            RS</span></h3>

                    <h2 style="text-align: left;">Add Customers</h2>
                    <div id="yourCustomers" class="customerdiv">
                        <div class="flex-inputs">
                            <label>Your Customers :</label>
                            <input type="number" min="0">
                        </div>
                        <div>
                            <p>* <span id="yourPercentage">15% </span> On Total Vehicle Price</p>
                        </div>
                    </div>
                    <div id="zoneCustomers" class="customerdiv" data-type="Zone Dealer">
                        <div class="flex-inputs">
                            <label>Zone Customers :</label>
                            <input type="number" min="0">
                        </div>
                        <div>
                            <p>* <span id="zonePercentage">1% </span> On Total Vehicle Price</p>
                        </div>
                    </div>
                    <div id="districtCustomers" class="customerdiv" data-type="District Dealer">
                        <div class="flex-inputs">
                            <label>District Customers :</label>
                            <input type="number" min="0">
                        </div>
                        <div>
                            <p>* <span id="districtPercentage">1% </span> On Total Vehicle Price</p>
                        </div>
                    </div>
                    <div id="talukaCustomers" class="customerdiv " data-type="Taluka Dealer">
                        <div class="flex-inputs">
                            <label>Taluka Customers :</label>
                            <input type="number" min="0">
                        </div>
                        <div>
                            <p>* <span id="talukaPercentage">1% </span> On Total Vehicle Price</p>
                        </div>
                    </div>
                    <div id="areaCustomers" class="customerdiv" data-type="Area Dealer">
                        <div class="flex-inputs">
                            <label>Area Customers :</label>
                            <input type="number" min="0">
                        </div>
                        <div>
                            <p>* <span id="areaPercentage">1% </span> On Total Vehicle Price</p>
                        </div>
                    </div>

                </div>

                <script>
                    document.getElementById("vehicletype").addEventListener("change", function() {
                        if (this.value) {
                            battery.style.display = "block";
                        } else {
                            battery.style.display = "none";
                            selectwarrenty.style.display = "none";
                            addCustomer.style.display = "none";
                        }
                        calculateProfit();
                    });
                    document.getElementById("batterytype").addEventListener("change", function() {
                        if (this.value) {
                            selectwarrenty.style.display = "block";
                        } else {
                            selectwarrenty.style.display = "none";
                            addCustomer.style.display = "none";
                        }
                        calculateProfit();
                    });
                    document.getElementById("warrenty").addEventListener("change", function() {
                        if (this.value) {
                            addCustomer.style.display = "block";
                        } else {
                            addCustomer.style.display = "none";
                        }
                        calculateProfit();
                    });
                    document.getElementById("usertype").addEventListener("change", function() {
                        let selectedValue = this.value;
                        if (selectedValue) {
                            vehicle.style.display = "block";
                        } else {
                            vehicle.style.display = "none";
                            return;
                        }
                        // Define dealership hierarchy (from highest to lowest)
                        const hierarchy = ["State Dealer", "Zone Dealer", "District Dealer", "Taluka Dealer", "Area Dealer"];
                        // Get the index of the selected dealership type in the hierarchy
                        let selectedIndex = hierarchy.indexOf(selectedValue);
                        // Loop through all customer divs and apply classes based on hierarchy
                        document.querySelectorAll(".customerdiv").forEach(div => {
                            let divType = div.getAttribute("data-type"); // Read the dealership level
                            // Ensure "Your Customers" section is always visible
                            if (div.id === "yourCustomers") {
                                div.classList.remove("hidden"); // Keep it visible
                                return; // Skip the rest of the logic for this div
                            }
                            let divIndex = hierarchy.indexOf(divType);
                            // Show only lower dealership customer sections
                            if (divIndex > selectedIndex) {
                                div.classList.remove("hidden");
                            } else {
                                div.classList.add("hidden");
                            }
                        });
                        const percentages = {
                            "State Dealer": {
                                your: 15,
                                zone: 1,
                                district: 1,
                                taluka: 1,
                                area: 1
                            },
                            "Zone Dealer": {
                                your: 14,
                                district: 1,
                                taluka: 1,
                                area: 1
                            },
                            "District Dealer": {
                                your: 13,
                                taluka: 3,
                                area: 3
                            },
                            "Taluka Dealer": {
                                your: 10,
                                area: 2
                            },
                            "Area Dealer": {
                                your: 8
                            },
                        };
                        let selectedData = percentages[selectedValue];
                        document.getElementById("yourPercentage").textContent = selectedData.your + "%";
                        document.getElementById("zonePercentage").textContent = (selectedData.zone || 0) + "%";
                        document.getElementById("districtPercentage").textContent = (selectedData.district || 0) + "%";
                        document.getElementById("talukaPercentage").textContent = (selectedData.taluka || 0) + "%";
                        document.getElementById("areaPercentage").textContent = (selectedData.area || 0) + "%";
                        document.querySelectorAll(".customerdiv input").forEach(input => {
                            input.addEventListener("input", calculateProfit);
                        });
                        calculateProfit();
                    });

                    function getBasePrice() {
                        let batteryType = document.getElementById("batterytype").value;
                        let warranty = document.getElementById("warrenty").value;
                        const priceList = {
                            "Lithium Battery": {
                                "1 Year": 69999,
                                "2 Year": 74999,
                                "3 Year": 79999,
                                "5 Year": 89999,
                                "6 Year": 99999
                            },
                            "LedGel Battery": {
                                "1 Year": 49999,
                                "2 Year": 59999,
                                "3 Year": 66666,
                                "5 Year": 74999,
                                "6 Year": 83333
                            }
                        };
                        let price = priceList[batteryType]?.[warranty] || 0;
                        document.getElementById("vehiclePrice").textContent = price.toLocaleString() + " RS";
                        return price;
                    }

                    function calculateProfit() {
                        let selectedValue = document.getElementById("usertype").value;
                        if (!selectedValue) return;
                        let basePrice = getBasePrice();
                        if (basePrice === 0) return;
                        let percentages = {
                            your: parseFloat(document.getElementById("yourPercentage").textContent) / 100,
                            zone: parseFloat(document.getElementById("zonePercentage").textContent) / 100,
                            district: parseFloat(document.getElementById("districtPercentage").textContent) / 100,
                            taluka: parseFloat(document.getElementById("talukaPercentage").textContent) / 100,
                            area: parseFloat(document.getElementById("areaPercentage").textContent) / 100
                        };
                        let yourVehicles = parseInt(document.querySelector("#yourCustomers input").value) || 0;
                        let zoneVehicles = parseInt(document.querySelector("#zoneCustomers input")?.value) || 0;
                        let districtVehicles = parseInt(document.querySelector("#districtCustomers input")?.value) || 0;
                        let talukaVehicles = parseInt(document.querySelector("#talukaCustomers input")?.value) || 0;
                        let areaVehicles = parseInt(document.querySelector("#areaCustomers input")?.value) || 0;
                        let totalProfit =
                            (yourVehicles * basePrice * percentages.your) +
                            (zoneVehicles * basePrice * percentages.zone) +
                            (districtVehicles * basePrice * percentages.district) +
                            (talukaVehicles * basePrice * percentages.taluka) +
                            (areaVehicles * basePrice * percentages.area);
                        document.querySelector(".totalprofit span").textContent = totalProfit.toLocaleString() + " RS";
                    }
                </script>



                <div class="totalprofit">
                    <h3> Total Profit : <span>0 RS</span></h3>
                </div>

            </div>


            <div class="profit-calculator-details">
                <p>Here U Can Calculate The Total Profit Using Upon Calculator, Steps For Use Of This Calculator:</p>
                <ul>
                    <li>Select Dealership.</li>
                    <li>Select Vehicle.</li>
                    <li>Select Battery Type.</li>
                    <li>Select Warrenty.</li>
                    <li>Add Customer Numbers </li>
                    <li>See Your Total Profit</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        © 2024 DIVYASHAKTI ENTERPRISE, Inc. All rights reserved. Powered By <a href="https://www.divineinfoverse.com"
            target="_blank"> DIVINE INFOVERSE</a>
    </div>

    <script src="/backend-assets/js/jquery-3.7.1.min.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>

    <script src="/backend-assets/js/bootstrap.bundle.min.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>

    <script src="/backend-assets/plugins/slimscroll/jquery.slimscroll.min.js"
        type="1e8e4c23584c3657211db4d2-text/javascript"></script>
    <script src="/backend-assets/plugins/raphael/raphael.min.js"
        type="1e8e4c23584c3657211db4d2-text/javascript"></script>
    <script src="/backend-assets/plugins/morris/morris.min.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>
    <script src="/backend-assets/js/chart.morris.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>

    <script src="/backend-assets/js/script.js" type="1e8e4c23584c3657211db4d2-text/javascript"></script>
    <script src="/backend-assets/js/navbar.js"></script>
    <script src="/backend-assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="1e8e4c23584c3657211db4d2-|49" defer=""></script>

</body>

</html>
