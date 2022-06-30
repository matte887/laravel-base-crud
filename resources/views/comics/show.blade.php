@extends('layouts.app')

@section('main_content')
    {{-- {{ dd($comic_details) }} --}}

    <div class="container">
        <h3 class="text-center mt-5">{{ $comic_details->title }}</h3>
        <img class="mx-auto d-block mt-5" src="{{ $comic_details->thumb }}" alt="">
        <p class="mt-3">{{ $comic_details->description }}</p>
        <p>Series: {{ $comic_details->series }}</p>
        <p>Price: {{ $comic_details->price }}</p>
        <p>Out on: {{ $comic_details->sale_date }}</p>
    </div>
@endsection