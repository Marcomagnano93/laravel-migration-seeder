<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {

        // $today = Carbon::now();
        
        $trains = Train::where('departure_time', '<', '2024-05-25 00:00:00')->get();
        return view ('home', compact('trains'));
    }
}
