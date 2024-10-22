@extends("layouts.app")

@section("page-title", "DC Comics")

@section("main-content")

    <div class="container">
        <div class="row">

            @foreach ( $comics as $singleComic)

                <div class="col-3">
                    {{-- <ul>
                        <li>
                            name: {{$singleComic["title"]}}
                        </li>
                        <li>
                            description: {{$singleComic["description"]}}
                        </li>
                        <li>
                            price: {{$singleComic["price"]}}
                        </li>
                        <li>
                            sale_date: {{$singleComic["sale_date"]}}
                        </li>
                        <li>
                            series: {{$singleComic["series"]}}
                        </li>
                        <li>
                            type: {{$singleComic["type"]}}
                        </li>
                        <li>
                            thumb: {{$singleComic["thumb"]}}
                        </li>
                    </ul>--}}
                    <div class="card" style="width: 18rem;">
                        <img src="{{$singleComic["thumb"]}}" class="card-img-top" alt="{{$singleComic["title"]}}">
                        <div class="card-body">
                          <p class="card-text">name: {{$singleComic["title"]}}</p>
                          <p class="card-text">price: {{$singleComic["price"]}}</p>
                          <p class="card-text">series: {{$singleComic["series"]}}</p>
                          <p class="card-text">sale date: {{$singleComic["sale_date"]}}</p>
                          <p class="card-text">type: {{$singleComic["type"]}}</p>
                        </div>
                    </div>
                </div>



            @endforeach
        </div>
    </div>

@endsection
