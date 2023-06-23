<?php

use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;

function getAllPermissions(){
    $permissions = array_values(array_unique(User::find(Auth::user()->id)->getPermissionsViaRoles()->pluck('key')->toArray()));
    return $permissions;
}