<?php

namespace App\Filters\App\Role;


use App\Filters\App\Traits\DateRangeFilter;
use App\Filters\FilterBuilder;

class RoleFilter extends FilterBuilder
{
    use DateRangeFilter;

    public function search($search = null)
    {
        $this->groupSearch($search, ['type_id']);
    }

}