<?php

namespace Database\Seeders\Landlord;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Passport\ClientRepository;

class PassportKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new ClientRepository();
    
        $client->createPasswordGrantClient(null, 'Default password grant client', env('APP_TENANT_URL'));
        $client->createPersonalAccessClient(null, 'Default personal access client', env('APP_TENANT_URL'));
        
    }
}
