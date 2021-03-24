<?php

namespace App\Containers\SocialAuth\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
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
        $users = Socialite::driver($provider)->user();

        $existingUser = User::where('email', $users->email)->first();
        if (!$existingUser) {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $users->name;
            $newUser->email           = $users->email;
            $newUser->social_id       = $users->id;
            $newUser->is_client       = false;
            $newUser->social_avatar   = $users->avatar;
            $newUser->social_avatar_original = $users->avatar_original;
            $newUser->save();
            Auth::login($newUser);
        $email=Auth::user()->email;
        } else
        {
            // $prof=User::select('email')->where('email',$existingUser->email);
            Auth::login($existingUser);
            $email=Auth::user()->email;
        }
         
        return redirect('dashboard')->with('email',$email);
    }
}
