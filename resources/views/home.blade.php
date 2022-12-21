@extends('layouts.app')
@section('content')

<section class="home-section">
    <h1 class="text-center pt-5">DC COMICS</h1> 
    <p class="text-center mt-4">Discover our collection!</p>
    <button class="btn btn-primary"><a href="{{ route('comics.index') }}">Browse...</a></button>
</section>

@endsection
