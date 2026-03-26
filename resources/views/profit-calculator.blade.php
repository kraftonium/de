@extends('partials.mainindex')

@push('title')
    <title>EV Dealership Profit Calculator | ROI & Earnings | Divyashakti Enterprise | Drive The Future</title>
@endpush

@push('meta')
    <meta name="description"
        content="Calculate your EV dealership profit and ROI instantly. Estimate earnings from electric scooter business in Gujarat with our advanced profit calculator.">
    <meta name="keywords"
        content="ev dealership profit calculator, electric vehicle business profit india, ev business roi calculator, dealership income ev scooter, ev dealership gujarat">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.thedivyashakti.com/profit-calculator">

    <meta property="og:type" content="website">
    <meta property="og:title" content="EV Dealership Profit Calculator">
    <meta property="og:description" content="Estimate your EV business profit and ROI with our advanced calculator.">
    <meta property="og:url" content="https://www.thedivyashakti.com/profit-calculator">
    <meta property="og:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
    <meta property="og:site_name" content="Divyashakti Enterprise">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EV Profit Calculator India">
    <meta name="twitter:description" content="Calculate your EV dealership earnings and ROI instantly.">
    <meta name="twitter:image" content="https://www.thedivyashakti.com/assets/images/logo/logo-only-1.png">
@endpush

@push('schema')
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "SoftwareApplication",
"name": "EV Dealership Profit Calculator",
"applicationCategory": "BusinessApplication",
"operatingSystem": "Web",
"description": "Online calculator to estimate EV dealership profit and ROI for electric vehicle business in India.",
"url": "https://www.thedivyashakti.com/ev-dealership-calculator",
"offers": {
  "@type": "Offer",
  "price": "0",
  "priceCurrency": "INR"
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"name": "Divyashakti Enterprise",
"url": "https://www.thedivyashakti.com",
"logo": "https://www.thedivyashakti.com/assets/images/logo/logo.png",
"telephone": "+919737561301",
"address": {
  "@type": "PostalAddress",
  "addressLocality": "Gandhinagar",
  "addressRegion": "Gujarat",
  "addressCountry": "IN"
}
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "WebPage",
"name": "EV Dealership Profit Calculator",
"url": "https://www.thedivyashakti.com/ev-dealership-calculator",
"description": "Calculate profit and ROI from electric vehicle dealership business.",
"inLanguage": "en"
}
</script>

    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
  "@type": "Question",
  "name": "How much profit can I earn from EV dealership?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Profit depends on dealership level, number of vehicles sold, and commission percentage."
  }
},
{
  "@type": "Question",
  "name": "Is EV dealership profitable in India?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Yes, EV dealership is a growing business with high demand and low operational cost."
  }
},
{
  "@type": "Question",
  "name": "How does this calculator work?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Select dealer type, vehicle, battery, warranty and customers to calculate estimated profit."
  }
}
]
}
</script>
@endpush

