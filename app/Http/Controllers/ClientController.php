<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\chef;
use App\Models\client;
use App\Models\plate;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = client::all();
        $BlockedClients = client::where('status', '1')->count();
        $FreeClients = client::where('status', '0')->count();

        return view('admin.validate', compact('clients', 'BlockedClients', 'FreeClients'));
    }


    public function ban(Request $request, client $client)
    {
        if (!$client->status) {
            $client->update([
                'status' => 1,
            ]);
            return redirect()->back()->with('success', 'user Banned!');
        } else {
            $client->update([
                'status' => 0,
            ]);
            return redirect()->back()->with('success', 'user Unbanned!');
        }
    }


    public function showValidPlates()
    {
        $categories = category::withCount('plates')->OrderByDesc('plates_count')->limit(5)->get();
        $categorie = category::all();
        $chefs = chef::all();
        $ValidPlates = plate::where('status', '1')->get();

        // $featuredPlats = plate::withCount('comments')
        //     ->orderByDesc('comments_count')
        //     ->take(5)
        //     ->get();

        // $popularPlats = plate::orderByDesc('reservation_count')
        //     ->take(5)
        //     ->get();

        $latestPlats = plate::orderByDesc('created_at')
            ->take(5)
            ->get();

        $featuredPlats = Plate::withCount('comments')->orderByDesc('comments_count')->take(5)->get();

        $popularPlats = Plate::withCount('reservationPlate')->orderByDesc('reservation_Plate_count')->take(5)->get();


        return view('client.client', compact('ValidPlates', 'categories', 'categorie', 'chefs','latestPlats','featuredPlats','popularPlats'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }
}
