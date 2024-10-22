<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        // Retrieve the comics from the config file
        $comics = config('comics');

        // Pass the comics to the view
        return view('comics.index', compact('comics'));
    }
}
