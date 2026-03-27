<?php

use App\Http\Controllers\DAreaActiveInactiveDealershipsController;
use App\Http\Controllers\DBookRideController;
use App\Http\Controllers\DCareersController;
use App\Http\Controllers\DContactUsController;
use App\Http\Controllers\DCustomersController;
use App\Http\Controllers\DDealershipController;
use App\Http\Controllers\DDealershipDetailsController;
use App\Http\Controllers\DDistrictActiveInactiveDealershipsController;
use App\Http\Controllers\DGpsController;
use App\Http\Controllers\DInquiriesController;
use App\Http\Controllers\DLuckyDrawController;
use App\Http\Controllers\DNewsletterController;
use App\Http\Controllers\DOrdersController;
use App\Http\Controllers\DSolarController;
use App\Http\Controllers\DStateActiveInactiveDealershipsController;
use App\Http\Controllers\DStocksByColorsController;
use App\Http\Controllers\DStocksController;
use App\Http\Controllers\DTalukaActiveInactiveDealershipsController;
use App\Http\Controllers\DUsersController;
use App\Http\Controllers\DUserstypeController;
use App\Http\Controllers\DVehiclesController;
use App\Http\Controllers\DVehicleTypeController;
use App\Http\Controllers\DZoneActiveInactiveDealershipsController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Dl;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/ev-scooters', function () {
    return view('ev-scooters');
});

Route::get('/scooter-details', function () {
    return view('scooter-details');
});

Route::get('/breeze-ev-scooter', function () {
    return view('breeze-ev-scooter');
});

Route::get('/divine-24-ev-scooter', function () {
    return view('divine-24-ev-scooter');
});

Route::get('/affair-lite-ev-scooter', function () {
    return view('affair-lite-ev-scooter');
});

Route::get('/affair-ev-scooter', function () {
    return view('affair-ev-scooter');
});

Route::get('/liberty-ev-scooter', function () {
    return view('liberty-ev-scooter');
});

Route::get('/liberty-plus-ev-scooter', function () {
    return view('liberty-plus-ev-scooter');
});

Route::get('/loader-ev-scooter', function () {
    return view('loader-ev-scooter');
});

Route::get('/gps', function () {
    return view('gps');
});

Route::get('/solar', function () {
    return view('solar');
});

Route::get('/dealership', function () {
    return view('dealership');
});

Route::get('/book-ride', function () {
    return view('book-ride');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/breeze', function () {
    return view('product-details-breeze');
});

Route::get('/classic', function () {
    return view('product-details-classic');
});

Route::get('/eternal', function () {
    return view('product-details-eternal');
});

Route::get('/victory', function () {
    return view('product-details-victory');
});

Route::get('/divine-24', function () {
    return view('product-details-divine-24');
});

Route::get('/loader-with-roof', function () {
    return view('product-details-loader-with-roof');
});


Route::get('/loader-without-roof', function () {
    return view('product-details-loader-without-roof');
});

