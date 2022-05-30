<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use App\Models\marca;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedors = proveedor::all();
        return view('proveedor.consulta', ['proveedors'=>$proveedors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = marca::all();
        return view('proveedor.alta', ['marcas'=>$marcas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoProveedor = new proveedor;

        $nuevoProveedor -> proveedorId = $request->input('proveedorId');
        $nuevoProveedor -> nombre = $request->input('nombre');
        $nuevoProveedor -> apellido = $request->input('apellido');
        $nuevoProveedor -> telefono = $request->input('telefono');
        $nuevoProveedor -> email = $request->input('email');
        $nuevoProveedor -> genero = $request->input('genero');
        $nuevoProveedor -> marcaId = $request->marcaId;

        $nuevoProveedor -> save();

        return redirect('/proveedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($proveedor)
    {
        $editaProveedor = proveedor::findorfail($proveedor);
        $marcas = marca::all();
        return view('proveedor.modificar', ['proveedor'=>$editaProveedor, 'marcas'=>$marcas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $proveedor)
    {
        $nuevoProveedor = proveedor::findorfail($proveedor);

        $nuevoProveedor -> nombre = $request->input('nombre');
        $nuevoProveedor -> apellido = $request->input('apellido');
        $nuevoProveedor -> telefono = $request->input('telefono');
        $nuevoProveedor -> email = $request->input('email');
        $nuevoProveedor -> genero = $request->input('genero');
        $nuevoProveedor -> marcaId = $request->marcaId;

        $nuevoProveedor -> save();

        return redirect('/proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($proveedor)
    {
        proveedor::destroy($proveedor);
        return redirect('/proveedor');
    }
}
