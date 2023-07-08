<?php

declare(strict_types=1);

use App\Http\Controllers\v1\Tenant\AuthController;
use App\Http\Controllers\v1\Tenant\CompanyController;
use App\Http\Controllers\v1\Tenant\QuotationController;
use App\Http\Controllers\v1\Tenant\RoleController;
use App\Http\Controllers\v1\Tenant\RoleUserController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'universal',
    InitializeTenancyBySubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);

        Route::resource('companies', CompanyController::class);

        Route::apiResource('roles', RoleController::class);
        Route::apiResource('roles-user', RoleUserController::class);

        Route::apiResource('quotations', QuotationController::class);
    });

});
