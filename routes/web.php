<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// routes 
// /home
// /about
// /contact
// show index create store edit update delete (ressource)

// Route::resource('posts', PostController::class)->only(['index', 'show']);
Route::get('/about-us',  [PostController::class, 'about'])->name('about.page');
Route::view('/contact', 'contact');


// posts

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
