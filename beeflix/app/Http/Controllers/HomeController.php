<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;
use Illuminate\Http\Request;
use App\Movie;
class HomeController extends Controller
{
    //
    public function index()
    {
        $genres = Genre::all();
        $movies = Movie::all();
        return view('index', [
            'movies' => $movies,
            'genres'=>$genres
        ]);
    }
    public function category($genre_id)
    {
        $genres = Genre::all();
        $genre= Genre::find($genre_id);
        $movies = Movie::where('genre_id',"$genre_id")->get();
        return view('index', [
            'movies' => $movies,
            'genre'=>$genre,
            'genres'=>$genres
        ]);
    }
    public function show($id)
    {
        // MENGAMBIL SPESIFIK DATA TRANSACTION
        // Masukkan kode untuk menampilkan data yang lebih spesifik
        $movies = Movie::find($id);
        $genre = Genre::find($movies->genre_id);
        $episodes = Episode::where('movie_id','=',$id)->paginate(3);
        return view('detail', [
            'movies' => $movies,
            'genre'=>$genre,
            'episodes'=>$episodes
        ]);
    }
}
