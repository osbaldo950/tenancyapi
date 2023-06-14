<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Passport\ClientRepository;

class TenantKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $client = new ClientRepository();

        $client->createPasswordGrantClient(null, 'tenant client', 'https://prueba.tenancyapi.test');
        $client->createPersonalAccessClient(null, 'tenant client', 'https://prueba.tenancyapi.test');
    }
}
