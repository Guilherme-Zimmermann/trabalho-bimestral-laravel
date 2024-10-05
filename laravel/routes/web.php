<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FinanceController;

Route::get('/', function () {
    return redirect()->route('users.index');
});

Route::prefix('usuarios')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/', [UserController::class, 'store'])->name('store');
});

Route::prefix('financeiro')->name('finances.')->group(function () {
    Route::get('/', [FinanceController::class, 'index'])->name('index');
    Route::post('/', [FinanceController::class, 'store'])->name('store');
});
