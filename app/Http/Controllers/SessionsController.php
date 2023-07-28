<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        //where we should  login the user
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {

            session()->regenerate();

            return redirect('/')->with('success', 'Welcome Back!');
        }

        throw ValidationException::withMessages(['email' => 'Your credentials are incorrect']);

        // return back()
        // ->include('email')
        // ->withErrors(['email' => 'Your credentials are incorrect']);
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You have been logged out!');
    }
}
