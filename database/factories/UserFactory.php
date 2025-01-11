<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName,
            'password' => Hash::make('password'),
            'status' => 'active',
        ];
    }
}
