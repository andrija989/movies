@extends('layout.master')

@section('content')

<h1>Movie title: {{$movie->title}}</h1>
<h3>director: {{$movie->director}}</h3>
<h3>year: {{$movie->year}}</h3>
<h4>storyline: {{$movie->storyline}}</h4>

@if(count($movie->comments))
    <h4>Comments:</h4>
    <ul>
        @foreach ($movie->comments as $comment)
            <li>
                <p class="comment">
                    Author: {{$comment->content}}
                </p>
                <p>
                    {{$comment->created_at}}
                </p class="comment">
            </li>
        @endforeach
    </ul>
@endif




<h1>Add new movie</h1>

<form method="POST" action="{{ route('store-movie') }}">
    {{ csrf_field() }}

    <div class="form-group">

        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" />
        @include ('partials.error-massage', ['fieldTitle' => 'title'])

    </div>

    <div class="form-group">

        <label for="genre">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" />
        @include ('partials.error-massage', ['fieldTitle' => 'genre'])

    </div>

    <div class="form-group">

        <label for="year">Year</label>
        <input type="text" class="form-control" id="year" name="year" />
        @include ('partials.error-massage', ['fieldTitle' => 'year'])

    </div>
    

    <div class="form-group">

        <label for="storyline">Storyline</label>
        <input type="text" class="form-control" id="storyline" name="storyline" />
        @include ('partials.error-massage', ['fieldTitle' => 'storyline'])

    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary"> Submit Post</button>
    </div>

</form>

@endsection