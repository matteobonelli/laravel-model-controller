@extends('layouts.app')

@section('title', $movie->title)

@section('content')


<div class="container">
    <div class="card">
        <img src="{{$movie->image}}" alt="{{$movie->title}}">
        <h2>{{$movie->title}}</h2>
        <h5>{{$movie->original_title}}</h5>
        <p>{{$movie->language}} || {{$movie->vote}}</p>
    </div>
</div>



@endsection