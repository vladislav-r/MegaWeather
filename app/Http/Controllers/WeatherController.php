<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){
        $temperatures = Weather::all()->pluck('temperature');
        $days = Day::all()->pluck('day');
        return view('weather', compact('temperatures', 'days'));
    }
}
