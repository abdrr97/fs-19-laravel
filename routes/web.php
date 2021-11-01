<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// home
// about
// contact


// Route::get('/', function ()
// {
//     return view('home');
// });

Route::view('/', 'home')->name('home');

Route::get('/about-us', function ()
{
    return view('about');
})->name('about.page');

Route::get('/contact', function ()
{
    return view('contact');
});


// Route::get('/p/{id}', function ($user_id)
// {
//     $posts = [1 =>  'post 1', 2 => 'post 2'];
//     // $name = 'Ahmed';
//     // return view('post', ['posts' => $posts]);
//     return view('post', compact('posts', 'user_id'));
// });

Route::get('/p/{id}', [HomeController::class, 'index'])->name('single.post');
Route::get('/user/{id}', [HomeController::class, 'getUser']);
