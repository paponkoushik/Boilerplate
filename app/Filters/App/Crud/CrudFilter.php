<?php


namespace App\Filters\App\Crud;


use App\Filters\App\Traits\DateRangeFilter;
use App\Filters\App\Traits\SearchFilter;
use App\Filters\App\Traits\StatusFilter;
use App\Filters\FilterBuilder;
use Illuminate\Database\Eloquent\Builder;

class CrudFilter extends FilterBuilder
{
    use DateRangeFilter, SearchFilter, StatusFilter;

    public function ageRange($age = null)
    {
        $age = json_decode(htmlspecialchars_decode($age), true);
        $this->builder->when($age, function (Builder $builder) use ($age) {
            $builder->whereBetween('age', array_values($age));
        });
    }

    public function filterWithGender($gender = null)
    {
        $this->whereClause('gender', $gender);
    }

    public function searchSelect($name = null)
    {
        $this->whereClause('name', $name);
    }

}
