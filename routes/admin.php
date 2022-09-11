<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PagesController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'loginPage'])->name('login.show');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

});