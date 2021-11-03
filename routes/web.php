<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// routes 
// /home
// /about
// /contact


// Route::resource('posts', PostController::class)->only(['index', 'show']);
Route::get('/about-us',  [PostController::class, 'about'])
    ->name('about.page');
Route::view('/contact', 'contact');


// posts
// show index create store edit update delete (ressource)

Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

// DELETE , PUT / PATCH

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])
    ->name('posts.edit');

Route::put('/posts/{id}/edit', [PostController::class, 'update'])
    ->name('posts.update');
