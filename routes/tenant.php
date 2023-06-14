<?php

declare(strict_types=1);

use App\Http\Controllers\v1\Tenant\AreaController;
use App\Http\Controllers\v1\Tenant\AuthController;
use App\Http\Controllers\v1\Tenant\BranchController;
use App\Http\Controllers\v1\Tenant\CompanyController;
use App\Http\Controllers\v1\Tenant\RegionController;
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
        Route::resource('branches', BranchController::class);
        Route::resource('areas', AreaController::class);
        Route::resource('regions', RegionController::class);
    });

});
