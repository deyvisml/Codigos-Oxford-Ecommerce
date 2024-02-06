<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite; // google auth

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        // https://stackoverflow.com/a/44663563/15694873
        $original_url = url()->previous();
        session(['original_url' => $original_url]);

        return Socialite::driver('google')->redirect();
    }

    public function store()
    {
        $google_user = Socialite::driver('google')->user();

        $user_data = $google_user->user;

        $user = User::updateOrCreate([
            'google_id' => $google_user->id,
        ], [
            'first_name' => $user_data["given_name"],
            'family_name' => $user_data["family_name"],
            'picture' => $user_data["picture"],
            'locale' => $user_data["locale"],
            'email' => $user_data["email"]
        ]);

        if ($user->wasRecentlyCreated) {
            $id_client_rol = 1;
            $role_user = RoleUser::create([
                "user_id" => $user->id,
                "role_id" => $id_client_rol,
            ]);
        }

        Auth::login($user);

        $original_url = session('original_url');

        return redirect()->to($original_url);
    }
}
