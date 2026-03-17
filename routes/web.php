<?php

use App\Http\Controllers\StaticPages\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.static.welcome');
});

Route::get('contact-us', [ContactUsController::class, 'index'])
    ->name('web.static.contact-us');

Route::get('contact-us', [ContactUsController::class, 'store'])
    ->name('static.contact-us.store');

Route::get('thank-you', [ContactUsController::class, 'thank-you'])
    ->name('static.thank-you');
