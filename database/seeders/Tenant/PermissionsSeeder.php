<?php

namespace Database\Seeders\Tenant;

use App\Models\Tenant\Module;
use App\Models\Tenant\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //modulos
        $records = [
            ['name' => 'empresas'],
            ['name' => 'clientes'],
            ['name' => 'roles'],
            ['name' => 'roles usuario'],
        ];

        //permisos
        $records_p = [

            // empresas
            ['name' => 'ver', 'key' => 'ver_empresas', 'module_name' => 'empresas', 'guard_name' => 'web'],
            ['name' => 'editar', 'key' => 'editar_empresas', 'module_name' => 'empresas', 'guard_name' => 'web'],
            ['name' => 'crear', 'key' => 'crear_empresa', 'module_name' => 'empresas', 'guard_name' => 'web'],
            ['name' => 'eliminar', 'key' => 'eliminar_empresas', 'module_name' => 'empresas', 'guard_name' => 'web'],
            ['name' => 'restaurar', 'key' => 'restaurar_empresas', 'module_name' => 'empresas', 'guard_name' => 'web'],

            // clientes
            ['name' => 'ver', 'key' => 'ver_clientes', 'module_name' => 'clientes', 'guard_name' => 'web'],
            ['name' => 'editar', 'key' => 'editar_clientes', 'module_name' => 'clientes', 'guard_name' => 'web'],
            ['name' => 'crear', 'key' => 'crear_clientes', 'module_name' => 'clientes', 'guard_name' => 'web'],
            ['name' => 'eliminar', 'key' => 'eliminar_clientes', 'module_name' => 'clientes', 'guard_name' => 'web'],
            ['name' => 'restaurar', 'key' => 'restaurar_clientes', 'module_name' => 'clientes', 'guard_name' => 'web'],

            // roles
            ['name' => 'ver', 'key' => 'ver_roles', 'module_name' => 'roles', 'guard_name' => 'web'],
            ['name' => 'editar', 'key' => 'editar_roles', 'module_name' => 'roles', 'guard_name' => 'web'],
            ['name' => 'crear', 'key' => 'crear_roles', 'module_name' => 'roles', 'guard_name' => 'web'],
            ['name' => 'eliminar', 'key' => 'eliminar_roles', 'module_name' => 'roles', 'guard_name' => 'web'],
            ['name' => 'restaurar', 'key' => 'restaurar_roles', 'module_name' => 'roles', 'guard_name' => 'web'],
            
            // roles usuario
            ['name' => 'ver', 'key' => 'ver_roles_usuario', 'module_name' => 'roles usuario', 'guard_name' => 'web'],
            ['name' => 'editar', 'key' => 'editar_roles_usuario', 'module_name' => 'roles usuario', 'guard_name' => 'web'],

        ];

        foreach ($records as $record) {
            $module = Module::firstOrCreate($record);
            foreach ($records_p as $record_p) {
                if ($record_p['module_name'] == $module->name) {
                    unset($record_p['module_name']);
                    $record_p['module_id'] = $module->id;
                    Permission::firstOrCreate($record_p);
                }
            }
        }
    }
}
