<?php

namespace App\Http\Controllers;

use App\Models\venta;
use App\Models\empleado;
use App\Models\cliente;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = venta::all();
        return view('venta.consulta', ['ventas'=>$ventas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = empleado::all();
        $clientes = cliente::all();
        return view('venta.alta', ['empleados'=>$empleados, 'clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevaVenta = new venta;

        $nuevaVenta -> ventaId = $request->input('ventaId');
        $nuevaVenta -> fechaVenta = $request->input('fechaVenta');
        $nuevaVenta -> totalVenta = $request->input('totalVenta');
        $nuevaVenta -> cantidad = $request->input('cantidad');
        $nuevaVenta -> empleadoId = $request->empleadoId;
        $nuevaVenta -> clienteId = $request->clienteId;

        $nuevaVenta -> save();
        
        return redirect('/venta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit($venta)
    {
        $editaVenta = venta::findorfail($venta);
        $empleados = empleado::all();
        $clientes = cliente::all();
        return view('venta.modificar', ['venta'=>$editaVenta, 'empleados'=>$empleados, 'clientes'=>$clientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $venta)
    {
        $nuevaVenta = venta::findorfail($venta);

        $nuevaVenta -> fechaVenta = $request->input('fechaVenta');
        $nuevaVenta -> totalVenta = $request->input('totalVenta');
        $nuevaVenta -> cantidad = $request->input('cantidad');
        $nuevaVenta -> empleadoId = $request->empleadoId;
        $nuevaVenta -> clienteId = $request->clienteId;

        $nuevaVenta -> save();

        return redirect('/venta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy($venta)
    {
        venta::destroy($venta);
        return redirect('/venta');
    }
}
