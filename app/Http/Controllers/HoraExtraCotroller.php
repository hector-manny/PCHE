<?php

namespace App\Http\Controllers;

use App\HoraExtra;
use Illuminate\Http\Request;

class HoraExtraCotroller extends Controller
{
    public function createHoraExtra(Request $request){

        $hora_extra = new HoraExtra([
            'id_empleado' => $request->input('id_empleado'),
            'lunes' => $request->input('lunes'),
            'martes' => $request->input('martes'),
            'miercoles' => $request->input('miercoles'),
            'jueves' => $request->input('jueves'),
            'viernes' => $request->input('viernes'),
            'sabado' => $request->input('sabado'),
            'domingo' => $request->input('domingo'),
            'total' => $request->input('total'),
        ]);

        $hora_extra ->save();
        return response()->json(["message" => 'Horas extra agregado con exito'], 201);
    }

    public function allHoras(){
        $horas = HoraExtra::all();
        return response()->json($horas);
    }
}
