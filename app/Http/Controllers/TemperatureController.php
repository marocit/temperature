<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temperature;
use App\Http\Resources\TemperatureCollection;

class TemperatureController extends Controller
{
    public function getTemperature()
    {
        $temperature = Temperature::first();

        return new TemperatureCollection($temperature);
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'outside' => 'required'
          ]);
    
          Temperature::create($data);
    
          return response('Saved', 200);
    }
}
