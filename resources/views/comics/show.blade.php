@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $comic['title'] }}</h1>
            <p><strong>Serie:</strong> {{ $comic['series'] }}</p>
            <p><strong>Prezzo:</strong> ${{ $comic['price'] }}</p>
            <p><strong>Descrizione:</strong> {{ $comic['description'] }}</p>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla lista</a>
        </div>
    </div>
</div>
@endsection
