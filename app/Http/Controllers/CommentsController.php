<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($movieId) {
        $movie = Movie::find($movieId);
        $movie->comments()->create(request()->all());
        return redirect()->route('movie-single',['id'=>$movieId]);
    }
}
