<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre) 
    {
        $genreMovies = Movie::where('genre',$genre)->get();

        return view('genres.index',compact('genreMovies'));
    }
}
