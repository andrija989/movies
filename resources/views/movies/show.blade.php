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

<h1>Add Comment</h1>

<form method="POST" action="{{route('comments-movie',['movie_id' => $movie->id])}}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary"> Submit Post</button>
    </div>

</form>

@endsection