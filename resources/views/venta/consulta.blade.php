@extends('principal')

@section('contenido')
    <div>
        <div class="font-weight-bold">
            <h2>Datos de las ventas</h2>
        </div>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th class="scope">Código</th>
                    <th class="scope">Fecha de Venta</th>
                    <th class="scope">Total de venta</th>
                    <th class="scope">Cantidad</th>
                    <th class="scope">Empleado</th>
                    <th class="scope">Cliente</th>
                    <th class="scope">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                <tr>
                    <td>{{$venta->ventaId}}</td>
                    <td>{{$venta->fechaVenta}}</td>
                    <td>{{$venta->totalVenta}}</td>
                    <td>{{$venta->cantidad}}</td>
                    <td>{{$venta->empleados->nombre}}</td>
                    <td>{{$venta->clientes->nombre}}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">                            
                            <form action="/venta/{{$venta->ventaId}}" method="POST">
                                <a href="/venta/{{$venta->ventaId}}/edit" role="button" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onClick="return confirm('¿Esta seguro de borrar la venta?');" class="btn btn-danger">Eliminar</button>                        
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container px-4 overflow-hidden">
        <div class="row gy-5">
            <a href="/venta/create" class="btn btn-primary" role="button">REGISTRAR</a>
        </div>
    </div>
@endsection