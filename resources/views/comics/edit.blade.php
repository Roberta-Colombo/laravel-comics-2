@extends('layouts.app')

@section('content')
<div class="container pb-5">
    <h3 class="py-5">Modify details for: {{ $comic->title }}</h3>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title', $comic->title)}}" required>
        </div>
     
        <div>
            <label for="thumb">Image</label>
            <input type="text" name="thumb" id="thumb" value="{{old('thumb', $comic->thumb)}}" required>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{old('price', $comic->price)}}" required>
        </div>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{old('series', $comic->series)}}" required>
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type" value="{{old('type', $comic->type)}}" required>
        </div>

        <div>
            <label for="sale_date">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}" required>
            <div id="sale_dateHelp" class="form-text">Date format: YYYY-MM-DD</div>
        </div>

        <div class="text-area">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description', $comic->description)}}</textarea>
        </div>
     
        <button class="create-btn" type="submit">Submit changes</button>
     </form>     
</div>


@endsection