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


//manage admin routes starts here
Route::middleware('usersauth')->group(function () {

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
});

//manage admin routes starts here

// Admin Panel Routes Ends Here