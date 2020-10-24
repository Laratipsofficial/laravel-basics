<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('contact-us', [ContactUsController::class, 'store'])->name('contact-us.store');
Route::get('signup', [SignupController::class, 'signupForm'])->name('signup.form');
Route::post('signup', [SignupController::class, 'signup'])->name('signup');
Route::get('comments', [CommentController::class, 'index'])->name('comment.index');