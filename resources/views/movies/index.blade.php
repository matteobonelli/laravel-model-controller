@extends('layouts.app')

@section('title', 'All Movies')

@section('content')


<div class="container my-4" id='index-movies'>
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-12 col-md-4 col-lg-3 gy-4">
            <a href="{{ route('movies.show', $movie->id)}}">
                <div class="card">
                    <img src="{{$movie->image}}" alt="{{$movie->title}}">
                    <div class="movie-container">
                        <h2>{{$movie->title}}</h2>
                        <h5>{{$movie->original_title}}</h5>
                        <p>{{$movie->language}} || {{$movie->vote}}</p>
                    </div>
                    
                </div>
            </a>
        </div>
        
        @endforeach
    </div>
</div>



@endsection