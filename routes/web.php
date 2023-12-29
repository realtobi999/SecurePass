<?php

use App\Http\Controllers\DashboardVaultController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
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

Route::get("/", [HomeController::class, "index"]);

// User registration routes
Route::get("/vault/register", [RegisterController::class, "index"]);
Route::post("/vault/register", [RegisterController::class, "store"]);

// User login routes
Route::get("vault/login", [LoginController::class, "index"])->name("login");
Route::post("vault/login", [LoginController::class, "store"]);

// User dashboard
Route::get("vault/dashboard", function () { return view("app.vault.dashboard", ["passwords" => PasswordController::index()]); })->middleware("auth");

// Store password
Route::get("vault/store", function () { return view("app.vault.store"); })->middleware("auth");
Route::post("vault/store", [PasswordController::class, "store"])->middleware("auth");

// Update password
Route::put("vault/dashboard", [PasswordController::class, "update"])->middleware("auth")->name("password.update");

// Delete password
Route::delete("vault/dashboard", [PasswordController::class, "destroy"])->middleware("auth")->name("password.destroy");
