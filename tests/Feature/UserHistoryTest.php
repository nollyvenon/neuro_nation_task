<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserHistoryTest extends TestCase
{
    use RefreshDatabase;

    public function testGetUserHistory()
    {
        // Seed test data
        $userId = 1;
        DB::table('users')->insert(['user_id' => $userId, 'username' => 'testuser']);
        DB::table('sessions')->insert([
            ['session_id' => 1, 'user_id' => $userId, 'course_id' => 1, 'timestamp' => 1698765432],
            ['session_id' => 2, 'user_id' => $userId, 'course_id' => 1, 'timestamp' => 1698765445]
        ]);
        DB::table('scores')->insert([
            ['score_id' => 1, 'session_id' => 1, 'user_id' => $userId, 'score' => 100],
            ['score_id' => 2, 'session_id' => 2, 'user_id' => $userId, 'score' => 150]
        ]);

        // Make API request
        $response = $this->get("/api/users/{$userId}/history");

        // Assert response
        $response->assertStatus(200)
            ->assertJsonStructure([
                'history' => [
                    ['score', 'date']
                ],
                'recently_trained' => []
            ]);
    }
}
