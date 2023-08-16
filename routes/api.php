<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Routes\UserRoute;
use App\Routes\MissionRoute;
use App\Routes\GameRoute;
use App\Routes\ChoiceRoute;
use App\Routes\QuestionRoute;
use App\Routes\UserMissionRoute;
use App\Routes\UserGameRoute;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

UserRoute::routes();
MissionRoute::routes();
GameRoute::routes();
ChoiceRoute::routes();
QuestionRoute::routes();
UserMissionRoute::routes();
UserGameRoute::routes();

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->put('/user', function (Request $request) {
    $user = Auth::user();
    $user->points = $request->points;
    $user->save();
});
