<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use Illuminate\Http\Request;
use App\Models\Post;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				$post = Post::with(['category', 'user'])
				->where('category_id', 1)
                ->where('is_headline', 0)
				->orderBy('created_at', 'DESC')
				->take(3)
				->get();

				$artikel = Post::with(['category', 'user'])
				->where('category_id', '>', 1)
				->limit(6)
				->get();

                $headline = Post::with(['category', 'user'])
                ->where('is_headline', 1)
                ->limit(1)
                ->get();

				$hero = Hero::all();
        return view('/user/landing/index', compact('post', 'artikel', 'hero', 'headline'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
				$post = Post::findOrFail($id);
				$allpost = Post::all();
				$allcategory = Category::all();
				// dd($post);
        return view('user.landing.blog_detail', compact('post', 'allpost', 'allcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
