<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index'); // List all tasks
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store'); // Create new task
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update'); // Update task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // Delete task
//Route::redirect('/', '/tasks');
Route::patch('/tasks/{task}/toggle', [TaskController::class, 'toggleStatus'])->name('tasks.toggle');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
