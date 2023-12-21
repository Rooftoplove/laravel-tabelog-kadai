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
        $request->validate([
            'comment' => 'required'
        ]);

        $review = new Review();
        $review->evaluation = $request->input('evaluation');
        $review->comment = $request->input('comment');
        $review->user_id = Auth::user()->id;
        $review->restaurants_id = Auth::restaurant()->id;
        $review->save();

        return back();
    }
}
