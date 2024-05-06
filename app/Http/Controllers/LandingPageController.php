<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\plate;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingChefs(){
        $chefs = chef::paginate(3);
        $plates = plate::paginate(3);
        return view('landingPage.welcome', compact('chefs', 'plates'));
    }


    public function landingChefs_Team(){
        $team = chef::all();
        return view('landingPage.team', compact('team'));
    }
}
