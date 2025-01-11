<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);

        // Add more users if needed
        User::factory(10)->create(); // If you're using factories
    }
}
