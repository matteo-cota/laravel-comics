@extends('layouts.app')

@section('title', 'Lista Fumetti')

@section('content')
<div class="row">
    @foreach ($comics as $comic)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text">{{ $comic['description'] }}</p>
                    <a href="{{ route('comics.show', $comic['description']) }}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
