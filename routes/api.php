<?php

use App\Http\Controllers\BookController;
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
    Route::post('/auth', function(){
        return 'HEEERE!';
    });

    Route::post('/register', function(){
        return 'HEEERE!';
    });
});

Route::prefix('books')->group(function(){
    Route::get('/read', [BookController::class, 'index']);

    Route::get('/read/get/{id}',[BookController::class, 'show']);

    Route::post('/add', [BookController::class, 'store']);
});


