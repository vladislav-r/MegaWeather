<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){
        $temperatures = Weather::all()->pluck('temperature');
        $days = Day::all()->pluck('day');
        return view('admin.weather.index', compact('temperatures', 'days'));
    }
}
