<?php

namespace App\Http\Controllers;

use App\Models\chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chefs = chef::all();   
        return view('admin.validateChef', compact('chefs'));
    
    }

    public function ban(chef $chef)
    {
        if (!$chef->status) {
            $chef->update([
                'status' => 1,
            ]);
            return redirect()->back()->with('success', 'user Banned!');
        }else {
            $chef->update([
                'status' => 0,
            ]);
            return redirect()->back()->with('success', 'user Unbanned!');
        }
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
    public function show(chef $chef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chef $chef)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chef $chef)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chef $chef)
    {
        //
    }
}
