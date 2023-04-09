<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite; // google auth

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

Route::get('/', [HomeController::class, "index"])->name("home.index");

// google auth
Route::get('/google-auth/redirect', [LoginController::class, "index"])->name("login.index");

Route::get('/google-auth/callback', [LoginController::class, "store"]);

Route::get("/google-auth/logout", [LogoutController::class, "store"])->name("logout");
// end google auth


Route::get("/search", [SearchController::class, "index"])->name("search.index");

Route::get("/catalogo/{category:name}/{serie:name}/{product:isbn}", [ProductController::class, "index"])->name("products.show");


Route::get("/instituciones", function () {
    return view("instituciones");
})->name("instituciones");
