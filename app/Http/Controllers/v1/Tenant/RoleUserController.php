<?php

namespace App\Http\Controllers\v1\Tenant;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\RolesUser\RolesUserRequest;
use App\Models\Tenant\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleUserController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //all employees

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $roles = User::findOrFail($id)->roles->pluck('name')->toArray();

        return response()->json(
            [
                'user' => $user,
                'roles' => $roles
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RolesUserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->syncRoles($request->roles);

        return $this->showOne($user);
    }

}
