<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PagesController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {

    Route::middleware('admin:admin')->group(function () {
        Route::get('login', [LoginController::class, 'loginPage'])->name('login.show');
        Route::post('login', [LoginController::class, 'login'])->name('login');
    });

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:sanctum,admin', 'auth:admin', config('jetstream.auth_session'), 'verified')->group(function () {

        Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
        Route::get('profile', [PagesController::class, 'profile'])->name('profile');

        Route::prefix('orders')->name('orders.')->group(function () {

            Route::get('/', [PagesController::class, 'orders'])->name('all');
        });

    });

});