<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function getHistory($userId)
    {
        // Fetch session history with scores
        $history = DB::table('sessions')
            ->join('scores', 'sessions.session_id', '=', 'scores.session_id')
            ->where('sessions.user_id', 1)
            ->select('scores.score', DB::raw('UNIX_TIMESTAMP(sessions.timestamp) as date'))
            ->orderBy('sessions.timestamp', 'desc')
            ->get();

        // Optional: Fetch categories trained in the last session
        $lastSessionId = DB::table('sessions')
            ->where('user_id', $userId)
            ->orderBy('timestamp', 'desc')
            ->value('session_id');

        $recentlyTrained = [];
        if ($lastSessionId) {
            $recentlyTrained = DB::table('exercises')
                ->join('domain_categories', 'exercises.category_id', '=', 'domain_categories.category_id')
                ->where('exercises.course_id', function ($query) use ($lastSessionId) {
                    $query->select('course_id')
                        ->from('sessions')
                        ->where('session_id', $lastSessionId);
                })
                ->pluck('domain_categories.name')
                ->toArray();
        }

        return response()->json([
            'history' => $history,
            'recently_trained' => $recentlyTrained
        ]);
    }
}
