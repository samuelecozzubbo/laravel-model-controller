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
        return view('movieList');
    }
}
