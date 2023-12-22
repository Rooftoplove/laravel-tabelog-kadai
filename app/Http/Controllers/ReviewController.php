<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review();
        $review->user_id = Auth::id();
        $review->restaurant_id = $request->input('restaurant_id');
        $review->evaluation = $request->input('evaluation');
        $review->comment = $request->input('comment');
        $review->save();

        return redirect()->route('reviews.index');
    }
}
