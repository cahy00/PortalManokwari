<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DraftController;
use App\Http\Controllers\Admin\HeroesController;
use App\Http\Controllers\User\LandingController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables;

//route post
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
Route::get('/post/show/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::get('/test', function(){
// 	// $post = App\Models\Post::query();
// 	return DataTables::of(Post::query())->make(true);
// });

//route draft 
Route::get('/draft', [DraftController::class, 'index'])->name('draft');

//route hero
Route::get('/hero', [HeroesController::class, 'index'])->name('hero');
Route::get('/hero/create', [HeroesController::class, 'create'])->name('hero.create');
Route::post('/hero/create', [HeroesController::class, 'store'])->name('hero.store');

Route::prefix('admin')->group(function(){});

Route::prefix('user')->group(function(){
	
});

Route::get('/', [LandingController::class, 'index']);
Route::get('/blog-detail/show/{id}', [LandingController::class, 'show'])->name('blog.show');
