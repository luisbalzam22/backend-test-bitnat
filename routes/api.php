<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StatisticsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('login')->group(function(){

    Route::post('/auth', [AuthController::class, 'login']);

    Route::post('/register', [AuthController::class, 'register']);
});

Route::prefix('books')->group(function(){

    Route::get('/read', [BookController::class, 'getBooks']);

    Route::get('/read/get/{id}',[BookController::class, 'getBook']);

    Route::post('/add', [BookController::class, 'addBook']);
});

Route::prefix('statistics')->group(function(){

    Route::get('/get', [StatisticsController::class, 'getStatistics']);
});

