<h1>Movie List:</h1>
<ul>
    @foreach ($movies as $movie)
    <li>
       <a href = "{{'/movies/'. $movie->id}}">{{$movie->title}} </a>
       <p>Movie tieser: {{$movie->storyline}}</p>
    </li>
    @endforeach
</ul>