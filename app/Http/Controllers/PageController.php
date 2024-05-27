<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {

        // $today = Carbon::now(); usa today per ottenere la Date del giorno corrente
        
        $trains = Train::whereDate('departure_time', '=', '2024-05-24')->get();
        return view ('home', compact('trains'));
    }
}
