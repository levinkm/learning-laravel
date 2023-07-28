<?php

namespace App\Http\Controllers;

use  \App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show(User $author)
    {
        return view(
            'posts.index',
            [
                'posts' => $author->posts,
                'categories' => Category::all(),
                'currentCat' => Category::firstWhere('slug', request('category'))
            ]
        );
    }
}
