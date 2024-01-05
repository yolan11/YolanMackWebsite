<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/dashboard/login', [LoginController::class, 'create'])->name('Login.create');

    Route::post('/login/store', [LoginController::class, 'store'])->name('Login.store')->middleware('throttle:5,1');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('Logout');

    Route::post('/register/store', [RegisterController::class, 'store'])->name('registerStore');

    Route::get('/register', [RegisterController::class, 'create'])->name('Register.create');


});
