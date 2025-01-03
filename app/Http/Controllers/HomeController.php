<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show the landing page
    public function index()
    {
        return view('landing');
    }

    // Show the about page
    public function about()
    {
        return view('about');
    }
}
