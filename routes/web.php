<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('throttle:only_four_visits')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about', [AboutUsController::class, 'index'])
        ->name('about-us');
});

