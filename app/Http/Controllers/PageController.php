<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {

        $today = Carbon::now(); 
        
        
        $trains = Train::whereDate('departure_time', '=', $today)->get();
        return view ('home', compact('trains'));
    }
}
