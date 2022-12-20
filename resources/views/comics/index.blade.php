@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      @foreach ($comics as $comic)
      <div class="card col-3">
         <img class="card-img-top" src="{{ $comic->thumb }}" alt="Cover">
         <div class="card-body">
            <h3 class="card-title">{{ $comic->title }}</h3>
            <p class="card-text">{{ $comic->description }}</p>
            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">See more details</a>
         </div>
      </div>
      @endforeach
   </div>
</div>  
@endsection