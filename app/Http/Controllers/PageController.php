<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Gallery;
use App\Models\Menu;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts =  Blog::latest()->limit(3)->get();

        return view('home', compact('posts'));
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
        $photos = Gallery::paginate(9);

        return view('gallery', compact('photos'));
    }


    public function menu()
    {
        $categoriesWithMeals = Category::with('menus')->get();
        $lunchMeals = Menu::where('time_id', '=', 2)->limit(6)->get();
        $dinnerMeals = Menu::where('time_id', '=', 3)->limit(6)->get();

        return view('menu', compact(
            'categoriesWithMeals',
            'lunchMeals',
            'dinnerMeals'
        ));
    }


    public function reservation()
    {
        return view('reservation');
    }
}
