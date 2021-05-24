<?php


namespace App\Mail\Tag;


class RoleTag extends Tag
{
    protected $role;

    public function __construct($role, $notifier, $receiver)
    {
        $this->role = $role;
        $this->notifier = $notifier;
        $this->receiver = $receiver;
        $this->resourceurl = route(config('notification.role_front_end_route_name'));
    }

    public function notification()
    {
        return array_merge([
            '{name}' => $this->role->name,
        ], $this->common());
    }
}
