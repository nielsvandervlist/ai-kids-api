<?php

namespace App\Routes;

use Illuminate\Support\Facades\Route;
use Tychovbh\LaravelCrud\Controller;
use Tychovbh\LaravelCrud\Routes\Routes;

class QuestionRoute implements Routes
{
    /**
     * Load User Routes.
     */
    public static function routes()
    {
        Route::get('/questions', [Controller::class, 'index'])->name('questions.index');
        Route::get('/questions/count', [Controller::class, 'count'])->name('questions.count');
        Route::get('/questions/{id}', [Controller::class, 'show'])->name('questions.show');
        Route::post('/questions', [Controller::class, 'store'])->name('questions.store');
        Route::put('/questions/{id}', [Controller::class, 'update'])->name('questions.update');
        Route::put('/questions/{id}/restore', [Controller::class, 'restore'])->name('questions.restore');
        Route::delete('/questions/{id}', [Controller::class, 'destroy'])->name('questions.destroy');
        Route::delete('/questions/{id}/force', [Controller::class, 'forceDestroy'])->name('questions.forceDestroy');
    }
}
