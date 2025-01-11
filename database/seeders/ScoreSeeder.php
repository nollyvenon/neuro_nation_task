<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Score;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Score::create([
            'session_id' => 1,
            'user_id' => 1,
            'score' => 15,
            'start_difficulty' => 3,
            'end_difficulty' => 3,
        ]);

        Score::create([
            'session_id' => 1,
            'user_id' => 2,
            'score' => 55,
            'start_difficulty' => 3,
            'end_difficulty' => 3,
        ]);

        Score::create([
            'session_id' => 2,
            'user_id' => 1,
            'score' => 70,
            'start_difficulty' => 3,
            'end_difficulty' => 3,
        ]);

        Score::create([
            'session_id' => 2,
            'user_id' => 1,
            'score' => 67,
            'start_difficulty' => 3,
            'end_difficulty' => 3,
        ]);

        // Add more users if needed
        //Course::factory(10)->create(); // If you're using factories
    }
}
