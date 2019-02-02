<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title','LIKE',"%$query%")->approved()->published()->get();
        $rpost = Post::latest()->approved()->published()->paginate(6);
        $tags = Tag::all();
        $categories = Category::all();
        return view('search',compact('posts','query','rpost','tags','categories'));
    }
}
