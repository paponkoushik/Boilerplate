<?php

namespace App\Http\Controllers\App\Users;

use App\Http\Controllers\Controller;
use App\Helpers\Core\Traits\Helpers;
use App\Models\Core\Auth\Role;
use App\Services\Core\Auth\UserService;

class UserRoleController extends Controller
{
    use Helpers;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function store(Role $role)
    {
        $users = $this->checkMakeArray(request('users'));
        $role->users()->sync(array_unique($users));
        return attached_response('roles', ['users' => $users]);
    }

    
}
