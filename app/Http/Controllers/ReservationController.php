<?php

namespace App\Http\Controllers;

use App\Models\plate;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = reservation::all();
        $reservationsCount = reservation::count();

        return view('chef.Reservation',compact('reservations','reservationsCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'plateId' => 'required|interger',
        // ]);
        

        $user = Auth::user();
        $reservation = reservation::create([
            'plateID' =>$request->input('plateId'),
            'clientID' =>$user->id,
        ]);

        return redirect()->back()->with('success','plate reservation done');
    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
