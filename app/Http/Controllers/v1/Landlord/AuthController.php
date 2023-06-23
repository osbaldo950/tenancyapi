<?php

namespace App\Http\Controllers\v1\Landlord;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Landlord\LoginRequest;
use App\Http\Requests\Landlord\RegisterRequest;
use App\Models\Landlord\Tenant;
use App\Models\Landlord\User;
use App\Models\Tenant\Permission;
use App\Models\Tenant\Role;
use App\Models\Tenant\User as TenantUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\ClientRepository;

class AuthController extends ApiController
{
    public function register(RegisterRequest $request)
    {

        //crear tenant
        $tenant = Tenant::create([
            'company' => $request->company,
            'email' => $request->email,
            'tenancy_domain' => $request->domain,
        ]);

        //crear dominio tenant
        $tenant->domains()->create([
            'domain' => $tenant->tenancy_domain,
        ]);

        //crear usuario tenant en landlord
        $user_landlord =  User::create([
                    'name' =>  'admin',
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

        $tenant->run(function () use ($user_landlord) {
            //crear usuario tenant
            $user_tenant =  TenantUser::create([
                'name' => 'admin',
                'email' => $user_landlord->email,
                'password' => $user_landlord->password,
            ]);

            //crear llaves tenant para passport
            $client = new ClientRepository();
            $client->createPasswordGrantClient(null, 'tenant client',env('APP_TENANT_URL'));
            $client->createPersonalAccessClient(null, 'tenant client', env('APP_TENANT_URL'));

            // crear roles tenant
            $superAdminRole = Role::create(['name' => 'Super admin']);
            //asignar permisos a super admin
            $superAdminRole->givePermissionTo(Permission::all());
            $user_tenant->syncRoles([$superAdminRole]);

        });

        return response()->json(
            [
                'tenant' => $tenant
            ],
            200
        );

    }

    public function login(LoginRequest $request)
    {

        if(auth()->attempt($request->only('email', 'password'))) {
            $token = auth()->user()->createToken('Token')->accessToken;
            return response()->json(['token' => $token], 200);
        }

        return response()->json(['error' => 'Contraseña o usuario incorrecto']);

    }

    public function logout(Request $request)
    {
        $token = auth()->user()->token();

        $token->revoke();

        return response()->json(['success' => 'sesion cerrada correctmente']);
    }
}
