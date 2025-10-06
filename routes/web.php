<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/page1', [PublicController::class, 'page1'])->name('page1');
Route::get('/page2', [PublicController::class, 'page2'])->name('page2');
Route::get('/post/{post}', [PublicController::class, 'post'])->name('post');

Route::get('/admin/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/admin/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/admin/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');