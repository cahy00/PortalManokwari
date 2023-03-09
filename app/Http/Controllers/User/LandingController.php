<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use Illuminate\Http\Request;
use App\Models\Post;
use Hashids\Hashids;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hash = new Hashids();
        $post = Post::with(['category', 'user'])
        ->where([
            ['category_id', 1],
            // ['is_headline', 0]
        ])
        // ->where('is_headline', 0)
        // ->where('category_id', 1)
        ->orderBy('created_at', 'DESC')
        ->limit(3)
        ->get();

        $artikel = Post::with(['category', 'user'])
        ->where('category_id', '>', 1)
				->orderBy('created_at', 'DESC')
        ->limit(6)
        ->get();

        $headline = Post::with(['category', 'user'])
        ->where('is_headline', 1)
				->orderBy('created_at', 'DESC')
        ->limit(1)
        ->get();

        $hero = Hero::all();
        return view('/user/landing/index', compact('post', 'artikel', 'hero', 'headline', 'hash'));

    }

    public function galeri()
    {
        $post = Post::with(['category', 'user'])->get();
        return view('/user/landing/galeri', compact('post'));
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
        $hash = new Hashids();
        $post = Post::findOrFail($hash->decodeHex($id));
        $allpost = Post::with(['category'])->orderBy('created_at', 'DESC')->where('category_id', 1)->limit(5)->get();
        $allcategory = Category::all();
        return view('user.landing.blog_detail', compact('post', 'allpost', 'allcategory', 'hash'));
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
