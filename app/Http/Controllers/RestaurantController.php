<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Restaurant::query();
        $query->where('store_name', 'like', "%{$keyword}%");
        $restaurants = $query->get();


        return view('restaurants.index', compact('restaurants'));
    }

    public function detail(Restaurant $restaurant)
    {
        $reviews = Review::where('restaurant_id', '=', $restaurant->id)->get();
        return view('restaurants.detail', compact('restaurant', 'reviews'));
    }

    public function favorite(Restaurant $restaurant)
    {

        Auth::user()->toggleFavorite($restaurant);

        return back();
    }
}
