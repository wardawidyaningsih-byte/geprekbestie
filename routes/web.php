<?php

use App\Http\Controllers\AdminManagementController;
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

    Route::get('/super-admin/dashboard', [DashboardController::class, 'superAdmin'])
        ->name('superadmin.dashboard');

    // Kelola Admin
    Route::get('/super-admin/admins', [AdminManagementController::class, 'index'])
        ->name('admins.index');

    Route::get('/super-admin/admins/create', [AdminManagementController::class, 'create'])
        ->name('admins.create');

    Route::post('/super-admin/admins', [AdminManagementController::class, 'store'])
        ->name('admins.store');

    Route::get('/super-admin/admins/{user}/edit', [AdminManagementController::class, 'edit'])
        ->name('admins.edit');

    Route::put('/super-admin/admins/{user}', [AdminManagementController::class, 'update'])
        ->name('admins.update');

    Route::delete('/super-admin/admins/{user}', [AdminManagementController::class, 'destroy'])
        ->name('admins.destroy');

});