<?php

namespace App\Models\App\SamplePage;

use App\Models\App\AppModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends AppModel
{
    use HasFactory;

    protected $fillable = ['name', 'count', 'value'];
}
