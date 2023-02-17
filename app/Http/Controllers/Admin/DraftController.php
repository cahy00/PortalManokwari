<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Draft;
use Illuminate\Http\Request;

class DraftController extends Controller
{
    public function index()
		{		
				$draft = Draft::with(['category', 'user'])->get();
				return inertia('Admin/Draft/Index', compact('draft'));
		}
}
