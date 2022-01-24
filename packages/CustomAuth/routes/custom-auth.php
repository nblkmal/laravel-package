<?php

use Illuminate\Support\Facades\Route;
use Nblkmal\CustomAuth\Http\Controllers\RegisterController;

Route::middleware('web')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('register', [RegisterController::class, 'create'])->name('register');
        Route::post('register', [RegisterController::class, 'store'])->name('register.attempt');
    });
    Route::middleware('auth')->group(function () {
        Route::get('home', function () {
            return view('custom-auth::home');
        })->name('home');
    });
});