<?php

use App\Http\Controllers\v1\Landlord\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:api')->group(
    function (){
        Route::post('logout', [AuthController::class, 'logout']);
    }
);

