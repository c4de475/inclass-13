<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login() {
        return view(
            'sessions.create',
        );
    }

    public function store() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/');
        }

        return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }

    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}
