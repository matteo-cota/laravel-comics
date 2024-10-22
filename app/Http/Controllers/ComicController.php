<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        // Recupera i dati dal file di configurazione
        $comics = config('comics');

        // Passa i dati alla vista
        return view('comics.index', compact('comics'));
    }
}