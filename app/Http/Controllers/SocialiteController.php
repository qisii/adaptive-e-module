<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * This function will redirect to Google
     * NA parameters
     * Void return
     */
    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    /**
     * This function will authenticate the user through the Google Account
     */
    public function googleAuthentication(){
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id, // if the user's google_id already existing
        ], [
            // data to insert or update
            'first_name' => $googleUser->first_name ?? null,
            'last_name' => $googleUser->last_name ?? null,
            'email' => $googleUser->email,
            'role_id' => 1,
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken ?? null,
        ]);

        /**
         * If no user is found, a new record is created.
         * If already exists, update with the new data (tokens, etc.)
         *  
        */
    
        // dd($user);
        Auth::login($user);
    
        return redirect('/profile/show');
    }
}