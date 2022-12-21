@extends('layouts.app')

@section('content')
<div class="container pb-5">
    <h3 class="py-5">Fill in the details to add the comic to the catalogue:</h3>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="input-field">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
     
        <div>
            <label for="thumb">Image</label>
            <input type="text" name="thumb" id="thumb">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price">
        </div>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
        </div>

        <div>
            <label for="sale_date">Sale date</label>
            <input type="text" name="sale_date" id="sale_date">
            <div id="sale_dateHelp" class="form-text">Date format: YYYY-MM-DD</div>
        </div>

        <div class="text-area">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
     
        <button class="create-btn" type="submit">Add</button>
     </form>     
</div>  
@endsection