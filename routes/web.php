<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index'])->name('index');
Route::get('/ourProjects', [GeneralController::class, 'ourProjects'])->name('ourProjects');
Route::get('/ourProjects/{id}', [GeneralController::class, 'singleOurProjects'])->name('singleOurProjects');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

Route::get('/news/{id}', [GeneralController::class, 'news'])->name('news');
