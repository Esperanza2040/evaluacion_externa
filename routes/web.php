<?php

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
