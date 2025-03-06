<?php

use App\Http\Controllers\DBookRideController;
use App\Http\Controllers\DCareersController;
use App\Http\Controllers\DContactUsController;
use App\Http\Controllers\DCustomersController;
use App\Http\Controllers\DDealershipController;
use App\Http\Controllers\DDealershipDetailsController;
use App\Http\Controllers\DGpsController;
use App\Http\Controllers\DLuckyDrawController;
use App\Http\Controllers\DNewsletterController;
use App\Http\Controllers\DOrdersController;
use App\Http\Controllers\DSolarController;
use App\Http\Controllers\DStocksController;
use App\Http\Controllers\DUsersController;
use App\Http\Controllers\DUserstypeController;
use App\Http\Controllers\DVehiclesController;
use App\Http\Controllers\DVehicleTypeController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Dl;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/vehicles', function () {
    return view('vehicles');
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

Route::get('/career ', function () {
    return view('carrers');
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


Route::middleware('usersauth')->group(function () {

    // Admin Panel Routes Starts Here
    Route::middleware('adminauth')->group(function () {

        Route::get('/dashboard', [DUsersController::class, 'dashboard']);


        //manage admin routes starts here
        Route::get('/logout', [DUsersController::class, 'logout']);
        Route::get('/admin-profile', [DUsersController::class, 'profile']);
        Route::get('/edit-admin/{id}', [DUsersController::class, 'edit']);
        Route::post('/update-admin/{id}', [DUsersController::class, 'update']);
        Route::post('/update-admin-profile/{id}', [DUsersController::class, 'updateprofile']);
        Route::get('/delete-admin/{id}', [DUsersController::class, 'delete']);
        Route::get('/manage-admin', [DUsersController::class, 'manage']);
        Route::post('/change-password/{id}', [DUsersController::class, 'changepassword']);
        Route::get('/admin-forgot-password', function () {
            return view('backend.auth.forgot-password');
        });
        Route::post('/admin-forgot-password-submit', [DUsersController::class, 'adminforgotpasswordotp']);
        Route::get('/admin-reset-password', function () {
            return view('backend.auth.re-password');
        });
        Route::post('/admin-reset-password-submit', [DUsersController::class, 'adminresetpassword']);

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
        Route::get('/search-users', [DUsersController::class, 'searchUsers']);
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
    });


    Route::get('/dealer-profile/{id}', [DDealershipDetailsController::class, 'dealerprofile']);
    Route::get('/user-profile/{id}', [DUsersController::class, 'userprofile']);


    // Admin Panel Routes Ends Here


    //manage zone dealership routes starts here

    Route::get('/manage-state-dealership', [DDealershipDetailsController::class, 'manage_state_dealership']);

    //manage zone dealership routes ends here


    //manage zone dealership routes starts here

    Route::get('/manage-zone-dealership', [DDealershipDetailsController::class, 'manage_zone_dealership']);

    //manage zone dealership routes ends here



    //manage district dealership routes starts here

    Route::get('/manage-district-dealership', [DDealershipDetailsController::class, 'manage_district_dealership']);

    //manage district dealership routes ends here


    //manage taluka dealership routes starts here

    Route::get('/manage-taluka-dealership', [DDealershipDetailsController::class, 'manage_taluka_dealership']);

    //manage taluka dealership routes ends here


    //manage area dealership routes starts here

    Route::get('/manage-area-dealership', [DDealershipDetailsController::class, 'manage_area_dealership']);

    //manage area dealership routes ends here


    //manage customer routes starts here

    Route::get('/manage-customers', [DCustomersController::class, 'manage']);
    Route::get('/add-customers', [DCustomersController::class, 'add']);
    Route::post('/add-customer-submit', [DCustomersController::class, 'create']);
    Route::get('/edit-customer/{id}', [DCustomersController::class, 'edit']);
    Route::post('/update-customer/{id}', [DCustomersController::class, 'update']);
    Route::get('/delete-customer/{id}', [DCustomersController::class, 'delete']);

    //manage customer routes ends here



    //manage order routes starts here

    Route::get('/add-order', function () {
        return view('backend.manage-orders.add-order');
    });
    Route::post('/add-order-submit', [DOrdersController::class, 'create']);
    Route::get('/edit-order/{id}', [DOrdersController::class, 'edit']);
    Route::post('/update-order/{id}', [DOrdersController::class, 'update']);
    Route::get('/delete-order/{id}', [DOrdersController::class, 'delete']);
    Route::get('/manage-orders', [DOrdersController::class, 'manage']);

    //manage order routes ends here



    //manage stock routes starts here

    Route::get('/add-stock', [DStocksController::class, 'add']);
    Route::post('/add-stock-submit', [DStocksController::class, 'create']);
    Route::get('/edit-stock/{id}', [DStocksController::class, 'edit']);
    Route::post('/update-stock/{id}', [DStocksController::class, 'update']);
    Route::get('/delete-stock/{id}', [DStocksController::class, 'delete']);
    Route::get('/manage-stock', [DStocksController::class, 'manage']);

    //manage stock routes ends here
});