@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h2>Modifica questo comic</h2>
        <form action="{{ route('comics.update', ['comic' => $comic_to_update->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title') ? old('title') : $comic_to_update->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description">{{ old('description') ? old('description') : $comic_to_update->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    value="{{ old('thumb') ? old('thumb') : $comic_to_update->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price"
                    value="{{ old('price') ? old('price') : $comic_to_update->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series"
                    value="{{ old('series') ? old('series') : $comic_to_update->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Out on</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date"
                    value="{{ old('sale_date') ? old('sale_date') : $comic_to_update->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type"
                    value="{{ old('type') ? old('type') : $comic_to_update->type }}">
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Submit changes</button>
        </form>
    </div>
@endsection