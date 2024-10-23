@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

</body>
</html>
@section('content')
    <h1>Lista di Fumetti</h1>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        <p class="card-text">{{ $comic['description'] }}</p>
                        <p class="card-text"><strong>Prezzo:</strong> {{ $comic['price'] }}</p>
                        <p class="card-text"><strong>Serie:</strong> {{ $comic['series'] }}</p>
                        <p class="card-text"><strong>Data di vendita:</strong> {{ $comic['sale_date'] }}</p>
                        <p class="card-text"><strong>Tipo:</strong> {{ $comic['type'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
