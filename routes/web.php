<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']) ->name('users.index');

Route::get('/users/create', [BookController::class, 'create']) ->name('users.create');

Route::post('/users', [BookController::class, 'store']) ->name('users.store');

Route::get('/users/{id}', [BookController::class, 'show']) ->name('users.show');

Route::delete('/users/{id}', [BookController::class, 'destroy']) ->name('users.destroy');

Route::get('/users/{id}/edit', [BookController::class, 'edit']) ->name('users.edit');

Route::put('/users/{id}', [BookController::class, 'update']) ->name('users.update');
