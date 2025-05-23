<?php

use App\Http\Controllers\MusicController;
use App\Http\Controllers\ChoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/recommend', [MusicController::class, 'recommend']);

Route::get('/randomTen', [MusicController::class, 'randomTen']);

Route::get('/choice-set', [ChoiceController::class, 'showChoiceSet']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

