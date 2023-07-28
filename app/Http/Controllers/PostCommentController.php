<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => 'required'
        ]);


        Comment::create([
            'body' => request('body'),
            'user_id' => request()->user()->id,
            'post_id' => $post->id
        ]);

        return back();
    }
}
