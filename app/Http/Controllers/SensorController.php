<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorController extends Controller
{

    public function store(Request $request)
    {
        // Log the incoming data
        \Log::info('Received sensor data: ', $request->all());
    
        // Validate the incoming data
        $request->validate([
            'humidity' => 'required|numeric',
            'temperature' => 'required|numeric',
        ]);
    
        // Store the data in the database
        $sensorData = new SensorData();
        $sensorData->humidity = $request->humidity;
        $sensorData->temperature = $request->temperature;
        $sensorData->save();
    
        // Return a response
        return response()->json(['message' => 'Data saved successfully'], 200);
    }
    
    public function index()
    {
        // Display the latest sensor data
        $sensorData = SensorData::latest()->first();
        return view('sensor.index', compact('sensorData'));
    }

    public function getSensorData()
    {
        $sensorData = SensorData::latest()->first();
        return response()->json($sensorData);
    }

}
