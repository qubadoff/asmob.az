<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index'])->name('index');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');
