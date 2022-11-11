<?php

use App\Http\Controllers\{HomeController, LoginController};
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::controller(LoginController::class)->prefix('/login')->as('login.')->group(function () {
    Route::get('/', 'index')->name('index');
});
