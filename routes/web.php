<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index'])->name('index');
Route::get('/about-us', [GeneralController::class, 'about'])->name('about');
Route::get('/project/{id}', [GeneralController::class, 'singleProject'])->name('singleProject');
Route::get('/blog', [GeneralController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [GeneralController::class, 'singleBlog'])->name('singleBlog');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

Route::post('/sendMessage', [GeneralController::class, 'sendMessage'])->name('sendMessage')->middleware('throttle:5,1');
