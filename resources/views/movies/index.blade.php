@extends('layouts.app')

@section('title', 'All Movies')

@section('content')


<div class="container">
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-12 col-md-4 col-lg-3 gy-4">
            <div class="card">
                <img src="{{$movie->image}}" alt="{{$movie->title}}">
                <h2>{{$movie->title}}</h2>
                <h5>{{$movie->original_title}}</h5>
                <p>{{$movie->language}} || {{$movie->vote}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection