<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChefProfileRequest;
use App\Http\Requests\UserProfileRequest;
use App\Models\chef;
use App\Models\User;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chefs = chef::all();
        $BlockedChefs = chef::where('status', '1')->count();
        $FreeChefs = chef::where('status', '0')->count();
        return view('admin.validateChef', compact('chefs','FreeChefs','BlockedChefs'));
    }

    public function viewMoreChef(chef $chef)
    {
        return view('client.details',compact('chef'));
    }


    public function ChefInfos(chef $chef)
    {
        return view('chef.profile');
    }


   


   public function UpdateProfile(){
    return view('chef.editProfile');
   }

   public function editProfile(ChefProfileRequest $request,chef $chef)
   {    
        $chef->update($request->validated());  
     return redirect('/profileChef')->with('success', 'your profile updatedwith success');
   }
   public function editUserProfile(UserProfileRequest $request,User $user)
   {    
        $user->update($request->validated());  
     return redirect('/profileChef')->with('success', 'your profile updatedwith success');
   }

    public function ban(chef $chef)
    {
        if (!$chef->status) {
            $chef->update([
                'status' => 1,
            ]);
            return redirect()->back()->with('success', 'user Banned!');
        } else {
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
