<?php

namespace App\Http\Controllers\v1\Tenant;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\Roles\RoleRequest;
use App\Models\Tenant\Permission;
use App\Models\Tenant\Role;
use Illuminate\Http\Request;

class RoleController extends ApiController
{

    // public function __construct()
    // {
    //     $this->middleware('tenant_authenticate:ver_roles', 
    //         ['only' => ['index', 'show']]);
    // }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->showAll(Role::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create(['name' => $request->name, 'guard_name' => 'web']);
        //request permisos es un array ['key','key','key']   
        $permissions = Permission::whereIn('key', $request->permissions)->get();
        $role->givePermissionTo($permissions);

        return $this->showOne($role, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return $this->showOne($role);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'unique:roles,name,'.$id,
            'permissions' => 'required'
        ]);
        
        $role = Role::findOrFail($id);
        $role->update(['name' => $request->name]);

        //request permisos es un array ['key','key','key']   
        $permissions = Permission::whereIn('key', $request->permissions)->get();
        $role->syncPermissions($permissions);

        return $this->showOne($role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return $this->successResponse('Rol eliminado correctamente');
    }
}
