<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("/auth")->group(function() {
    Route::get("/login", [\App\Http\Controllers\AuthController::class, "showFormLogin"])->name("login.form");
    Route::post("/login", [\App\Http\Controllers\AuthController::class, "login"])->name("auth.login");
    Route::get("/logout", [\App\Http\Controllers\AuthController::class, "logout"])->name("auth.logout");
    Route::get("/register", [\App\Http\Controllers\AuthController::class, "showFormRegister"])->name("register.form");
    Route::post("/register", [\App\Http\Controllers\AuthController::class, "register"])->name("auth.register");
});

Route::get('/auth/redirect/{provider}', [SocialController::class,'redirect']);

Route::get('/callback/{provider}', [SocialController::class, 'callback']);


