<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Logic to authenticate the user would go here
        if (Auth::attempt($attributes)) {
            session()->regenerate();

            return redirect('/jobs')->with('success', 'Login successful!');
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy()
    {
        // Logic to log out the user would go here
        Auth::logout();

        return redirect('/jobs')->with('success', 'Logged out successfully!');
    }
}
