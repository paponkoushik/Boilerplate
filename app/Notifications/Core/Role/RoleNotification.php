<?php

namespace App\Notifications\Core\Role;

use App\Mail\Tag\RoleTag;
use App\Notifications\BaseNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class RoleNotification extends BaseNotification implements ShouldQueue
{
    use Queueable;

    public function __construct($templates, $via, $role)
    {
        $this->templates = $templates;
        $this->via = $via;
        $this->model = $role;
        $this->auth = auth()->user();
        $this->tag = RoleTag::class;
        parent::__construct();
    }

    public function parseNotification()
    {
        $this->mailView = 'notification.mail.role.index';
        $this->databaseNotificationUrl = route(config('notification.role_front_end_route_name'), [
            'role' => $this->model->id
        ]);

        $this->mailSubject = optional($this->template()->mail())->parseSubject([
            '{name}' => $this->model->name
        ]);

        $this->databaseNotificationContent = optional($this->template()->database())->parse([
            '{name}' => $this->model->name
        ]);

        /* $this->nexmoNotificationContent = $this->template()->sms()->parse([
            '{name}' => $this->model->name
        ]); */

    }
}
