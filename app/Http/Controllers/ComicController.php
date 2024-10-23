<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = config('comics');
        return view('comics.index', compact('comics'));
    }

    public function show($id)
    {
        $comics = config('comics');

        // Controlla se l'ID esiste
        if (!isset($comics[$id])) {
            abort(404);  // Se l'ID non esiste, restituisci un errore 404
        }

        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    }
}
