<?php

use App\Http\Controllers\TableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix("/products")->group(function (){
    Route::get("/list", [\App\Http\Controllers\ProductController::class, "displayProduct"])->name("product.list");
    Route::get("/order/{id}", [\App\Http\Controllers\ProductController::class, "showOrderApi"])->name("orders.list");
    Route::get("/detail/{id}", [\App\Http\Controllers\ProductController::class, "detailApi"])->name("product.detail");
    Route::post("/create", [\App\Http\Controllers\ProductController::class, "createProductApi"])->name("product.create");
});


