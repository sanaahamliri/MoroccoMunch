<?php

namespace App\Http\Controllers;

use App\Models\category;
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
        return view('admin.validate', compact('clients'));
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


    public function showValidPlates(){
        $categories = category::withCount('plates')->OrderByDesc('plates_count')->limit(5)->get();
        
        $ValidPlates = plate::where('status', '1')->get();
        return view('client', compact('ValidPlates','categories'));

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
