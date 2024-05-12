<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index'); // Route for displaying all tasks
Route::get('/maketask', [TaskController::class, 'create'])->name('tasks.create'); // Route for displaying task creation form
Route::post('store', [TaskController::class, 'store'])->name('tasks.store'); // Route for storing a new task
Route::delete('delete/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // Route for deleting a task
Route::post('done/{task}', [TaskController::class, 'complete'])->name('tasks.complete'); // Route for marking a task as completed
Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit'); // Route for displaying task edit form
Route::put('/update/{task}', [TaskController::class, 'update'])->name('tasks.update'); // Route for updating a task