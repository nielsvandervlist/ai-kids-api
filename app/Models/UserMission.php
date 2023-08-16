<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tychovbh\LaravelCrud\Contracts\GetParams;

class UserMission extends Model
{
    use HasFactory, GetParams;

    protected $params = ['mission_id'];

    protected $fillable = [
        'mission_id',
        'user_id',
        'question_id',
        'stars',
        'points',
    ];
}
