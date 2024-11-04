<?php

namespace App\Http\Controllers;

use App\Models\OurStrongest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home(){
        
        // Fetch all records from the OurStrongest model
        $services = OurStrongest::all();

        // Return the view and pass the services data
        return view('home', compact('services'));
    }
}
