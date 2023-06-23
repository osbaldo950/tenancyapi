<?php

namespace Database\Seeders;

use Database\Seeders\Tenant\PermissionsSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            PermissionsSeeder::class
        ]);
    }
}
