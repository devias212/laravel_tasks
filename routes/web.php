<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('tasks', TaskController::class);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');