<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();


        return view(
            'posts.index',
            [
                // it's advisable to avoid using all() when having relationships on your table to avoid N+1 problem.

                'posts' => Post::latest()->filter(request(["search", "category"]))->paginate(6)->withQueryString(),
                'categories' => Category::all(),
                'currentCat' => Category::firstWhere('slug', request('category'))
            ]
        );
    }
    public function show(Post $post)
    {
        // dd($post->comments); //this is a test
        return view('posts.show', [
            'post' => $post
            // 'comments' => $post->
        ]);
    }
}
