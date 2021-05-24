<?php


namespace App\Mail\Tag;


use Illuminate\Support\Facades\URL;

class UserTag extends Tag
{
    protected $user;

    public function __construct($user, $notifier = null, $receiver = null)
    {
        $this->user = $user;
        $this->notifier = $notifier;
        $this->receiver = $receiver;
        $this->resourceurl = route(config('notification.user_front_end_route_name'));
    }

    public function passwordReset($token)
    {
        return array_merge([
            '{receiver_name}' => $this->user->full_name,
            '{reset_password_url}' => URL::signedRoute('reset-password.index', [
                'token' => $token,
                'email' => $this->user->email
            ])
        ], $this->appNameAndLogo());
    }

    public function passwordResetSubject()
    {
        return array_merge([
            '{name}' => optional($this->user)->full_name
        ], $this->appNameAndLogo());
    }

    public function invitation()
    {
        return array_merge([
            '{action_by}' => $this->notifier->full_name,
            '{receiver_name}' => $this->user->full_name,
            '{invitation_url}' => URL::signedRoute('user-invite.index', [
                'invitation_token' => $this->user->invitation_token
            ]),
        ], $this->appNameAndLogo());
    }

    public function invitationSubject()
    {
        return array_merge([
            '{name}' => optional($this->user)->full_name
        ], $this->appNameAndLogo());
    }

    public function notification()
    {
        return array_merge([
            '{name}' => $this->user->full_name,
        ], $this->common());
    }
}
