<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\UserMission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChoicesController extends Controller
{
    public function checkAnswer(Request $request): \Illuminate\Http\JsonResponse
    {
        $answer = (int)$request->answer;
        $mission_id = $request->mission_id;
        $user_id = Auth::id();

        $user_mission = UserMission::query()->where('mission_id', $mission_id)->where('user_id', $user_id)->first();

        if ($user_mission) {
            $pointsToAdd = $answer ? 1 : 0;
            $user_mission->points += $pointsToAdd;
            $user_mission->save();

            return response()->json([
                'message' => 'Answer submitted'
            ]);
        }

        return response()->json([
            'message' => 'No points added'
        ]);
    }
}
