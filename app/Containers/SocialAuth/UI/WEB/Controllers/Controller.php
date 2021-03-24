<?php

namespace App\Containers\SocialAuth\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;
use Laravel\Socialite\Facades\Socialite;
use App\Containers\User\Models\User;
use Illuminate\Support\Facades\Auth;
/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @param $provider
     *
     * @return  mixed
     */
    public function redirectAll($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param $provider
     *
     * @return  mixed
     */
    public function handleCallbackAll($provider)
    {
        
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('login');
        }
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            Auth::login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->social_id;
            $newUser->social_avatar          = $user->social_avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            Auth::login($newUser, true);
        }
        return redirect('dashboard');
    }

}
