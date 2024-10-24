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

    public function show($id) {
        // Supponiamo che tu stia recuperando i fumetti da un array o un database
        $comic = config('comics')[$id]; // o dal database

        // Verifica se il fumetto esiste
        if (!$comic) {
            abort(404);
        }

        return view('comics.show', compact('comic'));
    }
}
