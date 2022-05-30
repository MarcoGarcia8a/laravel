<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::all();
        return view('cliente.consulta', ['clientes'=>$clientes]); //Muestra los valores de la tabla como SELECT * FROM
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.alta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoCliente = new cliente;
        $nuevoCliente -> clienteId = $request->input('clienteId');
        $nuevoCliente -> nombre = $request->input('nombre');
        $nuevoCliente -> apellido = $request->input('apellido');
        $nuevoCliente -> telefono = $request->input('telefono');
        $nuevoCliente -> genero = $request->input('genero');
        $nuevoCliente -> save();
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente)
    {
        $editaCliente = cliente::findorfail($cliente);
        return view('cliente.modificar', ['cliente'=>$editaCliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cliente)
    {
        $nuevoCliente = cliente::findorfail($cliente);
        $nuevoCliente -> nombre = $request->input('nombre');
        $nuevoCliente -> apellido = $request->input('apellido');
        $nuevoCliente -> telefono = $request->input('telefono');
        $nuevoCliente -> genero = $request->input('genero');
        $nuevoCliente -> save();
        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente)
    {
        cliente::destroy($cliente);
        return redirect('/cliente');
    }
}
