@extends('layouts.app')

@section('main_content')
    {{-- {{dd($comics_list)}} --}}
    <div class="container mt-5">
        <ul>
            @foreach ($comics_list as $comic)
                <li>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        <h4>{{ $comic->title }}</h4>
                    </a>
                    <p>Series: {{ $comic->serie }}</p>
                    <p>Price: {{ $comic->price }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
