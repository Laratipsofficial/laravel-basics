<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('contact-submit', function () {
    session()->flash('alertMessage', 'Contact us form submitted successfully.');

    return redirect()->route('home');
})->name('contact-submit');
