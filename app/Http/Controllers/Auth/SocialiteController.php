<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $socialUser = Socialite::driver('google')->user();

        $registeredUser = User::where("google_id", $socialUser->id)->first();

        if (!$registeredUser) {
            // Simpan data penggunaan yang diterima dari Google ke dalam session
            session(['social_user' => $socialUser]);
            return redirect('/register'); // Redirect ke halaman registrasi
        }

        Auth::login($registeredUser);

        return redirect('/home');
    }
}
