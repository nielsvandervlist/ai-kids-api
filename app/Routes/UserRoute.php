<?php

namespace App\Routes;

use Illuminate\Support\Facades\Route;
use Tychovbh\LaravelCrud\Controller;
use Tychovbh\LaravelCrud\Routes\Routes;

class UserRoute implements Routes
{
    /**
     * Load User Routes.
     */
    public static function routes()
    {
        Route::get('/users', [Controller::class, 'index'])->name('users.index');
        Route::get('/users/count', [Controller::class, 'count'])->name('users.count');
        Route::get('/users/{id}', [Controller::class, 'show'])->name('users.show');
        Route::post('/users', [Controller::class, 'store'])->name('users.store');
        Route::put('/users/{id}', [Controller::class, 'update'])->name('users.update');
        Route::put('/users/{id}/restore', [Controller::class, 'restore'])->name('users.restore');
        Route::delete('/users/{id}', [Controller::class, 'destroy'])->name('users.destroy');
        Route::delete('/users/{id}/force', [Controller::class, 'forceDestroy'])->name('users.forceDestroy');
    }
}
