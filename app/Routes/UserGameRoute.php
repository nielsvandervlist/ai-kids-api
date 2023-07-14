<?php

namespace App\Routes;

use Illuminate\Support\Facades\Route;
use Tychovbh\LaravelCrud\Controller;
use Tychovbh\LaravelCrud\Routes\Routes;

class UserGameRoute implements Routes
{
    /**
     * Load User Routes.
     */
    public static function routes()
    {
        Route::get('/user_games', [Controller::class, 'index'])->name('user_games.index');
        Route::get('/user_games/count', [Controller::class, 'count'])->name('user_games.count');
        Route::get('/user_games/{id}', [Controller::class, 'show'])->name('user_games.show');
        Route::post('/user_games', [Controller::class, 'store'])->name('user_games.store');
        Route::put('/user_games/{id}', [Controller::class, 'update'])->name('user_games.update');
        Route::put('/user_games/{id}/restore', [Controller::class, 'restore'])->name('user_games.restore');
        Route::delete('/user_games/{id}', [Controller::class, 'destroy'])->name('user_games.destroy');
        Route::delete('/user_games/{id}/force', [Controller::class, 'forceDestroy'])->name('user_games.forceDestroy');
    }
}
