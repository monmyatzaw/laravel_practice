<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{
    public function index()
  {
    //$data = Movie::all();
    //$data = Movie::find(5);
    // $data = Movie::where('movie_id', 1)->get();
    // $data = Movie::where('title', 'Jamaal Feeney')->first();
    // $data = Movie::orderBy('id', 'desc')->get();
    // $data = Movie::pluck('title');

    $data = Movie::create([
    'title' => 'New Article',
    'year' => '2001',
    'description' => 'This is content',
    'movie_id' => '014',
    'director' => 'Nolan',
    'rating' => '4']);

    // $data =  Movie::find(11);
    // $data->update(['title' => 'Updated']);
    // $data = Movie::find(14)->delete();


    dd($data);
    return view('practice.movie', ['movies' => $data]);
  }
}
