<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $id)
    {
        return view('posts.index', [
            'posts' => $id->posts,
            'currentCat' => $id,
            'categories' => Category::all()
        ]);
    }
}
