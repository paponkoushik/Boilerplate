<?php

namespace App\Http\Requests\App;

use App\Models\App\SamplePage\Calendar;

class CalendarRequest extends AppRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->initRules(new Calendar());
    }
}
