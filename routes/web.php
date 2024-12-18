<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});






Route::middleware(["auth"])->group(function() {
    Route::get("/dashboard", [dashboardController::class, "index"])->name("dashboard");
});


Route::middleware(["guest"])->group(function() {
    Route::get("/login", [loginController::class, "index"])->name("login");
    Route::post("/store", [loginController::class, "store"])->name("login.store");
});



Route::get('/fetch-kota', [DashboardController::class, 'fetchKota']);
