<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\plate;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingChefs(){
        $chefs = chef::all();
        $plates = plate::all();
        return view('landingPage.welcome', compact('chefs', 'plates'));
    }
}
