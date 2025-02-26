

// for product details page changing the price range and warrenty using range and battery type


 // Store product details in an object
 const productDetails = {
    "50Km to 60Km": {
        "Lead Gel Battery": {
            price: "Price : 49,999/- RS",
            battery: "Battery Type : Lead Gel Battery",
            range: "Range : 50 Km to 60 Km",
            warranty: "Warranty : 1 Year"
        },
        "Lithium Battery": {
            price: "Price : 69,999/- RS",
            battery: "Battery Type : Lithium Battery",
            range: "Range : 50 Km to 60 Km",
            warranty: "Warranty : 1 Years"
        }
    },
    "60Km to 70Km": {
        "Lead Gel Battery": {
            price: "Price : 59,999/- RS",
            battery: "Battery Type : Lead Gel Battery",
            range: "Range : 60 Km to 70 Km",
            warranty: "Warranty : 2 Years"
        },
        "Lithium Battery": {
            price: "Price : 74,999/- RS",
            battery: "Battery Type : Lithium Battery",
            range: "Range : 60 Km to 70 Km",
            warranty: "Warranty : 2 Years"
        }
    },
    "70Km to 80Km": {
        "Lead Gel Battery": {
            price: "Price : 66,666/- RS",
            battery: "Battery Type : Lead Gel Battery",
            range: "Range : 70 Km to 80 Km",
            warranty: "Warranty : 3 Years"
        },
        "Lithium Battery": {
            price: "Price : 79,999/- RS",
            battery: "Battery Type : Lithium Battery",
            range: "Range : 70 Km to 80 Km",
            warranty: "Warranty : 3 Years"
        }
    },
    "80Km to 100Km": {
        "Lead Gel Battery": {
            price: "Price : 74,999/- RS",
            battery: "Battery Type : Lead Gel Battery",
            range: "Range : 80 Km to 100 Km",
            warranty: "Warranty : 5 Years"
        },
        "Lithium Battery": {
            price: "Price : 89,999/- RS",
            battery: "Battery Type : Lithium Battery",
            range: "Range : 80 Km to 100 Km",
            warranty: "Warranty : 5 Years"
        }
    },
    "90Km to 100Km": {
        "Lead Gel Battery": {
            price: "Price : 83,333/- RS",
            battery: "Battery Type : Lead Gel Battery",
            range: "Range : 90 Km to 100 Km",
            warranty: "Warranty : 6 Years"
        },
        "Lithium Battery": {
            price: "Price : 99,999/- RS",
            battery: "Battery Type : Lithium Battery",
            range: "Range : 90 Km to 100 Km",
            warranty: "Warranty : 6 Years"
        }
    },
};

// Function to update the product details based on the selected options
function updateProductDetails() {
    // Get the selected values
    const selectedRange = document.getElementById('select-range').value;
    const selectedBattery = document.getElementById('select-battery').value;

    // Get the product details based on the selected range and battery type
    const details = productDetails[selectedRange][selectedBattery];

    // Update the HTML content for price, battery type, range, and warranty
    document.getElementById('product-price').innerHTML = `<span>${details.price}</span>`;
    document.getElementById('product-battery').textContent = details.battery;
    document.getElementById('product-range').textContent = details.range;
    document.getElementById('product-warranty').textContent = details.warranty;
}

// Add event listeners to update the product details when the selects change
document.getElementById('select-range').addEventListener('change', updateProductDetails);
document.getElementById('select-battery').addEventListener('change', updateProductDetails);







// Scooter page click on list button remove boook ride button
document.getElementsByClassName('ti-view-list').addEventListener('click', function() {

    var removeButton = document.getElementsByClassName('book-ride');

    removeButton.classList.add('hidden');
    // var removeButton = document.getElementById('custom-remove-btn');
    // if (removeButton) {
    //     removeButton.classList.add('hidden');
    // }
});










