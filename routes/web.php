<?php

use App\Http\Controllers\DashboardVaultController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StorePasswordController;
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
Route::get("vault/dashboard", [DashboardVaultController::class, "index"])->middleware("auth");

// Store password
Route::get("vault/store", [StorePasswordController::class, "index"])->middleware("auth");
Route::post("vault/store", [StorePasswordController::class, "store"])->middleware("auth");
