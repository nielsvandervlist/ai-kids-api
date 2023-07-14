<?php

namespace App\Routes;

use Illuminate\Support\Facades\Route;
use Tychovbh\LaravelCrud\Controller;
use Tychovbh\LaravelCrud\Routes\Routes;

class MissionRoute implements Routes
{
    /**
     * Load User Routes.
     */
    public static function routes()
    {
        Route::get('/missions', [Controller::class, 'index'])->name('missions.index');
        Route::get('/missions/count', [Controller::class, 'count'])->name('missions.count');
        Route::get('/missions/{id}', [Controller::class, 'show'])->name('missions.show');
        Route::post('/missions', [Controller::class, 'store'])->name('missions.store');
        Route::put('/missions/{id}', [Controller::class, 'update'])->name('missions.update');
        Route::put('/missions/{id}/restore', [Controller::class, 'restore'])->name('missions.restore');
        Route::delete('/missions/{id}', [Controller::class, 'destroy'])->name('missions.destroy');
        Route::delete('/missions/{id}/force', [Controller::class, 'forceDestroy'])->name('missions.forceDestroy');
    }
}
