<?php

namespace App\Http\Controllers\App\Users;

use App\Helpers\Core\Traits\Helpers;
use App\Http\Controllers\Controller;
use App\Models\App\User\UserSocialLink;
use App\Services\Core\Auth\UserService;
use Illuminate\Http\Request;

class UserSocialLinkController extends Controller
{
    use Helpers;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function update(Request $request, UserSocialLink $model)
    {
        $id = $request->pivot['social_link_id'];

        $model->where('social_link_id', '=', $id)
            ->where('user_id', '=', auth()->user()->id)
            ->update([
                'link' => $request->link
            ]);
        return updated_responses('social_links');
    }
}
