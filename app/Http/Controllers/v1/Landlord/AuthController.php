<?php

namespace App\Http\Controllers\v1\Landlord;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Landlord\RegisterRequest;
use App\Models\Landlord\Tenant;
use App\Models\Landlord\User;
use App\Models\Tenant\User as TenantUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends ApiController
{
    public function register(RegisterRequest $request)
    {

        //crear tenant
        $tenant = Tenant::create([
            'name' => $request->name,
            'email' => $request->email,
            'tenancy_company' => $request->name,
            'tenancy_domain' => $request->domain,
        ]);
    
        //crear dominio tenant
        $tenant->domains()->create([
            'domain' => $tenant->tenancy_domain,
        ]);

        //crear usuario tenant en landlord
        $user_landlord =  User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
        
        $tenant->run(function ($user_landlord) {
            //crear usuario tenant
            $user_tenant =  TenantUser::create([
                'name' => $user_landlord->name,
                'email' => $user_landlord->email,
                'password' => Hash::make($user_landlord->password),
            ]);
        });

        return response()->json(
            [
                'tenant' => $tenant
            ], 
            200
        );

    }

    public function login(Request $request)
    {

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(auth()->attempt($credentials)){

            $token = auth()->user()->createToken('Token')->accessToken;
            return response()->json(['token' => $token], 200);

        }else{

            return response()->json(['error' => 'contrasena o usuario incorrecto']);

        }

    }

    public function logout(Request $request)
    {
        $token = auth()->user()->token();

        $token->revoke();

        return response()->json(['success' => 'sesion cerrada correctmente']);
    }
}
