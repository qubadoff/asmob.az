<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index'])->name('index');
Route::get('/about-us', [GeneralController::class, 'about'])->name('about');
Route::get('/ourProjects', [GeneralController::class, 'ourProjects'])->name('ourProjects');
Route::get('/ourProjects/{id}', [GeneralController::class, 'singleOurProjects'])->name('singleOurProjects');
Route::get('/blog', [GeneralController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [GeneralController::class, 'singleBlog'])->name('singleBlog');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

Route::get('/news/{id}', [GeneralController::class, 'news'])->name('news');

Route::post('/sendMessage', [GeneralController::class, 'sendMessage'])->name('sendMessage')->middleware('throttle:5,1');
