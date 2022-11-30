<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'home']);
Route::get('/home', [TodoController::class, 'home']);
Route::get('/create', [TodoController::class, 'create']);
Route::get('/upload', [TodoController::class, 'upload']);
Route::get('/{id}/edit', [TodoController::class, 'edit']);
Route::patch('/update', [TodoController::class, 'update']);
Route::get('/{id}/completed', [TodoController::class, 'completed']);
Route::get('/{id}/delete', [TodoController::class, 'delete']);