@section('main-section')
    <section class="ev-calculator">

        <div class="calc-container">

            <h1 class="calc-title">EV Dealership Profit Calculator</h1>

            <p class="calc-subtitle">
                Estimate your earnings and ROI from EV business
            </p>

            <!-- STEP 1 -->
            <div class="calc-card">
                <h3>1. Select Dealer Type</h3>

                <select id="usertype">
                    <option value disabled selected>Select Dealer
                        Type</option>
                    <option>State Dealer</option>
                    <option>Zone Dealer</option>
                    <option>District Dealer</option>
                    <option>Taluka Dealer</option>
                    <option>Area Dealer</option>
                </select>
            </div>

            <!-- STEP 2 -->
            <div class="calc-card" id="vehicle" style="display:none;">
                <h3>2. Select Vehicles</h3>

                <label><input type="checkbox" class="vehicletype">
                    Victory</label>
                <label><input type="checkbox" class="vehicletype">
                    Classic</label>
                <label><input type="checkbox" class="vehicletype">
                    Breeze</label>
                <label><input type="checkbox" class="vehicletype">
                    Eternal</label>

            </div>

            <!-- STEP 3 -->
            <div class="calc-card" id="battery" style="display:none;">
                <h3>3. Battery Type</h3>

                <select id="batterytype">
                    <option value disabled selected>Select Battery</option>
                    <option>Lithium Battery</option>
                    <option>LeadGel Battery</option>
                </select>
            </div>

            <!-- STEP 4 -->
            <div class="calc-card" id="selectwarrenty" style="display:none;">
                <h3>4. Warranty</h3>

                <select id="warrenty">
                    <option value disabled selected>Select Warranty</option>
                    <option>1 Year</option>
                    <option>2 Year</option>
                    <option>3 Year</option>
                    <option>5 Year</option>
                    <option>6 Year</option>
                </select>
            </div>

            <!-- PRICE -->
            <div class="price-box">
                <h3>Vehicle Price</h3>
                <p id="vehiclePrice">0 RS</p>
            </div>

            <!-- CUSTOMERS -->
            <div class="calc-card" id="addCustomer" style="display:none;">

                <h3>5. Add Customers</h3>

                <div class="customer-grid">

                    <div class="customer-item" id="yourCustomers">
                        <label>Your Customers</label>
                        <input type="number">
                        <span id="yourPercentage">15%</span>
                    </div>

                    <div class="customer-item" id="zoneCustomers">
                        <label>Zone Customers</label>
                        <input type="number">
                        <span id="zonePercentage">1%</span>
                    </div>

                    <div class="customer-item" id="districtCustomers">
                        <label>District Customers</label>
                        <input type="number">
                        <span id="districtPercentage">1%</span>
                    </div>

                    <div class="customer-item" id="talukaCustomers">
                        <label>Taluka Customers</label>
                        <input type="number">
                        <span id="talukaPercentage">1%</span>
                    </div>

                    <div class="customer-item" id="areaCustomers">
                        <label>Area Customers</label>
                        <input type="number">
                        <span id="areaPercentage">1%</span>
                    </div>

                </div>

            </div>

            <!-- RESULT -->
            <div class="profit-box">
                <h2>Total Profit</h2>
                <h1><span>0 RS</span></h1>
            </div>

        </div>

    </section>

    <script>
        // =======================
        // ELEMENTS
        // =======================

        const usertype = document.getElementById("usertype");
        const vehicle = document.getElementById("vehicle");
        const battery = document.getElementById("battery");
        const warranty = document.getElementById("selectwarrenty");
        const customers = document.getElementById("addCustomer");

        // =======================
        // PERCENTAGE MAP
        // =======================

        const percentageMap = {
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
                taluka: 1,
                area: 1
            },
            "Taluka Dealer": {
                your: 12,
                area: 2
            },
            "Area Dealer": {
                your: 10
            }
        };

        // =======================
        // SHOW FLOW
        // =======================

        usertype.addEventListener("change", () => {
            vehicle.style.display = "block";
            updatePercentages();
            calculateProfit();
        });

        document.querySelectorAll(".vehicletype").forEach(cb => {
            cb.addEventListener("change", () => {
                let selected = document.querySelectorAll(".vehicletype:checked").length;

                battery.style.display = selected ? "block" : "none";
                warranty.style.display = "none";
                customers.style.display = "none";

                calculateProfit();
            });
        });

        document.getElementById("batterytype").addEventListener("change", () => {
            warranty.style.display = "block";
            calculateProfit();
        });

        document.getElementById("warrenty").addEventListener("change", () => {
            customers.style.display = "block";
            calculateProfit();
        });

        document.querySelectorAll("#addCustomer input").forEach(input => {
            input.addEventListener("input", calculateProfit);
        });

        // =======================
        // UPDATE PERCENTAGES
        // =======================

        function updatePercentages() {
            let dealer = usertype.value;
            let data = percentageMap[dealer] || {};

            const set = (id, val) => {
                let el = document.getElementById(id);
                if (el) el.textContent = (val || 0) + "%";
            };

            set("yourPercentage", data.your);
            set("zonePercentage", data.zone);
            set("districtPercentage", data.district);
            set("talukaPercentage", data.taluka);
            set("areaPercentage", data.area);
        }

        // =======================
        // PRICE
        // =======================

        function getBasePrice() {

            let batteryType = document.getElementById("batterytype").value;
            let warrenty = document.getElementById("warrenty").value;

            const priceList = {
                "Lithium Battery": {
                    "1 Year": 69999,
                    "2 Year": 74999,
                    "3 Year": 79999,
                    "5 Year": 89999,
                    "6 Year": 99999
                },
                "LeadGel Battery": {
                    "1 Year": 49999,
                    "2 Year": 59999,
                    "3 Year": 66666,
                    "5 Year": 74999,
                    "6 Year": 83333
                }
            };

            let price = priceList[batteryType]?.[warrenty] || 0;

            document.getElementById("vehiclePrice").textContent =
                price.toLocaleString() + " RS";

            return price;
        }

        // =======================
        // CALCULATION
        // =======================

        function calculateProfit() {

            let dealer = usertype.value;
            let data = percentageMap[dealer] || {};

            let selectedVehicles =
                document.querySelectorAll(".vehicletype:checked").length;

            if (selectedVehicles === 0) return;

            let basePrice = getBasePrice();
            if (basePrice === 0) return;

            let your = parseInt(document.querySelector("#yourCustomers input")?.value) || 0;
            let zone = parseInt(document.querySelector("#zoneCustomers input")?.value) || 0;
            let district = parseInt(document.querySelector("#districtCustomers input")?.value) || 0;
            let taluka = parseInt(document.querySelector("#talukaCustomers input")?.value) || 0;
            let area = parseInt(document.querySelector("#areaCustomers input")?.value) || 0;

            your *= selectedVehicles;
            zone *= selectedVehicles;
            district *= selectedVehicles;
            taluka *= selectedVehicles;
            area *= selectedVehicles;

            let totalProfit =
                (your * basePrice * (data.your || 0) / 100) +
                (zone * basePrice * (data.zone || 0) / 100) +
                (district * basePrice * (data.district || 0) / 100) +
                (taluka * basePrice * (data.taluka || 0) / 100) +
                (area * basePrice * (data.area || 0) / 100);

            document.querySelector(".profit-box span").textContent =
                totalProfit.toLocaleString() + " RS";

        }
    </script>
@endsection
