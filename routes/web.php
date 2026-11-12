<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/post/create', [PostController::class, 'create'])->name('create');
Route::post('/post/published-posts', [PostController::class, 'published'])->name('published');
Route::get('/posts/index', [PostController::class, 'index'])->name('index');
Route::get('/posts/confirmation', [PostController::class, 'confirmation'])->name('confirmation');
