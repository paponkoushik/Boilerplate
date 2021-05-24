<?php


namespace App\Mail\Tag;


class CrudTag extends Tag
{
    protected $crud;

    public function __construct($crud, $notifier, $receiver)
    {
        $this->crud = $crud;
        $this->notifier = $notifier;
        $this->receiver = $receiver;
        $this->resourceurl = route(config('notification.datatable_front_end_route_name'));
    }

    public function notification()
    {
        return array_merge([
            '{name}' => $this->role->name,
        ], $this->common());
    }
}