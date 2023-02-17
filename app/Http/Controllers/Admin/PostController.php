<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Draft;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {		
				$post = Post::with(['user', 'category'])->get();
        return inertia('Admin/Post/Index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$category = Category::all();
				$user = User::all();
        return inertia('Admin/Post/Create', compact('user', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
					'title' 			=> 'required|string|max:50',
					'body' 				=> 'required',
					'category_id' => 'required',
					'thumbnail' 	=> 'required|mimes:jpg,jpeg,png',

				]);

				if($request->status == 1){
					if($request->file('thumbnail')->isValid())
					{
						$file 			= $request->file('thumbnail');
						$name 			= date('YmdHis');
						$extension 	= $file->getClientOriginalExtension();
						$newName 		= $name . "." . $extension;
						$uploads   	= Storage::putFileAs('public/thumbnail', $request->file('thumbnail'), $newName);
					}

					$post = Post::create([
						'title' 			=> $request->title,
						'slug'  			=> Str::slug($request->title),
						'category_id' => $request->category_id,
						'user_id' 		=> 1,
						'body' 				=> $request->body,
						'excerpt' 		=> Str::limit(strip_tags($request->body, '150')),
						'thumbnail' 	=> 'storage/thumbnail/'. $newName,
						'status' 			=> $request->status
					]);
				}else{
					if($request->file('thumbnail')->isValid())
					{
						$file 				= $request->file('thumbnail');
						$name 				= date('YmdHis');
						$extension 		= $file->getClientOriginalExtension();
						$newName 			= $name . "." . $extension;
						$uploads   		= Storage::putFileAs('public/thumbnail', $request->file('thumbnail'), $newName);
					}

					$draft = Draft::create([
						'title' 			=> $request->title,
						'slug'  			=> Str::slug($request->title),
						'category_id' => $request->category_id,
						'user_id' 		=> 1,
						'body' 				=> $request->body,
						'excerpt' 		=> Str::limit(strip_tags($request->body, '150')),
						'thumbnail' 	=> 'storage/thumbnail/'. $newName,
						'status' 			=> $request->status
					]);
				}

				return redirect()->route('post');
    }
		

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id)->with(['user', 'category']);
				return inertia('Admin/Post/Show', compact('post'));
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
