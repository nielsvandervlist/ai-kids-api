<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tychovbh\LaravelCrud\Contracts\GetParams;

class Choice extends Model
{
    use HasFactory, GetParams;

    protected $fillable = [
        'value',
        'right',
        'question_id'
    ];

    protected array $params = ['question_id'];
}
