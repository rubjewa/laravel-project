<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('post/{id}', \App\Http\Livewire\Posts\Show::class)->name('showpost');
Route::get('posts', \App\Http\Livewire\Posts\ShowAll::class)->name('posts');
Route::get('posts/create', \App\Http\Livewire\Posts\Create::class)->name('posts-create');


Route::get('/', \App\Http\Livewire\Home::class)->name('home');

// Route::get('/', function () {
//     return view('home', \App\Http\Livewire\Home::class);
// });

//// TODO: Setup MV routing for Livewire pages
//// + Make documentation website with reference posts + comments
