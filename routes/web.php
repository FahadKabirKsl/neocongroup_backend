<?php

use App\Http\Controllers\dashboard\EmployeeController;
use App\Http\Controllers\dashboard\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts.dashboard.master');
    })->middleware(['auth', 'verified'])->name('dashboard');

    //employee
    Route::prefix('employee')->group(function () {
        Route::get('/index', [EmployeeController::class, 'index'])->name('employee.index');
        Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');
        Route::get('/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::put('/{id}', [EmployeeController::class, 'update'])->name('employee.update');
        Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    });
    //news
    Route::prefix('news')->group(function () {
        Route::get('index', [NewsController::class, 'index'])->name('news.index');
        Route::get('create', [NewsController::class, 'create'])->name('news.create');
        Route::post('store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/delete/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    });
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
