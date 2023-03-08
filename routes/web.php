<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DraftController;
use App\Http\Controllers\Admin\HeroesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\LandingController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables;

Route::middleware('auth')->group(function(){

    Route::prefix('admin')->group(function(){
        //route dashboard
        Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');
        //route post
        Route::get('/post', [PostController::class, 'index'])->name('post');
        Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
        Route::get('/post/show/{id}', [PostController::class, 'show'])->name('post.show');
        Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::put('/post/edit/{id}', [PostController::class, 'update'])->name('post.update');
        Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
        
        //route draft 
        Route::get('/draft', [DraftController::class, 'index'])->name('draft');
        Route::get('/draft/show/{id}', [DraftController::class, 'show'])->name('draft.show');
        Route::get('/draft/edit/{id}', [DraftController::class, 'edit'])->name('draft.edit');
        Route::put('/draft/update/{id}', [DraftController::class, 'update'])->name('draft.update');
				Route::delete('/draft/delete/{id}', [DraftController::class, 'destroy'])->name('draft.destroy');


        //route category
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
				Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
				Route::put('/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
				Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

        //route hero
        Route::get('/hero', [HeroesController::class, 'index'])->name('hero');
        Route::get('/hero/create', [HeroesController::class, 'create'])->name('hero.create');
        Route::post('/hero/create', [HeroesController::class, 'store'])->name('hero.store');

				//route unit
        Route::get('/unit', [HeroesController::class, 'index'])->name('unit');

    });
    
});


// Route::prefix('user')->group(function(){});

Route::get('/', [LandingController::class, 'index']);
Route::get('/blog-detail/show/{id}', [LandingController::class, 'show'])->name('blog.show');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/profil', [AboutController::class, 'profil'])->name('profil');
Route::get('/galeri', [LandingController::class, 'galeri'])->name('galeri');
Route::get('/faq', [FaqController::class, 'faq'])->name('faq');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/logout', [LogoutController::class, 'index'])->name('logout');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

