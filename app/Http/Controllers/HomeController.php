<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // function that handles the home page
    public function index()
    {
        $title = "MyMovies";
        return view('home', compact('title'));
    }
}
