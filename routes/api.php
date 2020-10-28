<?php

use App\Http\Controllers\RoomsController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\WeeksController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\LessonsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/rooms', [RoomsController::class, 'index']);
Route::get('/rooms/{id}', [RoomsController::class, 'show']);

Route::get('/groups', [GroupsController::class, 'index']);
Route::get('/groups/{id}', [GroupsController::class, 'show']);

Route::get('/teachers', [TeachersController::class, 'index']);
Route::get('/teachers/{id}', [TeachersController::class, 'show']);

Route::get('/weeks', [WeeksController::class, 'index']);
Route::get('/weeks/{id}', [WeeksController::class, 'show']);

Route::get('/lessons/rooms={id}&weeks={wk}', [LessonsController::class, 'rooms']);
Route::get('/lessons/teachers={id}&weeks={wk}', [LessonsController::class, 'teachers']);
Route::get('/lessons/groups={id}&weeks={wk}', [LessonsController::class, 'groups']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
