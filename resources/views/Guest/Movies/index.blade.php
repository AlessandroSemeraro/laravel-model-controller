@extends ('layouts.app')

@section('main-content')

<h1>
    Books
</h1>
<section class="container">
    <div class="row">

        @foreach ($movies as $movie)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> {{$movie->title}} </h2>
                    </div>
                    <p>
                        {{ $movie->nationality }},
                        {{ $movie->date }},
                        {{ $movie->vote }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
@endsection