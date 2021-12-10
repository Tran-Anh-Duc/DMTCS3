<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
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

Route::prefix('tables')->group(function () {
    Route::get('/', [TableController::class, 'index'])->name('tables.index');
    Route::get('/create', [TableController::class, 'showFormCreate'])->name('tables.showFormCreate');
    Route::post('/create', [TableController::class, 'store'])->name('tables.store');
    Route::get('/edit/{id}', [TableController::class, 'showFormEdit'])->name('tables.showFormEdit');
    Route::post('/edit/{id}', [TableController::class, 'update'])->name('tables.update');
    Route::get('delete/{id}', [TableController::class, 'destroy'])->name('tables.destroy');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, "index"])->name("products.list");
    Route::get('/create', [ProductController::class, "showFormCreate"])->name("create.form");
    Route::post('/create', [ProductController::class, "store"])->name("products.create");
    Route::get('/edit/{id}', [ProductController::class, "showFormEdit"])->name("edit.form");
    Route::post('/edit/{id}', [ProductController::class, "update"])->name("products.edit");
    Route::get('/delete/{id}', [ProductController::class, "destroy"])->name("products.delete");
    Route::get('/detail/{id}', [ProductController::class, "showDetail"])->name("products.detail");
    Route::get('/order/{id}', [ProductController::class, "showOrder"])->name("products.order");

});

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'showFormCreate'])->name('categories.showFormCreate');
    Route::post('/create', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/edit/{id}', [CategoryController::class, 'showFormEdit'])->name('categories.showFormEdit');
    Route::post('/edit/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/detail/{id}', [CategoryController::class, 'showDetail'])->name('categories.showDetail');
});


Route::prefix("/auth")->group(function () {
    Route::get("/login", [AuthController::class, "showFormLogin"])->name("login.form");
    Route::post("/login", [AuthController::class, "login"])->name("auth.login");
    Route::get("/logout", [AuthController::class, "logout"])->name("auth.logout");
    Route::get("/register", [AuthController::class, "showFormRegister"])->name("register.form");
    Route::post("/register", [AuthController::class, "register"])->name("auth.register");
});

Route::prefix("/users")->group(function(){
    Route::get("/", [UserController::class, "index"])->name("users.list");
    Route::get("/edit/{id}", [UserController::class, "showFormEdit"])->name("users.showFormEdit");
    Route::post("/edit/{id}", [UserController::class, "edit"])->name("users.edit");
    Route::get("/delete/{id}", [UserController::class, "delete"])->name("users.delete");
});

Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);


