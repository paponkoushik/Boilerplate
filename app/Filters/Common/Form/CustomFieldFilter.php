<?php


namespace App\Filters\Common\Form;


use App\Filters\Common\FilterContact;
use Illuminate\Database\Eloquent\Builder;

class CustomFieldFilter extends FilterContact
{

    function filter(): Builder
    {
        return $this->query;
    }
}
