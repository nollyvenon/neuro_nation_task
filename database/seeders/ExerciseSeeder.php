<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            [
                'name' => 'Push Up',
                'category_id' => 1,
                'course_id'=> 1,
                'points' => 30,
            ],
            [
                'name' => 'Squat',
                'category_id' => 1,
                'course_id'=> 1,
                'points' => 30,
            ],
            [
                'name' => 'Plank',
                'category_id' => 1,
                'course_id'=> 2,
                'points' => 30,
            ],
            [
                'name' => 'Plank',
                'category_id' => 1,
                'course_id'=> 2,
                'points' => 50,
            ],
            [
                'name' => 'Plank 2',
                'category_id' => 1,
                'course_id'=> 2,
                'points' => 60,
            ],
            [
                'name' => 'Plank 3',
                'category_id' => 2,
                'course_id'=> 2,
                'points' => 70,
            ],
        ]);
    }
}
