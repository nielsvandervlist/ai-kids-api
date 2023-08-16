<?php

namespace App\Routes;

use App\Http\Controllers\ChoicesController;
use Illuminate\Support\Facades\Route;
use Tychovbh\LaravelCrud\Controller;
use Tychovbh\LaravelCrud\Routes\Routes;

class ChoiceRoute implements Routes
{
    /**
     * Load User Routes.
     */
    public static function routes()
    {
        Route::get('/choices', [Controller::class, 'index'])->name('choices.index');
        Route::get('/choices/count', [Controller::class, 'count'])->name('choices.count');
        Route::get('/choices/{id}', [Controller::class, 'show'])->name('choices.show');
        Route::post('/choices', [Controller::class, 'store'])->name('choices.store');
        Route::post('/choices/answer', [ChoicesController::class, 'checkAnswer'])->name('choices.answer');
        Route::put('/choices/{id}', [Controller::class, 'update'])->name('choices.update');
        Route::put('/choices/{id}/restore', [Controller::class, 'restore'])->name('choices.restore');
        Route::delete('/choices/{id}', [Controller::class, 'destroy'])->name('choices.destroy');
        Route::delete('/choices/{id}/force', [Controller::class, 'forceDestroy'])->name('choices.forceDestroy');
    }
}
