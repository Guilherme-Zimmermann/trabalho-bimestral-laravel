<?php

use App\Http\Controllers\TaskController;

Route::get('/', function () {
    redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class);
Route::patch('tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');

Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
