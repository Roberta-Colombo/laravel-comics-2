@extends('layouts.app')

@section('content')
<section class="details">
    <div class="container">
        <div class="py-5">
            <h2 class="pb-2">{{ $comic->title }}</h2>
            <p>{{ $comic->description }}</p>
            <div><strong>Series:</strong> {{ $comic->series }}</div>
            <div><strong>Sale date:</strong> {{ $comic->sale_date }}</div>
            <div><strong>Type:</strong> {{ $comic->type }}</div>
            <div><strong>Price:</strong> {{ $comic->price }}</div>
        </div>  
    </div>  
</section>
@endsection