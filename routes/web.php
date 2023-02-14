<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
	Route::get('/post', [PostController::class, 'index']);

});
