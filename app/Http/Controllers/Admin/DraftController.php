<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Draft;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class DraftController extends Controller
{
    public function index()
	{		
		$draft = Draft::with(['category', 'user'])->get();
		return inertia('Admin/Draft/Index', compact('draft'));
	}

	public function show($id)
	{
		$draft = Draft::find($id);
		$category = Category::all();
		return inertia('Admin/Draft/Show', compact('draft', 'category'));
	}

	public function edit($id)
	{
		$draft = Draft::find($id);
		$category = Category::all();
		return inertia('Admin/Draft/Edit', compact('draft', 'category'));
	}

	public function update(Request $request, $id)
	{
		$draft = Draft::find($id);

		if($request->status == 1){
			$post = Post::create([
				'title' 			=> $request->title,
				'slug'  			=> Str::slug($request->title),
				'category_id'       => $request->category_id,
				'user_id' 		    => auth()->user()->id,
				'body' 				=> $request->body,
				'excerpt' 		    => Str::limit(strip_tags($request->body, '150')),
				// 'thumbnail' 	    => 'storage/thumbnail/'. $newName,
				'status' 			=> $request->status,
				'is_headline'       => $request->is_headline
			]);
			$draft->delete();
			
			return redirect()->route('post');
		}
		
		$draft->update([
			'title' 			=> $request->title,
			'slug'  			=> Str::slug($request->title),
			'category_id'       => $request->category_id,
			'user_id' 		    => auth()->user()->id,
			'body' 				=> $request->body,
			'excerpt' 		    => Str::limit(strip_tags($request->body, '150')),te
			// 'thumbnail' 	    => 'storage/thumbnail/'. $newName,
			'status' 			=> $request->status,
			'is_headline'       => $request->is_headline
		]);

	return redirect()->route('draft');

		
	}

	public function destroy($id)
	{
		$draft = Draft::findOrFail($id);
		$draft->delete();
		return redirect()->route('draft');
	}
}