Route::get('/passenger-auto', function () {
    return view('product-details-passenger');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::get('/profit-calculator', function () {
    return view('profit-calculator');
});

Route::get('/solar-in-gandhinagar', function () {
    return view('solar-in-gandhinagar');
});

Route::post('/contact-submit', [DContactUsController::class, 'create']);
Route::post('/send-career', [DCareersController::class, 'create']);
Route::post('/send-dealership', [DDealershipController::class, 'create']);
Route::post('/send-bookride', [DBookRideController::class, 'create']);
Route::post('/send-newsletter', [DNewsletterController::class, 'create']);
Route::post('/send-gps', [DGpsController::class, 'create']);
Route::post('/send-solar', [DSolarController::class, 'create']);
Route::post('/send-lucky-draw', [DLuckyDrawController::class, 'create']);




Route::get('/register', [DUsersController::class, 'register']);
Route::post('/register-submit', [DUsersController::class, 'create']);
Route::get('/login', function () {
    return view('backend.auth.login');
});
Route::post('/login-submit', [DUsersController::class, 'login']);

Route::get('/admin-forgot-password', function () {
    return view('backend.auth.forgot-password');
});
Route::post('/admin-forgot-password-submit', [DUsersController::class, 'adminforgotpasswordotp']);
Route::get('/admin-reset-password', function () {
    return view('backend.auth.re-password');
});
Route::post('/admin-reset-password-submit', [DUsersController::class, 'adminresetpassword']);

// Route::get('/user-profile/{id}', [DUsersController::class, 'userprofile']);

Route::middleware('usersauth')->group(function () {

    Route::get('/manage-single-dealer/{id}', [DDealershipDetailsController::class, 'manage_single_dealer']);
    Route::get('/manage-state-active-inactive', [DStateActiveInactiveDealershipsController::class, 'manage']);
    Route::get('/manage-zone-active-inactive/{id}', [DZoneActiveInactiveDealershipsController::class, 'manage']);
    Route::get('/manage-district-active-inactive/{id}', [DDistrictActiveInactiveDealershipsController::class, 'manage']);
    Route::get('/manage-taluka-active-inactive/{id}', [DTalukaActiveInactiveDealershipsController::class, 'manage']);
    Route::get('/manage-area-active-inactive/{id}', [DAreaActiveInactiveDealershipsController::class, 'manage']);

    // Admin Panel Routes Starts Here
    Route::middleware('adminauth')->group(function () {

        Route::get('/dashboard', [DUsersController::class, 'dashboard']);


        Route::get('/add-state-active-inactive', function () {
            return view('backend.manage-state-active-inactive.add-state-active-inactive');
        });
        Route::post('/add-state-active-inactive-submit', [DStateActiveInactiveDealershipsController::class, 'create']);
        Route::get('/edit-state-active-inactive/{id}', [DStateActiveInactiveDealershipsController::class, 'edit']);
        Route::post('/update-state-active-inactive/{id}', [DStateActiveInactiveDealershipsController::class, 'update']);
        Route::get('/delete-state-active-inactive/{id}', [DStateActiveInactiveDealershipsController::class, 'delete']);


        Route::get('/add-zone-active-inactive', [DZoneActiveInactiveDealershipsController::class, 'add']);
        Route::post('/add-zone-active-inactive-submit', [DZoneActiveInactiveDealershipsController::class, 'create']);
        Route::get('/edit-zone-active-inactive/{id}', [DZoneActiveInactiveDealershipsController::class, 'edit']);
        Route::post('/update-zone-active-inactive/{id}', [DZoneActiveInactiveDealershipsController::class, 'update']);
        Route::get('/delete-zone-active-inactive/{id}', [DZoneActiveInactiveDealershipsController::class, 'delete']);


        Route::get('/add-district-active-inactive', [DDistrictActiveInactiveDealershipsController::class, 'add']);
        Route::post('/add-district-active-inactive-submit', [DDistrictActiveInactiveDealershipsController::class, 'create']);
        Route::get('/edit-district-active-inactive/{id}', [DDistrictActiveInactiveDealershipsController::class, 'edit']);
        Route::post('/update-district-active-inactive/{id}', [DDistrictActiveInactiveDealershipsController::class, 'update']);
        Route::get('/delete-district-active-inactive/{id}', [DDistrictActiveInactiveDealershipsController::class, 'delete']);

        Route::get('/add-taluka-active-inactive', [DTalukaActiveInactiveDealershipsController::class, 'add']);
        Route::post('/add-taluka-active-inactive-submit', [DTalukaActiveInactiveDealershipsController::class, 'create']);
        Route::get('/edit-taluka-active-inactive/{id}', [DTalukaActiveInactiveDealershipsController::class, 'edit']);
        Route::post('/update-taluka-active-inactive/{id}', [DTalukaActiveInactiveDealershipsController::class, 'update']);
        Route::get('/delete-taluka-active-inactive/{id}', [DTalukaActiveInactiveDealershipsController::class, 'delete']);

        Route::get('/add-area-active-inactive', [DAreaActiveInactiveDealershipsController::class, 'add']);
        Route::post('/add-area-active-inactive-submit', [DAreaActiveInactiveDealershipsController::class, 'create']);
        Route::get('/edit-area-active-inactive/{id}', [DAreaActiveInactiveDealershipsController::class, 'edit']);
        Route::post('/update-area-active-inactive/{id}', [DAreaActiveInactiveDealershipsController::class, 'update']);
        Route::get('/delete-area-active-inactive/{id}', [DAreaActiveInactiveDealershipsController::class, 'delete']);








        //manage admin routes starts here
        Route::get('/logout', [DUsersController::class, 'logout']);
        Route::get('/admin-profile', [DUsersController::class, 'profile']);
        Route::get('/edit-admin/{id}', [DUsersController::class, 'edit']);
        Route::post('/update-admin/{id}', [DUsersController::class, 'update']);
        Route::post('/update-admin-profile/{id}', [DUsersController::class, 'updateprofile']);
        Route::get('/delete-admin/{id}', [DUsersController::class, 'delete']);
        Route::get('/manage-admin', [DUsersController::class, 'manage']);
        Route::get('/manage-users', [DUsersController::class, 'manageusers']);
        Route::post('/change-password/{id}', [DUsersController::class, 'changepassword']);

        //manage admin routes ends here


        //manage usertype routes starts here

        Route::get('/add-usertype', function () {
            return view('backend.manage-usertype.add-usertype');
        });
        Route::post('/add-usertype-submit', [DUserstypeController::class, 'create']);
        Route::get('/manage-usertype', [DUserstypeController::class, 'manage']);
        Route::get('/edit-usertype/{id}', [DUserstypeController::class, 'edit']);
        Route::post('/update-usertype/{id}', [DUserstypeController::class, 'update']);
        Route::get('/delete-usertype/{id}', [DUserstypeController::class, 'delete']);

        //manage usertype routes ends here


        //manage vehicletype routes starts here

        Route::get('/manage-vehicle-type', [DVehicleTypeController::class, 'manage']);
        Route::get('/add-vehicle-type', function () {
            return view('backend.manage-vehicle-type.add-vehicletype');
        });
        Route::post(
            '/add-vehicle-type-submit',
            [DVehicleTypeController::class, 'create']
        );
        Route::get('/edit-vehicle-type/{id}', [DVehicleTypeController::class, 'edit']);
        Route::post('/update-vehicle-type/{id}', [DVehicleTypeController::class, 'update']);
        Route::get(
            '/delete-vehicle-type/{id}',
            [DVehicleTypeController::class, 'delete']
        );

        //manage vehicletype routes starts here


        //manage vehicles routes starts here

        Route::get('/add-vehicle', [DVehiclesController::class, 'add']);
        Route::post('/add-vehicle-submit', [DVehiclesController::class, 'create']);
        Route::get('/edit-vehicle/{id}', [DVehiclesController::class, 'edit']);
        Route::post('/update-vehicle/{id}', [DVehiclesController::class, 'update']);
        Route::get('/delete-vehicle/{id}', [DVehiclesController::class, 'delete']);
        Route::get('/manage-vehicles', [DVehiclesController::class, 'manage']);

        //manage vehicles routes ends here


        //manage dealership routes starts here

        Route::get('/add-dealership', function () {
            return view('backend.manage-dealership.add-dealer');
        });
        Route::post('/add-dealership-submit', [DDealershipDetailsController::class, 'create']);
        Route::get('/edit-dealership/{id}', [DDealershipDetailsController::class, 'edit']);
        Route::post('/update-dealership/{id}', [DDealershipDetailsController::class, 'update']);
        Route::get('/delete-dealership/{id}', [DDealershipDetailsController::class, 'delete']);
        Route::get('/manage-dealership', [DDealershipDetailsController::class, 'manage']);
        //manage dealership routes starts here


        //manage book a ride routes starts here

        Route::get('/manage-book-ride', [DBookRideController::class, 'manage']);
        Route::get('/delete-book-ride/{id}', [DBookRideController::class, 'delete']);

        //manage book a ride routes ends here


        //manage career routes starts here

        Route::get('/manage-career', [DCareersController::class, 'manage']);
        Route::get('/delete-career/{id}', [DCareersController::class, 'delete']);

        //manage career routes ends here


        //manage contact us routes starts here

        Route::get('/manage-contact-us', [DContactUsController::class, 'manage']);
        Route::get('/delete-contact-us/{id}', [DContactUsController::class, 'delete']);

        //manage contact us routes ends here


        //manage dealership form routes starts here

        Route::get('/manage-form-dealership', [DDealershipController::class, 'manage']);
        Route::get('/delete-dealership-form/{id}', [DDealershipController::class, 'delete']);

        //manage dealership form routes ends here


        //manage gps routes starts here

        Route::get('/manage-gps', [DGpsController::class, 'manage']);
        Route::get('/delete-gps/{id}', [DGpsController::class, 'delete']);

        //manage gps routes ends here


        //manage gps routes starts here

        Route::get('/manage-lucky-draw', [DLuckyDrawController::class, 'manage']);
        Route::get('/delete-lucky-draw/{id}', [DLuckyDrawController::class, 'delete']);

        //manage gps routes ends here


        //manage stock routes starts here

        Route::get('/add-stock', [DStocksController::class, 'add']);
        Route::post('/add-stock-submit', [DStocksController::class, 'create']);
        Route::get('/edit-stock/{id}', [DStocksController::class, 'edit']);
        Route::post('/update-stock/{id}', [DStocksController::class, 'update']);
        Route::get('/delete-stock/{id}', [DStocksController::class, 'delete']);
        Route::get('/manage-stock', [DStocksController::class, 'manage']);

        //manage stock routes ends here


        //manage colors stock routes starts here

        Route::get('/add-colors-stock', function () {
            return view('backend.manage-colors-stock.add-colors-stock');
        });
        Route::post('/add-colors-stock-submit', [DStocksByColorsController::class, 'create']);
        Route::get('/edit-colors-stock/{id}', [DStocksByColorsController::class, 'edit']);
        Route::post('/update-colors-stock/{id}', [DStocksByColorsController::class, 'update']);
        Route::get('/delete-colors-stock/{id}', [DStocksByColorsController::class, 'delete']);
        Route::get('/manage-colors-stock', [DStocksByColorsController::class, 'manage']);

        //manage colors stock routes ends here


        //manage inquiries routes starts here

        Route::get('/add-inquiries', function () {
            return view('backend.manage-inquiries.add-inquiries');
        });
        Route::post('/add-inquiries-submit', [DInquiriesController::class, 'create']);
        Route::get('/edit-inquiries/{id}', [DInquiriesController::class, 'edit']);
        Route::post('/update-inquiries/{id}', [DInquiriesController::class, 'update']);
        Route::get('/delete-inquiries/{id}', [DInquiriesController::class, 'delete']);
        Route::get('/manage-inquiries', [DInquiriesController::class, 'manage']);
        Route::get('/manage-single-dealer-inquiries/{id}', [DInquiriesController::class, 'manage_single_dealer_inquiries']);
        Route::get('/search-inquiries', [DInquiriesController::class, 'search_inquiries']);


        //manage inquiries routes ends here



        // Route::get('/dealer-profile', [DDealershipDetailsController::class, 'dealerprofile']);
        Route::get('/manage-state-dealership', [DDealershipDetailsController::class, 'manage_state_dealership']);
        Route::get('/manage-zone-dealership', [DDealershipDetailsController::class, 'manage_zone_dealership']);
        Route::get('/manage-district-dealership', [DDealershipDetailsController::class, 'manage_district_dealership']);
        Route::get('/manage-taluka-dealership', [DDealershipDetailsController::class, 'manage_taluka_dealership']);
        Route::get('/manage-area-dealership', [DDealershipDetailsController::class, 'manage_area_dealership']);

        //This Route is only for admin because this route shows all customer and orders
        Route::get('/manage-all-customers', [DCustomersController::class, 'manage']);
        Route::get('/manage-all-orders', [DOrdersController::class, 'manage']);
    });
    // Admin Panel Routes Ends Here

    Route::get('/search-users', [DUsersController::class, 'searchUsers']);
    Route::get('/dealer-profile', [DDealershipDetailsController::class, 'dealerprofile']);
    Route::get('/my-stock', [DStocksController::class, 'my_stock']);
    //this route work for all dealership's dasboard
    Route::get('/manage-dealership-dashboard', [DDealershipDetailsController::class, 'dashboard_of_dealership']);

    //State Dealership Routes Starts Here
    Route::middleware('stateauth')->group(function () {
        // Route::get('/manage-dealership-dashboard', [DDealershipDetailsController::class, 'dashboard_of_dealership']);
        Route::get('/manage-zone-dealership-by-state', [DDealershipDetailsController::class, 'manage_zone_for_state']);
        Route::get('/manage-district-dealership-by-state', [DDealershipDetailsController::class, 'manage_district_for_state']);
        Route::get('/manage-taluka-dealership-by-state', [DDealershipDetailsController::class, 'manage_taluka_for_state']);
        Route::get('/manage-area-dealership-by-state', [DDealershipDetailsController::class, 'manage_area_for_state']);
        // Route::get('/header/state-customers/search', [DCustomersController::class, 'search_state_customers']);
    });
    //State Dealership Routes Ends Here


    //Zone Dealership Routes Starts Here
    Route::middleware('zoneauth')->group(function () {
        Route::get('/manage-district-dealership-by-zone', [DDealershipDetailsController::class, 'manage_district_for_zone']);
        Route::get('/manage-taluka-dealership-by-zone', [DDealershipDetailsController::class, 'manage_taluka_for_zone']);
        Route::get('/manage-area-dealership-by-zone', [DDealershipDetailsController::class, 'manage_area_for_zone']);
    });
    //Zone Dealership Routes Ends Here


    //District Dealership Routes Starts Here
    Route::middleware('districtauth')->group(function () {
        Route::get('/manage-taluka-dealership-by-district', [DDealershipDetailsController::class, 'manage_taluka_for_district']);
        Route::get('/manage-area-dealership-by-district', [DDealershipDetailsController::class, 'manage_area_for_district']);
    });
    //District Dealership Routes Ends Here


    //District Dealership Routes Starts Here
    Route::middleware('talukaauth')->group(function () {
        Route::get('/manage-area-dealership-by-taluka', [DDealershipDetailsController::class, 'manage_area_for_taluka']);
    });
    //District Dealership Routes Ends Here




    //This Route is only for admin because this route shows all customer 

    Route::get('/manage-customers', [DCustomersController::class, 'manage_own_customers']);
    Route::get('/add-customers', [DCustomersController::class, 'add']);
    Route::post('/add-customer-submit', [DCustomersController::class, 'create']);
    Route::get('/edit-customer/{id}', [DCustomersController::class, 'edit']);
    Route::post('/update-customer/{id}', [DCustomersController::class, 'update']);
    Route::get('/delete-customer/{id}', [DCustomersController::class, 'delete']);


    //manage customer routes ends here

    Route::get('/search-dealership', [DDealershipDetailsController::class, 'search_dealership']);
    Route::get('/search-state-dealership', [DDealershipDetailsController::class, 'search_state_dealership']);
    Route::get('/search-zone-dealership', [DDealershipDetailsController::class, 'search_zone_dealership']);
    Route::get('/search-district-dealership', [DDealershipDetailsController::class, 'search_district_dealership']);
    Route::get('/search-taluka-dealership', [DDealershipDetailsController::class, 'search_taluka_dealership']);
    Route::get('/search-area-dealership', [DDealershipDetailsController::class, 'search_area_dealership']);
    Route::get('/search-customer-by-admin', [DCustomersController::class, 'search_customer_by_admin']);
    Route::get('/search-orders', [DOrdersController::class, 'searchOrders']);



    //manage order routes starts here

    Route::get('/add-order', function () {
        return view('backend.manage-orders.add-order');
    });
    Route::get('/search-customer-chassisno', [DCustomersController::class, 'search_chassisno']);
    Route::post('/add-order-submit', [DOrdersController::class, 'create']);
    Route::get('/edit-order/{id}', [DOrdersController::class, 'edit']);
    Route::post('/update-order/{id}', [DOrdersController::class, 'update']);
    Route::get('/delete-order/{id}', [DOrdersController::class, 'delete']);
    Route::get('/manage-orders', [DOrdersController::class, 'manage_own_orders']);


    //manage order routes ends here




});