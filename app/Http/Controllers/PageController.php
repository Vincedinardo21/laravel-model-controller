<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('home');
        // $movies = \app\Movie::All();
        // dd($movies);
    }

    public function list(){
        $movies = \App\Movie::all();
        dd($movies);
    }
}
