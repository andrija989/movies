<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() {

        $movies = Movie::all();

        return view('movies.index',compact('movies'));
    }

    public function show($id) {

        $movie = Movie::findOrFail($id);

        return view('/movies.show',compact('movie'));
    }

    public function create() {
        
        return view('/movies.create');

    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'genre' => 'required',
            'year' =>'required',
            'storyline' =>'required|max:1000'
        ]);
        $movie = Movie::create(request()->all());
        return redirect()->route('movies-list');
    }
}
