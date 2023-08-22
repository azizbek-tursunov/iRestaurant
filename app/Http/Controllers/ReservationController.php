<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
         Reservation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'guests' => $request->guests,
            'date' => date('Y-m-d', strtotime($request->date)),
            'time' => $request->time,
        ]);

        return redirect()->route('home');
    }
}
