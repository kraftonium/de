<?php

use App\Http\Controllers\DBookRideController;
use App\Http\Controllers\DCareersController;
use App\Http\Controllers\DContactUsController;
use App\Http\Controllers\DDealershipController;
use App\Http\Controllers\DGpsController;
use App\Http\Controllers\DLuckyDrawController;
use App\Http\Controllers\DNewsletterController;
use App\Http\Controllers\DSolarController;
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


// Admin Panel Routes Starts Here

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/register', [DUsersController::class, 'register']);
Route::post('/register-submit', [DUsersController::class, 'create']);
Route::get('/login', function () {
    return view('backend.auth.login');
});
Route::post('/login-submit', [DUsersController::class, 'login']);


Route::middleware('usersauth')->group(function () {

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
});


// Admin Panel Routes Ends Here