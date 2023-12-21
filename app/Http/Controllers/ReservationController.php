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

    public function create()
    {

        $subscription = Reservation::all();

        return view('reservations.subscription', compact('subscription'));
    }

    public function store(Request $request)
    {
        $time = $request->input('time');
        $date = $request->input('date');
        $reservationTime = $date . ' ' . $time;
        $reservation = new Reservation();
        $reservation->time = $reservationTime;
        $reservation->people = $request->input('people');
        $reservation->save();

        return redirect()->route('reservations.index');
    }
}
