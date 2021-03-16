<?php

namespace App\Containers\Authentication\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Class WebLoginAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class WebResgiterAction extends Action
{

    /**
     * @param \App\Ship\Transporters\DataTransporter $data
     *
     * @return  \Illuminate\Contracts\Auth\Authenticatable
     */
    public function run(DataTransporter $data): Authenticatable
    {   
        $user = new User();

        $user->email = $data->email;
        $user->password = $data->password;
        $user->remember = $data->remember;

        $user->save();

        return $user;
    }
}
