@extends('/layouts.main')

@section('title', 'Comics')

@section('content')
<div class="container">
    <div class="d-flex">
        @foreach($comics as $comic)
        <div class="card row c">
            <img src="{{$comic['thumb']}}" alt="">
            <h3>{{$comic['title']}}</h3>
        </div>
        @endforeach
    </div>
</div>
@endsection