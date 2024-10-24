@extends('layouts.app')


@section('content')
 <h1>Lista di Fumetti</h1>
    <div class="row">
        @foreach ($comics as $index => $comic)
                <div class="col-md-3">
                    <div class="card">
                        <a href="{{ route('comics.show', $index) }}">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection
