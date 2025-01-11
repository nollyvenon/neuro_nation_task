<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseDomainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExerciseDomainCategory::create([
            'exercise_id' => 1,
            'category_id' => 1,
            'timestamp' => now(),
        ]);

        ExerciseDomainCategory::create([
            'exercise_id' => 2,
            'category_id' => 1,
            'timestamp' => now(),
        ]);

        ExerciseDomainCategory::create([
            'exercise_id' => 3,
            'category_id' => 1,
            'timestamp' => now(),
        ]);

        ExerciseDomainCategory::create([
            'exercise_id' => 3,
            'category_id' => 2,
            'timestamp' => now(),
        ]);
    }
}
