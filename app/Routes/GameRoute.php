<?php

namespace App\Routes;

use Illuminate\Support\Facades\Route;
use Tychovbh\LaravelCrud\Controller;
use Tychovbh\LaravelCrud\Routes\Routes;

class GameRoute implements Routes
{
    /**
     * Load User Routes.
     */
    public static function routes()
    {
        Route::get('/games', [Controller::class, 'index'])->name('games.index');
        Route::get('/games/count', [Controller::class, 'count'])->name('games.count');
        Route::get('/games/{id}', [Controller::class, 'show'])->name('games.show');
        Route::post('/games', [Controller::class, 'store'])->name('games.store');
        Route::put('/games/{id}', [Controller::class, 'update'])->name('games.update');
        Route::put('/games/{id}/restore', [Controller::class, 'restore'])->name('games.restore');
        Route::delete('/games/{id}', [Controller::class, 'destroy'])->name('games.destroy');
        Route::delete('/games/{id}/force', [Controller::class, 'forceDestroy'])->name('games.forceDestroy');
    }
}
