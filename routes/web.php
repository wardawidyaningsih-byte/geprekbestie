<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [StoreController::class, 'index'])
    ->name('home');

Route::get('/stores/{store}', [StoreController::class, 'show'])
    ->name('stores.show');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::middleware(['role:admin'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'admin']);

});

Route::middleware(['role:super_admin'])->group(function () {

    Route::get('/super-admin/dashboard', [DashboardController::class, 'superAdmin']);

});