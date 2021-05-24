<?php


namespace App\Filters\App\Traits;


trait SearchFilter
{
    public function search($search = null)
    {
        $this->singleSearch($search, 'name');
    }
}
