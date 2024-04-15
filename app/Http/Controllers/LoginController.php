<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register() {
        return view(
            'register.create',
        );
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'username' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|min:12|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}
