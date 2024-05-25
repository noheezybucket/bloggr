<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
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

Route::get('/post/{id}', [PostController::class, 'unique_post'])->name('unique-post');

Route::get('/update-post/{id}', [PostController::class, 'update'])->name('update-post');
Route::put('/update-post-process/{id}', [PostController::class, 'update_process'])->name('update-post-process');

Route::get('/delete-post/{id}', [PostController::class, 'delete'])->name('delete-post');
Route::delete('/delete-post-process/{id}', [PostController::class, 'destroy'])->name('delete-post-process');

Route::get('/search-post', [PostController::class, 'search'])->name('search-post');


// CATEGORIE
Route::get('/categories', [CategoryController::class, 'index'])->name('all-categories');

Route::get('/create-category', [CategoryController::class, 'create'])->name('create-category');
Route::post('/create-category-process', [CategoryController::class, 'store'])->name('create-category-process');


Route::get('/update-category/{id}', [CategoryController::class, 'update'])->name('update-category');
Route::put('/update-category-process/{id}', [CategoryController::class, 'update_process'])->name('update-category-process');

Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('delete-category');
Route::delete('/delete-category-process/{id}', [CategoryController::class, 'destroy'])->name('delete-category-process');

Route::get('/search-category', [CategoryController::class, 'search'])->name('search-category');
