<?php


namespace App\Filters\Core;


use App\Filters\Core\traits\StatusIdFilter;
use App\Filters\FilterBuilder;
use App\Filters\Traits\UserFilterTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class UserFilter extends FilterBuilder
{
    use StatusIdFilter, UserFilterTrait;

    public function firstName($first_name = null)
    {
        $this->whereClause('first_name', "%{$first_name}%", 'LIKE');
    }

    public function lastName($last_name = null)
    {
        $this->whereClause('last_name', "%{$last_name}%", 'LIKE');
    }

    public function email($email = null)
    {
        $this->whereClause('email', "%{$email}%", 'LIKE');
    }

    public function search($search = null)
    {
        return $this->builder->when($search, function (Builder $builder) use ($search) {
            $builder->where('first_name', 'LIKE', "%$search%")
                ->orWhere('last_name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%$search%")
                ->orWhereRaw(DB::raw('CONCAT(`first_name`, " ", `last_name`) LIKE ?'), ["%$search%"]);
        });
    }

    public function type($type = null)
    {
        return $this->typeFilter($type);
    }

}
