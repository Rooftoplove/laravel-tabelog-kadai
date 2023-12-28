<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('restaurants.index', compact('restaurants'));
    }

    public function detail(Restaurant $restaurant)
    {

        return view('restaurants.detail', compact('restaurant'));
    }

    public function favorite(Restaurant $restaurant)
    {

        Auth::user()->toggleFavorite($restaurant);

        return back();
    }
}
