<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chef;
use App\Models\Gallery;
use App\Models\Menu;
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
        $photos = Gallery::paginate(9);

        return view('gallery', compact('photos'));
    }


    public function menu()
    {
        $categoriesWithMeals = Category::with('menus')->get();


        $breakfastMeals = Menu::where('time_id', '=', 1)->limit(6)->get();
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
