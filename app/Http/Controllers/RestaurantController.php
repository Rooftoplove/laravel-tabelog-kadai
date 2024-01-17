<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $keyword = $request->input('keyword');

        $query = Restaurant::query();
        $query->where('store_name', 'like', "%{$keyword}%");
        if ($request->filled('category_id')) {
            $categoryId = $request->input('category_id');
            $query->where('category_id', '=', $categoryId);
        }
        $restaurants = $query->get();


        return view('restaurants.index', compact('restaurants', 'categories'));
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
