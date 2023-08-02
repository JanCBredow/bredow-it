<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

## ACP
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect(\route('bookings.index'));
})->name('dashboard');

## Appointment Booking
Route::prefix('/bookings')->group(function () {
    Route::get('/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/webhook', [BookingController::class, 'webhook'])->name('bookings.webhook');
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/', [BookingController::class, 'index'])->name('bookings.index');
        Route::get('/{booking}', [BookingController::class, 'show'])->name('bookings.show');
    });
});

Route::prefix('/contact')->group(function(){

    Route::get('/', [ContactController::class, 'contact'])->name('contact');
    Route::post('/', [ContactController::class, 'thankYou'])->name('contact-thanks');
});

## Landing
Route::get('/', function () {
    return view('landing.welcome');
})->name('welcome');

Route::get('/services', function () {
    return view('landing.services');
})->name('services');

Route::get('/about', function () {
    return view('landing.imprint');
})->name('about');

Route::get('/privacy', function () {
    return view('landing.privacy');
})->name('privacy');

Route::get('/faq', function () {
    return view('landing.faq');
})->name('faq');

Route::get('/imprint', function () {
    return view('landing.imprint');
})->name('imprint');

Route::get('/terms', function () {
    return view('landing.terms');
})->name('terms');


## Deprecated routes

## Route::get('/qr/{qrCode}', [QrController::class, 'scan']);
## Route::get('/locations', function () {
##     return view('landing.locations');
## })->name('locations');
## Route::get('/jobs', function () {
##     return view('landing.imprint');
## })->name('jobs');


