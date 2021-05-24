<?php

namespace App\Http\Controllers\App\Auth;

use App\Helpers\App\Traits\ReCaptchaHelper;
use App\Http\Controllers\Controller;


class AuthenticateUserController extends Controller
{
    use ReCaptchaHelper;
    public function show()
    {
        return auth()->user()->load('roles:id,name', 'profile:id,user_id,gender,date_of_birth,address,contact', 'profilePicture', 'status:id,name,class', 'socialLinks');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerView()
    {
        $recaptcha = $this->getReCaptcha();
        return view('frontend.user.invitation_confirm', $recaptcha);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resetPasswordView()
    {
        $recaptcha = $this->getReCaptcha();
        return view('frontend.user.reset_password', $recaptcha);
    }
}
