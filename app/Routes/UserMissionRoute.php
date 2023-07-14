<?php

namespace App\Routes;

use Illuminate\Support\Facades\Route;
use Tychovbh\LaravelCrud\Controller;
use Tychovbh\LaravelCrud\Routes\Routes;

class UserMissionRoute implements Routes
{
    /**
     * Load User Routes.
     */
    public static function routes()
    {
        Route::get('/user_missions', [Controller::class, 'index'])->name('user_missions.index');
        Route::get('/user_missions/count', [Controller::class, 'count'])->name('user_missions.count');
        Route::get('/user_missions/{id}', [Controller::class, 'show'])->name('user_missions.show');
        Route::post('/user_missions', [Controller::class, 'store'])->name('user_missions.store');
        Route::put('/user_missions/{id}', [Controller::class, 'update'])->name('user_missions.update');
        Route::put('/user_missions/{id}/restore', [Controller::class, 'restore'])->name('user_missions.restore');
        Route::delete('/user_missions/{id}', [Controller::class, 'destroy'])->name('user_missions.destroy');
        Route::delete('/user_missions/{id}/force', [Controller::class, 'forceDestroy'])->name('user_missions.forceDestroy');
    }
}
