<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temperature;
use App\Http\Resources\TemperatureCollection as TempCollect;
use App\Http\Resources\Temp;

class TemperatureController extends Controller
{
    public function getTemperature()
    {
        $temperature = Temperature::first();

        return new Temp($temperature);

        //return $temperature;
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
