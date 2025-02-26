// document.getElementById('showDiv').addEventListener('click', () => {
const myDiv = `
        
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="">
                     <a href="/index.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>

                <li class="">
                    <a href="/manage-admin/manage-admin.html"><i class="fa fa-user-tie"></i> <span>Manage Admin</span></a>
                </li>

                <li class="">
                    <a href="/manage-customer/manage-customer.html"><i class="fa fa-user"></i> <span>Manage Customer</span></a>
                </li>

                <li class="">
                    <a href="/manage-stock/manage-stock.html"><i class="fa fa-boxes "></i> <span>Manage Stock</span></a>
                </li>

                <li class="">
                    <a href="/manage-order/manage-order.html"><i class="fa fa-shopping-cart "></i> <span>Manage Order</span></a>
                </li>

                <li class="">
                    <a href="/manage-state-dealership/manage-state-dealership.html"><i class="fa fa-store "></i> <span>Manage State Dealership</span></a>
                </li>

                <li class="">
                    <a href="/manage-zone-dealership/manage-zone-dealership.html"><i class="fa fa-store "></i> <span>Manage Zone Dealership</span></a>
                </li>

                <li class="">
                    <a href="/manage-jilla-dealership/manage-jilla-dealership.html"><i class="fa fa-store "></i> <span>Manage Jilla Dealership</span></a>
                </li>

                <li class="">
                    <a href="/manage-taluka-dealership/manage-taluka-dealership.html"><i class="fa fa-store "></i> <span>Manage Taluka Dealership</span></a>
                </li>

                <li class="">
                    <a href="/manage-area-dealership/manage-area-dealership.html"><i class="fa fa-store "></i> <span>Manage Area Dealership</span></a>
                </li>

                <li>
                 <a href="/manage-contactus/manage-contactus.html"><i class="fa fa-phone-alt"></i> <span>Manage Contact Us</span></a>
                </li>

                <li>
                 <a href="/manage-gps/manage-gps.html"><i class="fa fa-map "></i> <span>Manage Gps</span></a>
                </li>

                <li>
                 <a href="/manage-dealership-form/manage-dealership-form.html"><i class="fa fa-file-alt"></i> <span>Manage Dealership Form</span></a>
                </li>

                <li>
                 <a href="/manage-book-ride/manage-book-ride.html"><i class="fa fa-motorcycle "></i> <span>Manage Book Ride</span></a>
                </li>

                <li>
                 <a href="/manage-lucky-draw/manage-lucky-draw.html"><i class="fa fa-ticket-alt"></i> <span>Manage Lucky Draw</span></a>
                </li>

                <li>
                 <a href="/manage-career/manage-career.html"><i class="fa fa-briefcase "></i> <span>Manage Career</span></a>
                </li>

                <li>
                 <a href="/appointment-list.html"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                </li>

                <li>
                    <a href="/specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
                </li>

                <li>
                     <a href="/doctor-list.html"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
                </li>

                <li>
                    <a href="/patient-list.html"><i class="fe fe-user"></i> <span>Patients</span></a>
                </li>

                <li>
                    <a href="/reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>

`;

document.getElementById('navbar-container').innerHTML = myDiv;
//   });


// document.addEventListener("DOMContentLoaded", () => {
//     const currentPage = window.location.pathname; // Get the current page path
//     const menuLinks = document.querySelectorAll("#sidebar-menu ul li a"); // Select all menu links

//     menuLinks.forEach((link) => {
//         const href = link.getAttribute("href"); // Get the href attribute
//         if (currentPage.endsWith(href)) {
//             link.parentElement.classList.add("active"); // Add 'active' to the <li>
//         } else {
//             link.parentElement.classList.remove("active"); // Ensure other <li>s are not active
//         }
//     });
// });

const currentPage = window.location.pathname;

// Select all <li> elements
const menuItems = document.querySelectorAll("#sidebar-menu ul li");

menuItems.forEach((item) => {
    const link = item.querySelector("a");

    if (link) {
        const href = link.getAttribute("href");

        // Extract base directory of the href and currentPage
        const hrefBase = href.split('/')[1]; // e.g., 'manage-admin'
        const currentBase = currentPage.split('/')[1]; // e.g., 'manage-admin'

        // Check if they belong to the same section
        if (hrefBase === currentBase) {
            item.classList.add("active"); // Add active class
        } else {
            item.classList.remove("active"); // Remove active class if not matched
        }
    }
});

