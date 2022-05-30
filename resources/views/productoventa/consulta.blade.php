@extends('principal')

@section('contenido')
    <div>
        <div class="font-weight-bold">
            <h2>Datos de los productos en las ventas</h2>
        </div>   
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th class="scope">ID</th>
                    <th class="scope">Producto ID</th>
                    <th class="scope">Venta ID</th>
                    <th class="scope">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productoVentas as $productoVenta)
                    <tr>
                        <td>{{$productoVenta->id}}</td>
                        <td>{{$productoVenta->productoId}}</td>
                        <td>{{$productoVenta->ventaId}}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <form action="/productoventa/{{$productoVenta->id}}" method="POST">
                                    <a href="/productoventa/{{$productoVenta->id}}/edit" role="button" class="btn btn-info">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onClick="return confirm('¿Esta seguro de borrar esta relación?');" class="btn btn-danger">Eliminar</button>                        
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
            <a href="/productoventa/create" class="btn btn-primary" role="button">REGISTRAR</a>
        </div>
    </div>
@endsection