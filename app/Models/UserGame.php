<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'games_id',
        'user_id',
        'score',
    ];
}
