<?php

use App\Models\User;
use App\Models\Serie;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LocationsController;
use App\Models\Product;
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

Route::get("/products/{product}", [ProductController::class, "index"])->name("products.index");

// problem with route model bidding custom keys https://stackoverflow.com/a/61073459/15694873
Route::get("/catalogo/{category:name}/{serie}/{product}", [ProductController::class, "show"])->name("products.show");


// google auth
Route::get('/google-auth/redirect', [LoginController::class, "index"])->name("login.index");

Route::get('/google-auth/callback', [LoginController::class, "store"]);

Route::get("/google-auth/logout", [LogoutController::class, "store"])->name("logout");
// end google auth




Route::get("/search", [SearchController::class, "index"])->name("search.index");



// Route::get("/catalogo/{product:isbn}", [ProductController::class, "index"])->name("products.show");


Route::get("/instituciones", function () {
    return view("instituciones");
})->name("instituciones");
