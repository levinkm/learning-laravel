<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required| min:8|max:255'
        ]);

        $user = User::create($attributes);
        auth()->login($user);

        session()->flash('message', 'User created successfully');

        return redirect('/');
    }
}
