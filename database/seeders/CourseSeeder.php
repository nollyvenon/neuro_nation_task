<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Introduction to Medical Health',
        ]);

        Course::create([
            'name' => 'Advanced Medical Health Techniques',
        ]);

        // Add more users if needed
        //Course::factory(10)->create(); // If you're using factories
    }
}
