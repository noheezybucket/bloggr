<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('all-posts');
Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
Route::post('/create-post-process', [PostController::class, 'store'])->name('create-post-process');

Route::get('/', [PostController::class, 'index'])->name('all-posts');
Route::get('/', [PostController::class, 'index'])->name('all-posts');

Route::get('/categories', [CategoryController::class, 'index'])->name('all-categories');
Route::get('/create-category', [CategoryController::class, 'create'])->name('create-category');
Route::post('/create-category-process', [CategoryController::class, 'store'])->name('create-category-process');
