<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Draft;
use App\Models\Employe;
use App\Models\Hero;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $post = Post::count();
        $category = Category::count();
        $draft = Draft::count();
        // $employe = Employe::count();
        $hero = Hero::count();

        return inertia('Admin/Dashboard/Index', compact('post', 'category', 'draft', 'hero'));
    }
}
