<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = empleado::all();
        return view('empleado.consulta', ['empleados'=>$empleados]); //Muestra los valores de la tabla como SELECT * FROM
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.alta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoEmpleado = new empleado;
        $nuevoEmpleado -> empleadoId = $request->input('empleadoId');
        $nuevoEmpleado -> nombre = $request->input('nombre');
        $nuevoEmpleado -> apellido = $request->input('apellido');
        $nuevoEmpleado -> telefono = $request->input('telefono');
        $nuevoEmpleado -> fechaNacimiento = $request->input('fechaNacimiento');
        $nuevoEmpleado -> genero = $request->input('genero');
        $nuevoEmpleado -> save();
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($empleado)
    {
        $editaEmpleado = empleado::findorfail($empleado);
        return view('empleado.modificar', ['empleado'=>$editaEmpleado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $empleado)
    {
        $nuevoEmpleado = empleado::findorfail($empleado);
        $nuevoEmpleado -> nombre = $request->input('nombre');
        $nuevoEmpleado -> apellido = $request->input('apellido');
        $nuevoEmpleado -> telefono = $request->input('telefono');
        $nuevoEmpleado -> fechaNacimiento = $request->input('fechaNacimiento');
        $nuevoEmpleado -> genero = $request->input('genero');
        $nuevoEmpleado -> save();
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($empleado)
    {
        empleado::destroy($empleado);
        return redirect('/empleado');
    }
}
