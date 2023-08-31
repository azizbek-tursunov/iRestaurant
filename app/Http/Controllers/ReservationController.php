<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'phone' => ['required'],
            'guests' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
        ]);

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
