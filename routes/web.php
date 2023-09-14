<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\ArticlesController;



Route::get('/', [PagesController::class, 'index']);

Route::get('/contact-us', [PagesController::class, 'contact']);

Route::get('/About', [AboutController::class, 'about']);

Route::get('/articles', [ArticlesController::class, 'index']);

Route::get('/articles/create', [ArticlesController::class, 'create'])->middleware('auth');

Route::post('/articles/create', [ArticlesController::class, 'store'])->middleware('auth');

Route::get('/article/{article}/edit', [ArticlesController::class, 'edit'])->middleware('auth');

Route::patch('/article/{article}/edit', [ArticlesController::class, 'update'])->middleware('auth');

Route::delete('article/{article}/delete', [ArticlesController::class, 'delete'])->middleware('auth');


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [SessionsController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('/logout', [SessionsController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/profile', [UserController::class, 'index'])->name('profile')->middleware('auth');






















Route::get('/article/{id}', [ArticlesController::class, 'show']);


