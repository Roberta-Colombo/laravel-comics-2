@extends('layouts.app')

@section('content')
<section class="sect-comics-index">
   <div class="container">
      <div class="row">
         @foreach ($comics as $comic)
         <div class="card col-md-3 col-sm-12 mb-5">
            <div class="card-img-box">
               <img class="card-img-top" src="{{ $comic->thumb }}" alt="Cover">
            </div>
            <div class="card-body">
               <h3 class="card-title pb-2">{{ $comic->title }}</h3>
               <p class="card-text">{{Str::limit($comic->description, 150)}}</p>
               <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mb-2">See more details</a>
               <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Change details</a>
               <br>
               <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger mt-3">Delete product</button>
               </form>
            </div>
         </div>
         @endforeach
      </div>
   </div>  
</section>
@endsection