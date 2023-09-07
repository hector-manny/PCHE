<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use \App\Empleado;

class EmpleadoController extends Controller
{
    public function allEmpleados(){
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    public function store(Request $request, Area $area){

        $request->validate([
            'nombres'=>'required|string',
            'apellidos'=>'required|string',
            'cargo' => 'required|string',
            'correo' => 'required|email|unique:empleados',
            'area' =>  'required|exists:areas,id'
        ]);

        $empleado = Empleado::create([
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'cargo' => $request->input('cargo'),
            'correo' => $request->input('correo'),
            'area_id' => $request->input('area_id')
        ]);

        return response()->json(['message' => 'Empleado creado correctamente', 201]);

    }
}
