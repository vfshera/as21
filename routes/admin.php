<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PagesController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware([])->name('admin.')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [LoginController::class, 'loginPage'])->name('login.show');
        Route::post('login', [LoginController::class, 'login'])->name('login');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    });

    Route::middleware('auth:admin', config('jetstream.auth_session'))->group(function () {

        Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
        Route::get('profile', [PagesController::class, 'profile'])->name('profile');

    });

});