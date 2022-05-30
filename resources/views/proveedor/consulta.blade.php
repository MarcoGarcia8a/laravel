@extends('principal')

@section('contenido')
    <div>
        <div class="font-weight-bold">
            <h2>Datos de los proveedores</h2>
        </div>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th class="scope">Código</th>
                    <th class="scope">Nombre</th>
                    <th class="scope">Apellido</th>
                    <th class="scope">Teléfono</th>
                    <th class="scope">Email</th>
                    <th class="scope">Genero</th>
                    <th class="scope">Marca</th>
                    <th class="scope">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedors as $proveedor)
                <tr>
                    <td>{{$proveedor->proveedorId}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->apellido}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->email}}</td>
                    <td>{{$proveedor->genero}}</td>
                    <td>{{$proveedor->marcas->nombre}}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <form action="/proveedor/{{$proveedor->proveedorId}}" method="POST">
                                <a href="/proveedor/{{$proveedor->proveedorId}}/edit" role="button" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onClick="return confirm('¿Esta seguro de borrar el proveedor?');" class="btn btn-danger">Eliminar</button>                        
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
            <a href="/proveedor/create" class="btn btn-primary" role="button">REGISTRAR</a>
        </div>
    </div>
@endsection