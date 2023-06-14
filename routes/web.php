<?php

use App\Models\Landlord\Tenant;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    $tenant = Tenant::create([
        'name' => 'prueba',
        'ready' => false,
        'email' => 'al221410832@gmail.com',
        'tenancy_company' => 'prueba',
        'tenancy_domain' => 'prueba',
    ]);

    // CREATE THE TENANT DOMAIN
    $tenant->domains()->create([
        'domain' => $tenant->tenancy_domain,
    ]);

});
