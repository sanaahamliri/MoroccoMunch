<?php

namespace App\Http\Controllers;

use App\Mail\RefuseReservationMail;
use App\Mail\ReservationMail;
use App\Models\plate;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {      
       $reservations = Reservation::whereHas('plates', function ($query) {
        $query->where('IdChef', Auth::user()->chef->id);
    })->where('status',false)->get();
        return view('chef.Reservation',compact('reservations'));
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
        $user = Auth::user()->client->id;
        $plate = $request->input('plateId');
        // $request->validate([
        //     'plateId' => 'required|interger',
        // ]);
        $reservation_exist = reservation::where('clientID',$user)->where('plateID',$plate)->where('status',false)->exists();
        if(!$reservation_exist){
            $reservation = reservation::create([
                'plateID' =>$plate,
                'clientID' =>$user,
            ]);
            return redirect()->back()->with('success','plate reservation done');
        }
        return redirect()->back()->with('error','you alreday reserve this plate, should accepted first to add one');


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
       $success =  $reservation->update([
                    'status' => true,
        ]);
            if($success){
                Mail::to($reservation->clients->user->email)->send(new ReservationMail($reservation->id));
            }

      return  redirect()->back()->with('success','accepted with success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
            Mail::to($reservation->clients->user->email)->send(new RefuseReservationMail($reservation->id));       
                $reservation->delete();

        return redirect()->back()->with('succes','reservation refused with success');
    }
}
