<?php

use App\Http\Controllers\StaticPages\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', [ContactUsController::class, 'index'])
    ->name('contact-us');

Route::get('thankyou', [ContactUsController::class, 'thankyou'])
    ->name('thankyou');
