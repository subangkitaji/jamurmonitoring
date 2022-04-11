<?php

namespace App\Http\Controllers;
use App\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function create(Request $request)
    {
        $sensor = new Sensor();
        $sensor->suhu = $request->input('suhu'); 
        $sensor->kelembapan = $request->input('kelembapan');   
        $sensor->panen = $request->input('panen');          
        $sensor->save();
        return response()->json($sensor);

    }
}
