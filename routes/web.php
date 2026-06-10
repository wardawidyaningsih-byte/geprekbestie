<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', [StoreController::class, 'index'])
    ->name('home');

Route::get('/stores/{store}', [StoreController::class, 'show'])
    ->name('stores.show');