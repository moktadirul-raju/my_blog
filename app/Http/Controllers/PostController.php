<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->approved()->published()->paginate(6);
        return view('posts',compact('posts'));
    }
    public function details($id)
    {
        $post = Post::where('id',$id)->approved()->published()->first();

        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        $tags = Tag::all();
        $categories = Category::all();
        $posts = Post::latest()->approved()->published()->paginate(6);
        return view('post',compact('post','randomposts','tags','categories','posts'));

    }

    public function postByCategory($slug)
    {
        $categories = Category::all();
        $category = Category::where('slug',$slug)->first();
        $rpost= Post::latest()->approved()->published()->paginate(3);
        $posts = $category->posts()->approved()->published()->paginate(6);
        $tags = Tag::all();
        return view('category',compact('categories','category','rpost','posts','tags'));
    }

    public function postByTag($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        $posts = $tag->posts()->approved()->published()->paginate(2);
        $rpost= Post::latest()->approved()->published()->paginate(3);
        $categories = Category::all();
        $tags = Tag::all();
        return view('tag',compact('tags','tag','posts','rpost','categories'));
    }
}
