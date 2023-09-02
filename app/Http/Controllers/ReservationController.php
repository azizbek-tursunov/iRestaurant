<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'phone' => 'required|max:255',
            'guests' => 'required|min:1',
            'date' => 'required|date_format:d/m/Y|after_or_equal:today',
            'time' => 'required|after:now',
        ]);


        Reservation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'guests' => $request->guests,
            'date' => date('Y-m-d', strtotime($request->date)),
            'time' => $request->time,
        ]);

        return redirect()->back();
    }
}
