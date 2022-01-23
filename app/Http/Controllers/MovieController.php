<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * MOVIE ARCHIVE
     */

     public function index() {
         $movies = Movie::all();
        //  dump($movies);

        return view('movies', compact('movies'));
     }
}
