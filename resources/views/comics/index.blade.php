@extends('/layouts.main')

@section('title', 'Comics')

@section('content')
<div class="container text-center">
    <div class="my">
        <a href="{{ route('comics.create')}}" class="btn">Aggiungi un fumetto</a>
    </div>
    <div class="d-flex">

        @foreach($comics as $comic)
        <div class="card row c">
            <a href="{{route('comics.show', $comic->id)}}">
                <img src="{{$comic['thumb']}}" alt="">
                <h3>{{$comic['title']}}</h3>
            </a>
        </div>

        @endforeach
    </div>
</div>
@endsection