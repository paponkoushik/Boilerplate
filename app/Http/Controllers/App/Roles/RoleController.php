<?php

namespace App\Http\Controllers\App\Roles;

use App\Filters\App\Role\RoleFilter;
use App\Http\Controllers\Controller;
use App\Models\Core\Auth\Role;
use App\Services\Core\Auth\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct(RoleService $service, RoleFilter $filter)
    {
        $this->service = $service;
        $this->filter = $filter;
    }

    public function index()
    {
        return $this->service
            ->filters($this->filter)
            ->latest()
            ->paginate(request()->get('per_page', 10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->service->save();
        return created_responses('crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->service->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        return updated_responses('role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Role $role)
    {
        if ($role->delete()) {
            return deleted_responses('role');
        }
        return failed_responses();
    }

    /* *
     */

    public function getUsersByRole(Role $role){

        return $this->service
            ->with('users:id,first_name,last_name,email','users.profilePicture')
            ->orderBy('id')
            ->where('id', $role->id)
            ->first();
    }

    public function getAllRoles(){
        return $this->service
            ->filters($this->filter)
            ->latest()
            ->get();
    }
}
