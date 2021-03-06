<?php

namespace App\Containers\Authentication\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authentication\UI\WEB\Requests\LoginRequest;
use App\Containers\Authentication\UI\WEB\Requests\LogoutRequest;
use App\Containers\Authentication\UI\WEB\Requests\ResgiterRequest;
use App\Containers\Authentication\UI\WEB\Requests\ViewDashboardRequest;
use App\Containers\User\Models\User;
use App\Ship\Parents\Controllers\WebController;
use App\Ship\Transporters\DataTransporter;
use Exception;
use Illuminate\Support\Facades\Auth;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginPage()
    {
        return view('authentication::login');
    }

    /**
     * @return  \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logoutAdmin(LogoutRequest $request)
    {
        Apiato::call('Authentication@WebLogoutAction');

        return redirect('login');
    }

    /**
     * @param \App\Containers\Authentication\UI\WEB\Requests\LoginRequest $request
     *
     * @return  \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginAdmin(LoginRequest $request)
    {
        try {
            $result = Apiato::call('Authentication@WebAdminLoginAction', [new DataTransporter($request)]);
        } catch (Exception $e) {
            return redirect('login')->with('status', $e->getMessage());
        }

        return is_array($result) ? redirect('login')->with($result) : redirect('dashboard');
    }

    /**
     * @param \App\Containers\Authentication\UI\WEB\Requests\ViewDashboardRequest $request
     *
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewDashboardPage(ViewDashboardRequest $request)
    {
        $email=Auth::user()->name;
        return view('authentication::dashboard')->with('email',$email);
    }

    public function showResgiterPage()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('authentication::logup');
    }

    public function handleResgiter(ResgiterRequest $request)
    {
        try {
            $result = Apiato::call('User@RegisterUserAction', [new DataTransporter($request)]);
        } catch (Exception $e) {
            return redirect('resgiter')->with('status', $e->getMessage());
        }

        return redirect('login')->with('status','????ng k?? th??nh c??ng!');
    }

    public function handleLogut(LogoutRequest $request)
    {
        Apiato::call('Authentication@WebLogoutAction');

        return redirect('login');
    }
}
