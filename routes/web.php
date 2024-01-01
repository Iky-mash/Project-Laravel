<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('user', 'user')->name('user');
    Route::post('user', 'userAction')->name('user.action');
    // Ganti route login menjadi 'admin'
    Route::get('admin', 'login')->name('admin');
    Route::post('admin', 'loginAction')->name('admin.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('dashboardUser', DashboardController::class);
    Route::get('user/dashboard', [DashboardController::class, 'index'])->name('dashboardUser');
    Route::get('show/{id}', [DashboardController::class, 'show'])->name('product.show');

    //dashboardUser
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('update/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::resource('users', UserController::class);
    Route::get('/profile', [UserController::class, 'index'])->name('users');
});
