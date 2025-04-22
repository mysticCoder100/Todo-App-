<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::group([
    'controller' => LandingPageController::class,
], function () {
    Route::get('/','index');
    Route::get('/login','showLogin');
    Route::get('/register','showRegister');
});
