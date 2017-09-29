<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temperature;

class TemperatureController extends Controller
{
    public function getTemperature()
    {
        $temperature = Temperature::first();

        return new TemperatureCollection($temperature);
    }
}
