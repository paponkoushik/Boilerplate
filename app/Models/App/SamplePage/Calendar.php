<?php

namespace App\Models\App\SamplePage;

use App\Models\App\Traits\CalendarValidationRules;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory,CalendarValidationRules;
    protected $fillable = ['title','description','start','end','completed'];
}
