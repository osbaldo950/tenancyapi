<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TenantAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permissionName = null): Response|RedirectResponse
    {

        $myPermissions = getAllPermissions();

        $explodePermissions = explode('|',$permissionName);
        $count_access = 0;
        foreach($explodePermissions as $permission) {
            if (in_array($permission, $myPermissions)){
                    $count_access++;
                    continue;
            }       
        }

        if($count_access > 0){
            return $next($request);
        }else{
            abort(403, 'No tienes permisos para ingresar a esa pagina!');      
        }

    }
}
