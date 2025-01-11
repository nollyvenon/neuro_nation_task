<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Session;
use App\Models\User;
use App\Models\Course;

class SessionSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        $course = Course::first();

        Session::create([
            'user_id' => 1,
            'course_id' => 1,
            'timestamp' => now(),
        ]);

        Session::create([
            'user_id' => 2,
            'course_id' => 2,
            'timestamp' => now(),
        ]);

        Session::create([
            'user_id' => 1,
            'course_id' => 2,
            'timestamp' => now(),
        ]);

        Session::create([
            'user_id' => 2,
            'course_id' => 2,
            'timestamp' => now(),
        ]);

        Session::create([
            'user_id' => $user->id,
            'course_id' => 1,
            'timestamp' => now(),
        ]);


        // Add more sessions if needed
    }
}
