<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::firstOrCreate(
            ['email' => 'nugas.icn@gmail.com'],
            [
                'name' => 'Admin Nugas ICN',
                'password' => Hash::make('Hahalol123!'),
            ]
        );
    }
}
