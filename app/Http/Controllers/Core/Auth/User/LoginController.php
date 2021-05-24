<?php

namespace App\Http\Controllers\Core\Auth\User;

use App\Helpers\App\Traits\ReCaptchaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Core\Auth\User\LoginRequest as Request;
use App\Services\Core\Auth\UserService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LoginController extends Controller
{
    use ReCaptchaHelper;
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }


    public function show()
    {
        $recaptcha = $this->getReCaptcha();
        return view('auth.login', $recaptcha);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function login(Request $request)
    {
        try {

            $this->service->login();
            $route = home_route();

            return route(
                $route['route_name'],
                ['params' => $route['route_params']]
            );
        }catch (\Exception $exception){
            return response()->json([
                'message' => $exception instanceof ModelNotFoundException ? trans('default.resource_not_found', ['resource' => trans('default.user')]) : $exception->getMessage()
            ], 403);
        }
    }

    public function logOut()
    {
        auth()->logout();

        return redirect()->route('users.login.index');
    }

}
