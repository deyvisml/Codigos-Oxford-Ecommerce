<?php

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

Route::get('/', function () {
    return view('index');
});

// google auth
Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-auth/callback', function () {
 
    $google_user = Socialite::driver('google')->user();
 
    $user = User ::updateOrCreate([
        'google_id' => $google_user->id,
    ], [
        'name' => $google_user->name,
        'email' => $google_user->email
    ]);
 
    Auth::login($user);
 
    return redirect('/');
});
// end google auth

Route::get("/google-auth/logout", function(){
    auth()->logout();

    return redirect('/');
})->name("logout");


Route::post("/search", function(){
    return view("search");
})->name("search");

Route::get("/item", function(){
    return view("item");
})->name("item");

Route::get("/instituciones", function(){
    return view("instituciones");
})->name("instituciones");