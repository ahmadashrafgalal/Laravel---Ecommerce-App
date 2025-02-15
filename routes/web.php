<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

    Route::get('/addProduct', [ProductController::class, 'create'])->name('products.create');
    Route::post('/addProduct', [ProductController::class, 'store'])->name('products.store');

    Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});