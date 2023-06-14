<?php

namespace App\Http\Controllers\v1\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\RegisterRequest;
use App\Models\Tenant\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
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
                
        return response()->json(['user' => $user], 200);
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

    public function logout()
    {
        $token = auth()->user()->token();

        $token->revoke();

        return response()->json(['success' => 'sesion cerrada correctmente']);
    }
}
