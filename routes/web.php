<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');
Route::get('/ninjas/list', [NinjaController::class, 'list'])->name('ninjas.list');
Route::get('/ninjas/stats', [NinjaController::class, 'stats'])->name('ninjas.stats');

Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');
