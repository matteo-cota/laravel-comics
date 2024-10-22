@extends('layouts.app')

@section('title', 'Comics List')

@section('content')
<div class="comics-list">
    <h1 class="mb-5">Current Series</h1>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card comic-card">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
