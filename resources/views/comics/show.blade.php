@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <div>{{ $comic->series }}</div>
        <div>Sale date: {{ $comic->sale_date }}</div>
        <div>Type: {{ $comic->type }}</div>
        <div>Price: {{ $comic->price }}</div>
    </div>  
</div>  
@endsection