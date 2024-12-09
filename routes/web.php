<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RotiController;

Route::get('/', [RotiController::class, 'index']);
Route::get('/roti/create', [RotiController::class, 'create']);
Route::post('/roti/store', [RotiController::class, 'store']);
Route::get('/roti/{id}/edit', [RotiController::class, 'edit']);
Route::put('/roti/{id}', [RotiController::class, 'update']);
Route::delete('/roti/{id}', [RotiController::class, 'destroy']);
