<?php

namespace App\Models\App\User;

use App\Models\Core\Auth\User;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $fillable = ['name', 'icon'];

    public function users()
    {
        return $this->belongsToMany(SocialLink::class, 'user_social_link', 'user_id', 'social_link_id')->withPivot('link');
    }

}
