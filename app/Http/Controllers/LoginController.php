<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite; // google auth

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return Socialite::driver('google')->redirect();
    }

    public function store()
    {
        $google_user = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $google_user->id,
        ], [
            'name' => $google_user->name,
            'email' => $google_user->email
        ]);

        Auth::login($user);

        return redirect()->route("landingpage.index");
    }
}
