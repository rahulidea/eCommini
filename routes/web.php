<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::view("/login", "login");
Route::get("/logout", function(){
    Session::forget('user');
    return redirect('/login');
});

Route::post("/login", [UserController::class, "login"]);
Route::get("/", [ProductController::class, "index"]);

Route::get("/detail/{id}", [ProductController::class, "detail"]);
Route::get("/search", [ProductController::class, "search"]);
Route::post("/cart", [ProductController::class, "addtocart"]);
Route::get("/cart", [ProductController::class, "show_cart"]);
Route::get("/removecart/{id}", [ProductController::class, "remove_from_cart"]);