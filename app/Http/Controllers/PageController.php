<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Lista film - HOME';
        $text = "'Benvenuti nella nostra selezione di film! Qui troverete un'ampia varietà di titoli, dai classici intramontabili alle ultime novità del cinema.'";
        return view('home', compact('title', 'text'));
    }
    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function movieList()
    {
        $title = 'Lista film';
        $movies = Movie::orderBy('title')->get();
        return view('movieList', compact('title', 'movies'));
    }

    public function oldMovieList()
    {
        $title = 'Lista film vintage';
        $movies = Movie::where('date', '<', '1980-01-01')->orderBy('title')->get();
        return view('movieList', compact('title', 'movies'));
    }
}
