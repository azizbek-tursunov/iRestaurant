<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }


    public function about()
    {
        $chefs = Chef::all();

        return view('about', compact('chefs'));
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
