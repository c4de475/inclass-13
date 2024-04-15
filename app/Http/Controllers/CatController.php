<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        if(request('age')){
            $cats = Cat::where('age', request('age'))->paginate(3);
        } else {
            $cats = Cat::paginate(3);
        }

        return view('index', ['cats' => $cats]);
    }

    public function create() {
        return view('create');
    }


    public function store() {
        $attributes = request()->validate([
            'name' => ['required'],
            'age' => ['required', 'integer', 'min:0', 'max:20'],
            'breed' => ['required'],
        ]);

        Cat::create($attributes);
        return redirect('/')->with('success', 'Cat created.');
    }
}
