<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('tasks.index');
})->name('home');

Route::prefix('auth')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
});

Route::patch('/tasks/complete/{task}', [TaskController::class, 'complete'])->name('tasks.complete')->middleware(['auth']);
Route::resource('tasks', TaskController::class)->middleware(['auth']);

Route::resource('users', UserController::class)
    ->only(['store']);
