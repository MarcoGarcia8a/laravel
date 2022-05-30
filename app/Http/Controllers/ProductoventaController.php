<?php

namespace App\Http\Controllers;

use App\Models\productoventa;
use App\Models\producto;
use App\Models\venta;
use Illuminate\Http\Request;

class ProductoventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productoVentas = productoventa::all();
        return view('productoventa.consulta', ['productoVentas'=>$productoVentas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = producto::all();
        $ventas = venta::all();
        return view('productoventa.alta', ['productos'=>$productos, 'ventas'=>$ventas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoProductoVentas = new productoventa;

        $nuevoProductoVentas -> id = $request->input('id');
        $nuevoProductoVentas -> productoId = $request->productoId;
        $nuevoProductoVentas -> ventaId = $request->ventaId;
        $nuevoProductoVentas -> save();

        return redirect('/productoventa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productoventa  $productoventa
     * @return \Illuminate\Http\Response
     */
    public function show($productoventa)
    {
        /*$producto = producto::findorfail($productoventa);
        $venta = venta::where('productoId', $producto)->get();
        return view('productoventa.consulta', ['producto'=>$producto, 'venta'=>$venta]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productoventa  $productoventa
     * @return \Illuminate\Http\Response
     */
    public function edit($productoventa)
    {
        $editaProductoVenta = productoventa::findorfail($productoventa);
        $ventas = venta::all();
        $productos = producto::all();
        return view('productoventa.modificar', ['productoVenta'=>$editaProductoVenta, 'ventas'=>$ventas, 'productos'=>$productos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productoventa  $productoventa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productoventa)
    {
        $nuevoProductoVentas = productoventa::findorfail($productoventa);
    
        $nuevoProductoVentas -> productoId = $request->productoId;
        $nuevoProductoVentas -> ventaId = $request->ventaId;
        $nuevoProductoVentas -> save();

        return redirect('/productoventa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productoventa  $productoventa
     * @return \Illuminate\Http\Response
     */
    public function destroy($productoventa)
    {
        productoventa::destroy($productoventa);
        return redirect('/productoventa');
    }
}
