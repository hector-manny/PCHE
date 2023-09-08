<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'AuthController@showLoginForm')->name('login');
Route::post('login', 'AuthController@login')->name('ingresar');
Route::get('logout', 'AuthController@logout')->name('salir');

// Ruta de registro
Route::get('registroTemp', 'AuthController@showRegistrationForm')->name('register');
Route::post('registrarse', 'AuthController@register')->name('registrarse');

//Rutas para empresa
Route::post('empresa', 'EmpresaController@create')->name('createdata');
Route::get('empresas', 'EmpresaController@allempresas')->name('empresas');;

//Rutas para area
Route::get('areas', 'AreaController@index')->name('areas');
Route::get('horarios/area', 'AreaController@horariosArea')->name('areasbyempresa');

//Route::get('dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

//Rutas para empleado
Route::get('empleados', 'EmpleadoController@allempleados')->name('empleados');
Route::post('empleados/save', 'EmpleadoController@store')->name('empleados_save');
Route::get('empleados/eliminar/{id}','EmpleadoController@eliminarEmpleados')->name('empleadosEliminar');
Route::get('empleados/busqueda/{nombre}','EmpleadoController@empleadosBusquedaNombre')->name('empleadosBusqueda');
Route::get('empleados/actualizar', 'EmpleadoController@actualizarEmpleados')->name('empleadosActualizar');
Route::get('empleados/crear','EmpleadoController@crearEmpleado')->name('empleadoCrear');


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
