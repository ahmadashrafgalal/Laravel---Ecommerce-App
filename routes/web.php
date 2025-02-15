<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {return view('welcome');});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Require Login page test
Route::middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('products.home');
    })->name('products.home');
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});