<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function show($id){
        $movies = Movie::all();
        $movie = $movies->find($id);

        return view('movies.show', compact('movie'));
    }
}
