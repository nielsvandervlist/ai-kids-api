<?php
namespace App\Params;

use Illuminate\Support\Facades\Auth;
use Tychovbh\LaravelCrud\Params\Params;

class UserMissionParams extends Params
{
    public function mission_id(string $value)
    {
        $this->query->where('mission_id', $value)->where('user_id', Auth::id());
    }
}
