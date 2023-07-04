<?php

use App\Http\Controllers\api\NewsController;
use App\Http\Controllers\api\ContactController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Authentication
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
//contact
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index']);
    Route::post('/store', [ContactController::class, 'store']);
});

//news
Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/create', [NewsController::class, 'create']);
    Route::post('/store', [NewsController::class, 'store']);
    Route::post('/{id}', [NewsController::class, 'update']);
    Route::delete('/delete/{id}', [NewsController::class, 'destroy']);
});
