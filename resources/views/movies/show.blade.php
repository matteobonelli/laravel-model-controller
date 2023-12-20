@extends('layouts.app')

@section('title', $movie->title)

@section('content')


<div class="container my-4 d-flex" id='show-movies'>
    <div class="card">
        <img src="{{$movie->image}}" alt="{{$movie->title}}" class="mb-4">
        <h2>{{$movie->title}}</h2>
        <h5>{{$movie->original_title}}</h5>
        <p>Lingua: {{$movie->language}} <br> Vote: <span class='vote'>{{$movie->vote}}</span></p>
    </div>
    <div class="description-container">
        <h3>Descrizione:</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia voluptas eum consequuntur, at ullam amet delectus atque fugiat minus deleniti provident. Cupiditate eos ab at minus itaque architecto non esse consequuntur, quidem aliquid. Adipisci quae nam nobis, ab delectus illo dolores ipsam itaque incidunt minus. Hic inventore totam soluta adipisci nulla sequi laborum. Accusantium, corrupti est ut recusandae, officiis error illum iste temporibus eum sint quia dolorem repellendus possimus laborum. Fugiat optio quo debitis in modi hic unde voluptas, cumque natus ullam quibusdam. Ut soluta iste adipisci voluptatem quo eaque fugit recusandae, suscipit veniam necessitatibus nobis quas, omnis quis voluptas?</p>
        <h3>Data Uscita:</h3>
        <p>9/9/XX01</p>
        <h3>Attori:</h3>
        <p>Pinco Pallo, Panco Pillo, Cavalier Campero</p>
    </div>
</div>



@endsection