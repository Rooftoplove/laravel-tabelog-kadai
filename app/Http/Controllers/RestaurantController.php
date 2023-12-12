<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;

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
}
