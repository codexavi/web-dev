<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});
// Advance CRUD
Route::resource('products', ProductController::class);





//Simple CRUD


// List all projects
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Show create form
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');

// Store new project
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

// Show single project
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// Show edit form
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');

// Update project
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');

// Delete project
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');




