<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();

        return view('reservations.index', compact('reservations'));
    }

    public function subscription()
    {

        $subscription = Reservation::all();

        return view('reservations.subscription', compact('subscription'));
    }
}
