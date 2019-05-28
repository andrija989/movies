@extends('layout.master')

@section('content')

@foreach ($genreMovies as $genreMovie) 
<li>{{$genreMovie->title}}</li>
@endforeach

@endsection