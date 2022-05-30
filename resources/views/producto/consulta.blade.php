@extends('principal')

@section('contenido')   
    <div>
        <div class="font-weight-bold">
            <h2>Datos de los productos</h2>
        </div>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th class="scope">Código</th>
                    <th class="scope">Nombre</th>
                    <th class="scope">Medida</th>
                    <th class="scope">Precio</th>
                    <th class="scope">Existencia</th>
                    <th class="scope">Proveedor</th>
                    <th class="scope">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->productoId}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->medida}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->existencia}}</td>
                    <td>{{$producto->proveedors->nombre}}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <form action="/producto/{{$producto->productoId}}" method="POST">
                                <a href="/producto/{{$producto->productoId}}/edit" role="button" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onClick="return confirm('¿Esta seguro de borrar el producto?');" class="btn btn-danger">Eliminar</button>                        
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
            <a href="/producto/create" class="btn btn-primary" role="button">REGISTRAR</a>
        </div>
    </div>
@endsection