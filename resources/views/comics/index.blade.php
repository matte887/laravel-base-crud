@extends('layouts.app')

@section('main_content')
    {{-- {{dd($comics_list)}} --}}
    <ul>
        @foreach ($comics_list as $comic)
            <li>
                <a href="">
                    <h4>{{ $comic->title }}</h4>
                </a>
                <p>Series: {{ $comic->serie }}</p>
                <p>Price: {{ $comic->price }}</p>
            </li>
        @endforeach
    </ul>
@endsection
