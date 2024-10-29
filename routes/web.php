<?php

use App\Http\Controllers\Api\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{slug}', [HomeController::class, 'show'])->name('show');
Route::get('/{slug}/search', [HomeController::class, 'search'])->name('search');

