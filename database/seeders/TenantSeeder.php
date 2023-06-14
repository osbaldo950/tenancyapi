<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Passport\ClientRepository;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $client = new ClientRepository();

        $client->createPasswordGrantClient(null, '123456', 'http://your.redirect.path');
        $client->createPersonalAccessClient(null, '12345678', 'http://your.redirect.path');
    }
}
