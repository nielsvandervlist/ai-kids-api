<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tychovbh\LaravelCrud\Contracts\GetParams;

class Mission extends Model
{
    use HasFactory, GetParams;

    protected $params = [
        'user_id'
    ];

    protected $fillable = [
        'name',
        'questions',
        'points',
    ];
}
