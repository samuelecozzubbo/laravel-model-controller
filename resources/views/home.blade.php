{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5 home">
        <h1>{{ $title }}</h1>
        <p>
            {{ $text }}
        </p>
        <button class="btn btn-warning"><a href="" class="text-black text-decoration-none">Vai ai film</a></button>
    </div>
@endsection


@section('titlePage')
    home
@endsection
