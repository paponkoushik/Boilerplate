<?php


namespace App\Notifications\App\Crud;


use App\Mail\Tag\CrudTag;
use App\Notifications\BaseNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class CrudNotification extends BaseNotification implements ShouldQueue
{
    use Queueable;

    public function __construct($templates, $via, $crud)
    {
        $this->templates = $templates;
        $this->via = $via;
        $this->model = $crud;
        $this->auth = auth()->user();
        $this->tag = CrudTag::class;
        parent::__construct();
    }

    public function parseNotification()
    {
        $this->mailView = 'tables.advance-datatable';
        $this->databaseNotificationUrl = route(config('notification.datatable_front_end_route_name'), [
            'crud' => $this->model->id
        ]);

        $this->mailSubject = $this->template()->mail()->parseSubject([
            '{name}' => $this->model->name
        ]);

        $this->databaseNotificationContent = $this->template()->database()->parse([
            '{name}' => $this->model->name
        ]);
    }
}