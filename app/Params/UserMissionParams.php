<?php
namespace App\Params;

use App\Models\UserMission;
use Illuminate\Support\Facades\Auth;
use Tychovbh\LaravelCrud\Params\Params;

class UserMissionParams extends Params
{
    public function mission_id(string $value): void
    {
        $data = [
            'mission_id' => $value,
            'user_id' => Auth::id(),
            'question_id' => 1,
            'stars' => 0,
            'points' => 0,
        ];

        $this->query->firstOrCreate(['mission_id' => $value, 'user_id' => Auth::id()], $data);
    }
}
