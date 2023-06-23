<?php

namespace Database\Seeders\Landlord;

use App\Models\Landlord\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $records = [
            [
                'name' => 'Super Admin',
                'email' => 'admin@facturaya.mx',
                'is_admin' => 1,
                'password' => Hash::make('4dminfacturay4'),
                'created_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'terms' => true
            ]
        ];

        foreach($records as $record) {
            User::firstOrCreate($record);
        }
    }
}
