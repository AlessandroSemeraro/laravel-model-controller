@extends ('layouts.app')

@section('main-content')

<h1>
    Books
</h1>

<ul>
    @foreach ($movies as $movie)
    <li>
        {{$movie->title}}
    </li>
    @endforeach
</ul>
@endsection