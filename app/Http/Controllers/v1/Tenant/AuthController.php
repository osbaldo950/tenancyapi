<?php

namespace App\Http\Controllers\v1\Tenant;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\LoginRequest;
use App\Http\Requests\Tenant\RegisterRequest;
use App\Models\Landlord\Tenant;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends ApiController
{

//    public function __construct()
//        {
//            $this->middleware('auth:api', ['except' => ['login', 'register']]);
//        }
    public function register(RegisterRequest $request)
    {
        $user =  User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

        $token = $user->createToken('Token')->accessToken;
        return $this->successResponse(['user' => $user, 'token' => $token]);
    }

    public function login(LoginRequest $request)
    {
        $subdomain = request()->getHost();
        $subdomain = explode('.', $subdomain);
        $subdomain = $subdomain[0];

        $exist_tenant = Tenant::where('tenancy_domain', $subdomain)->first();

        if(!$exist_tenant) {
            return $this->errorResponse('tenant no encontrado', 404);
        }

        if(auth()->attempt($request->only('email', 'password'))) {
            $token = auth()->user()->createToken('Token')->accessToken;
            return $this->successResponse(['user' => auth()->user(), 'token' => $token]);
        }

        return $this->errorResponse('credenciales invalidas', 401);

    }

    public function refresh( ){
        $user = auth()->user();
        $user->token()->revoke();
        $token = $user->createToken('Token')->accessToken;
        return $this->successResponse(['user' => $user, 'token' => $token]);
    }

    public function logout()
    {
        $token = auth()->user()->token();

        $token->revoke();

        return $this->successResponse(['message' => 'logout exitoso']);
    }
}
