@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic['title'] }}</h1>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <p>{{ $comic['description'] }}</p>
        <p><strong>Price:</strong> ${{ $comic['price'] }}</p>
        <p><strong>Series:</strong> {{ $comic['series'] }}</p>
        <p><strong>Sale Date:</strong> {{ $comic['sale_date'] }}</p>

        <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to list</a>
    </div>
@endsection
