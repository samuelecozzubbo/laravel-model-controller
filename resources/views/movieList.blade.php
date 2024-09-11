{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>{{ $title }}</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="card-title text-white">{{ $movie->title }}</h3>
                        <h6 class="card-subtitle text-white">{{ $movie->original_title }}</h6>
                        <p class="card-text">
                            {{ $movie->date }}
                        </p>
                        <a href="#" class="btn btn-danger">Vai ai Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('titlePage')
    movie-list
@endsection
