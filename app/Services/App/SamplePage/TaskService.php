<?php

namespace App\Services\App\SamplePage;


use App\Models\App\SamplePage\KanbanView\Task;
use App\Services\App\AppService;

class TaskService extends AppService
{
    public function __construct(Task $task)
    {
        $this->model = $task;
    }

}
