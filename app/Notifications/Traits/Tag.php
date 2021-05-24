<?php


namespace App\Notifications\Traits;


trait Tag
{
    public function commonForSubject()
    {
        return [
            '{app_name}' => config('app.name'),
            '{action_by}' => optional(auth()->user())->full_name,
        ];
    }

    public function commonTagForSystem()
    {
        return $this->commonForSubject();
    }

    public function systemTemplateModifier($vars)
    {
        return array_map(function ($var) {
            return '<b>'.$var.'</b>';
        },$vars);
    }
}
