@section('cdns')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection
@extends('/layouts.main')

@section('title', 'Comics')

@section('content')

<div class="container pad bg-white rounded">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="d-flex justify-content-between text-center">
            <div class="mb-3 ">
                <label for="title" class="form-label h5">Title</label>
                <input type="text" placeholder="Comic Title" class="form-control" value="{{old('title')}}" id="title" name="title" required>
            </div>
            <div class="mb-3 ">
                <label for="type" class="form-label h5">Comic Type</label>
                <input type="text" placeholder="Comic Type" class="form-control" value="{{old('type')}}" id="type" name="type" required>
            </div>
            <div class="mb-3 ">
                <label for="series" class="form-label h5">Comic Series</label>
                <input type="text" placeholder="Comic Series" value="{{old('series')}}" class="form-control" id="series" name="series" required>
            </div>
            <div class="mb-3 ">
                <label for="sale_date" class="form-label h5">Sale Date</label>
                <input type="date" placeholder="Comic Series" class="form-control" id="sale_date" value="{{old('title')}}" name="sale_date" required>
            </div>
            <div class="mb-3 ">
                <label for="price" class="form-label h5">Price</label>
                <input type="number" min="1" max='150' placeholder="Price" value="{{old('price')}}" class="form-control" id="price" name="price" required>
            </div>
        </div>
        <div class="mb-3 ">
            <label for="thumb" class="form-label h5">Comic image</label>
            <input type="text" placeholder="Image URL" class="form-control" value="{{old('thumb')}}" id="thumb" name="thumb" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label h5">Description</label>
            <textarea type="text" class="form-control" placeholder="Write a comic description" value="{{old('description')}}" name="description" cols="30" rows="5" id="description"></textarea>
        </div>
        <div class="mb-3 d-flex text-center justify-content-around">
            <div class="">
                <label for="artists" class="form-label h5">Artists</label>
                <textarea type="text" placeholder="Artists names separeted by ' , '" class="form-control" value="{{old('artists')}}" name="artists" cols="50" rows="5" id="artists"></textarea>
            </div>
            <div class="">
                <label for="writers" class="form-label h5">Writers</label>
                <textarea type="text" class="form-control" placeholder="Writers names separeted by ' , '" value="{{old('writers')}}" name="writers" cols="50" rows="5" id="writers"></textarea>

            </div>
        </div>
        <div class="d-flex justify-content-center my-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
</div>
@endsection