<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }


    public function about()
    {
        return view('about');
    }

    
    public function contact()
    {
        return view('contact');
    }


    public function gallery()
    {
        return view('gallery');
    }


    public function menu()
    {
        return view('menu');
    }


    public function reservation()
    {
        return view('reservation');
    }
}
