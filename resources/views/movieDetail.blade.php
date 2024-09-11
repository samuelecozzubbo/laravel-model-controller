{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5 d-flex flex-column align-items-center">
        <h1>Dettaglio</h1>
        <div class="card text-bg-dark">
            <img src="{{ Vite::asset('resources/img/card_background.jpg') }}" class="card-img" alt="">
            <div class="card-img-overlay">
                <h2 class="card-title">{{ $movie->title }}</h2>
                <h5 class="card-subtitle">{{ $movie->original_title }}</h5><br>
                <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                <p class="card-text">Voto: {{ $movie->vote }}</p>
                <a class="btn btn-warning" href={{ route('movieList') }}>Torna ai film</a>
            </div>
        </div>
    </div>
@endsection


@section('titlePage')
    film-detail
@endsection
