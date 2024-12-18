<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\formController;
use App\Http\Controllers\loginController;
use App\Models\provinsiModel;
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
    $provinsi = provinsiModel::all();
    return view('form', compact("provinsi"));
});

Route::post("/store/form", [formController::class, "store"])->name("form.store");






Route::middleware(["auth"])->group(function() {
    Route::get("/dashboard", [dashboardController::class, "index"])->name("dashboard");
    Route::get("/edit/{id}", [dashboardController::class, "edit"])->name("edit");
    Route::put("/put/{id}", [formController::class, "update"])->name("update");
    Route::delete("/delete/{id}", [dashboardController::class, "destroy"])->name("delete");
});


Route::middleware(["guest"])->group(function() {
    Route::get("/login", [loginController::class, "index"])->name("login");
    Route::post("/store", [loginController::class, "store"])->name("login.store");
});



Route::get('/fetch-kota', [DashboardController::class, 'fetchKota']);
