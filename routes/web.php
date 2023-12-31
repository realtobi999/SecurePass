<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PasswordGenerateController;
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


// Home page 
Route::get("/", function() { return view("index");});


// User Authentication 
Route::get("/vault/register", [RegisterController::class, "index"]);
Route::post("/vault/register", [RegisterController::class, "store"]);

Route::get("vault/login", [LoginController::class, "index"])->name("login");
Route::post("vault/login", [LoginController::class, "store"]);
Route::get("vault/logout", [LoginController::class, "destroy"])->name("logout");


// User Vault - CRUD Passwords
Route::middleware("auth")->group(function () {
    Route::prefix("vault")->group(function () {

        // Create password
        Route::get("store", function () { return view("app.password.store"); });
        Route::post("store", [PasswordController::class, "store"]);

        // (Read) User Dashboard
        Route::get("dashboard", function () { return view("app.vault.dashboard", ["passwords" => PasswordController::index()]); });

        // Update password
        Route::put("dashboard", [PasswordController::class, "update"])->name("password.update");
        
        // Delete password
        Route::delete("dashboard", [PasswordController::class, "destroy"])->name("password.destroy");

        // Password generator
        Route::get("password-generator", function() { return view("app.password.generate"); });
    });
});
