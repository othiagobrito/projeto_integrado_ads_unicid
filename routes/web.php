<?php

use App\Http\Controllers\{HomeController, LoginController, RegisterClientController, RegisterWorkerController, SchedulingController};
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::controller(LoginController::class)->prefix('/login')->as('login.')->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::prefix('/cadastro')->as('register.')->group(function () {
    Route::controller(RegisterWorkerController::class)->prefix('/funcionario')->as('worker.')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(RegisterClientController::class)->prefix('/cliente')->as('client.')->group(function () {
        Route::get('/', 'index')->name('index');
    });
});

Route::controller(SchedulingController::class)->prefix('/agendamento')->as('scheduling.')->group(function () {
    Route::get('/', 'index')->name('index');
});
