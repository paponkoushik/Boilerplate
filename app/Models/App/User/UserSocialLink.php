<?php

namespace App\Models\App\User;

use Illuminate\Database\Eloquent\Model;

class UserSocialLink extends Model
{
    protected $table = 'user_social_link';

    protected $fillable = ['link'];

    public $timestamps = false;
}
