<?php

namespace App\Http\Controllers;

use App\Models\Resaurant;
use Illuminate\Http\Request;

class ResaurantController extends Controller
{
    public function index()
    {
        $resaurants = Resaurant::all();

        return view('resaurants.index', compact('resaurants'));
    }
}
