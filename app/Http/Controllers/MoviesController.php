<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() {

        $movies = Movie::all();
        $sideBars = Movie::orderBy('id', 'desc')->take(5)->get();

        return view('movies.index',compact('movies','sideBars'));
    }

    public function show($id) {

        $movie = Movie::with('comments')->find($id);
        $sideBars = Movie::orderBy('id', 'desc')->take(5)->get();

        return view('/movies.show',compact('movie','sideBars'));
    }

    public function create() {
        
        $sideBars = Movie::orderBy('id', 'desc')->take(5)->get();
        return view('/movies.create',compact('sideBars'));

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
