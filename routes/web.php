<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DraftController;
use App\Http\Controllers\User\LandingController;
use Illuminate\Support\Facades\Route;

//route post
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
Route::get('/post/edit', [PostController::class, 'edit'])->name('post.edit');

//route draft 
Route::get('/draft', [DraftController::class, 'index'])->name('draft');


Route::prefix('user')->group(function(){
	Route::get('/', [LandingController::class, 'index']);
});
