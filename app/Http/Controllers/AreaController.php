<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function showAreas()
    {
        return view('areas');
    }

    public function index(Request $request)
    {
        // Obtener el valor del parámetro de consulta 'idEmpresa'
        $idEmpresa = $request->input('idEmpresa');

        // Realizar una consulta para obtener todas las áreas de la empresa especificada
        $areas = Area::where('empresa_id', $idEmpresa)->get();

        // Verificar si se encontraron áreas para la empresa
        if ($areas->isEmpty()) {
            return response()->json(['message' => 'No se encontraron áreas para la empresa especificada'], 404);
        }

        return response()->json(['message' => 'Áreas de la empresa recuperadas con éxito', 'areas' => $areas], 200);
    }



    public function horariosArea(Request $request)
    {
        // Obtener el valor del parámetro de consulta 'idArea'
        $idArea = $request->input('idArea');

        // Obtener todos los empleados en el área especificada
        $empleados = Empleado::where('area_id', $idArea)->get();

        // Obtener los horarios únicos de los empleados en el área
        $horarios = $empleados->pluck('idHorario')->unique();

        return response()->json(['message' => 'Horarios disponibles para el área recuperados con éxito', 'horarios' => $horarios], 200);
    }

}
