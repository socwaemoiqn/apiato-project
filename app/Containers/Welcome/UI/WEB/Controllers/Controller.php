<?php

namespace App\Containers\Welcome\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authentication\UI\WEB\Requests\LoginRequest;
use App\Containers\Authentication\UI\WEB\Requests\LogoutRequest;
use App\Containers\Authentication\UI\WEB\Requests\ResgiterRequest;
use App\Ship\Parents\Controllers\WebController;
use App\Ship\Transporters\DataTransporter;
use Exception;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  string
     */
    public function sayWelcome()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('welcome::welcome-page');
    }

    public function showResgiterPage()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('welcome::resgiter-page');
    }

    public function showLoginPage()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('welcome::login-page');
    }
    public function handleResgiter(ResgiterRequest $request)
    {
        try {
            $result = Apiato::call('Authentication@WebResgiterAction', [new DataTransporter($request)]);
        } catch (Exception $e) {
            return redirect('login')->with('status', $e->getMessage());
        }

        return is_array($result) ? redirect('home')->with($result) : redirect('dashboard');
    }
    public function handleLogut(LogoutRequest $request)
    {
        Apiato::call('Authentication@WebLogoutAction');

        return redirect('login');
    }

    public function showHomePage()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('welcome::home-page');
    }


}   
