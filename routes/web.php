<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group([
    'controller' => LandingPageController::class,
], function () {
    Route::get('/','index');
    Route::get('/login','showLogin')->name('login');
    Route::post('/login','performLogin');
    Route::get('/register','showRegister');
    Route::post('/register','performRegister');

});

Route::group([
    "prefix" => "app",
    "middleware" => ["auth"],
], function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
});
