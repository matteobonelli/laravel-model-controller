@php

$tou = config('db.tou')
    
@endphp

<footer>
    <div class="separator"></div>
    <div class="container py-4">
        <h5>Domande? Chiama <a href="#">800-130-364</a></h5>
        <ul class="row my-2">
            @foreach ($tou as $item)
                <div class="col-12 col-md-4 col-lg-3 gy-3">
                    <a href="{{$item['url']}}">{{$item['text']}}</a>
                </div>
            @endforeach
        </ul>
        <h6 class="py-4">Netflix Italia</h6>
    </div>
</footer>
