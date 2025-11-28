<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
})->name('index'); 

Route::prefix('user')->middleware(['auth','verified'])->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');

    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::patch('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
