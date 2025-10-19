<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/page1', [PublicController::class, 'page1'])->name('page1');
Route::get('/page2', [PublicController::class, 'page2'])->name('page2');
Route::get('/post/{post}', [PublicController::class, 'post'])->name('post');
Route::get('/tag/{tag}', [PublicController::class, 'tag'])->name('tag');
Route::get('/user/{user}', [PublicController::class, 'userPosts'])->name('user.posts');

//Route::get('/admin/posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('/admin/posts/create', [PostController::class, 'create'])->name('posts.create');
//Route::post('/admin/posts', [PostController::class, 'store'])->name('posts.store');
//Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::put('/admin/posts/{post}', [PostController::class, 'update'])->name('posts.update');
//Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/admin/posts', PostController::class);
    Route::post('/post/{post}/like', [LikeController::class, 'store'])->name('post.like'); 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';