<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::all();
        return view('producto.consulta', ['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedors = proveedor::all();
        return view('producto.alta', ['proveedors'=>$proveedors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoProducto = new producto;
        $nuevoProducto -> productoId = $request->input('productoId');
        $nuevoProducto -> nombre = $request->input('nombre');
        $nuevoProducto -> medida = $request->input('medida');
        $nuevoProducto -> precio = $request->input('precio');
        $nuevoProducto -> existencia = $request->input('existencia');
        $nuevoProducto -> proveedorId = $request->proveedorId;
        $nuevoProducto -> save();
        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        $editaProducto = producto::findorfail($producto);
        $proveedors = proveedor::all();        
        return view('producto.modificar', ['producto'=>$editaProducto, 'proveedors'=>$proveedors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $producto)
    {
        $nuevoProducto = producto::findorfail($producto);

        $nuevoProducto -> nombre = $request->input('nombre');
        $nuevoProducto -> medida = $request->input('medida');
        $nuevoProducto -> precio = $request->input('precio');
        $nuevoProducto -> existencia = $request->input('existencia');
        $nuevoProducto -> proveedorId = $request->proveedorId;

        $nuevoProducto -> save();
        
        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($producto)
    {
        producto::destroy($producto);
        return redirect('/producto');
    }
}
