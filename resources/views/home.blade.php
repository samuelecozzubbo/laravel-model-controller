{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5 home">
        <div class="jumbotron">
            <h1 class="display-4">{{ $title }}</h1>
            <p class="lead">{{ $text }}</p>
            <hr class="my-4">
            <p>Clicca qui per vedere l'intero catalogo</p>
            <p class="lead">
                <button class="btn btn-warning"><a href="{{ route('movieList') }}" class="text-black text-decoration-none">Vai
                        ai
                        film</a></button>
            </p>
        </div>
        <h1></h1>
        <p>

        </p>

    </div>
@endsection


@section('titlePage')
    home
@endsection
