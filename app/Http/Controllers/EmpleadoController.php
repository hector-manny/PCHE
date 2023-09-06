<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Empleado;

class EmpleadoController extends Controller
{
    public function allEmpleados(){
        $empleados = Empleado::all();
        return response()->json($empleados);
    }
}
