<?php

namespace App\Models\Core\Auth\Traits\Relationship;

use App\Models\App\User\SocialLink;
use App\Models\Core\Auth\PasswordHistory;
use App\Models\Core\Auth\Profile;
use App\Models\Core\Auth\Role;
use App\Models\Core\Auth\SocialAccount;
use App\Models\Core\Builder\Form\CustomFieldValue;
use App\Models\Core\File\File;
use App\Models\Core\Setting\Setting;
use App\Models\Core\Traits\CreatedByRelationship;
use App\Models\Core\Traits\StatusRelationship;

/**
 * Class UserRelationship.
 */
trait UserRelationship
{
    use CreatedByRelationship, StatusRelationship;
    /**
     * @return mixed
     */
    public function providers()
    {
        return $this->hasMany(SocialAccount::class);
    }

    /**
     * @return mixed
     */
    public function passwordHistories()
    {
        return $this->hasMany(PasswordHistory::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function settings()
    {
        return $this->morphMany(
            Setting::class,
            'settingable'
        );
    }

    public function customFields()
    {
        return $this->morphMany(
            CustomFieldValue::class,
            'contextable'
        );
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function profilePicture()
    {
        return $this->morphOne(File::class, 'fileable')
            ->whereType('profile_picture');
    }

    public function socialLinks()
    {
        return $this->belongsToMany(SocialLink::class, 'user_social_link', 'user_id', 'social_link_id')->withPivot('link');

    }
}
