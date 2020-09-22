<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about/{slug?}', [AboutUsController::class, 'index'])->name('about-us');
Route::get('post/{post}/comments/{comment}', function ($post, $comment) {
    return "post";
})->name('post.comment');


Route::get('secret', function (Request $request) {
    return "This is a secret message";
})->name('secret')->middleware('signed');
