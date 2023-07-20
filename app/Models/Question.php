<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tychovbh\LaravelCrud\Contracts\GetParams;

class Question extends Model
{
    use HasFactory, GetParams;

    protected $fillable = [
        'mission_id',
        'value',
    ];

    protected array $params = ['mission_id'];
}
