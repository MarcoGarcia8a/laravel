@extends('principal')

@section('contenido')
    <div>
        <div class="font-weight-bold">
            <h2>Datos de los clientes</h2>
        </div>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th class="scope">Código</th>
                    <th class="scope">Nombre</th>
                    <th class="scope">Apellido</th>
                    <th class="scope">Teléfono</th>
                    <th class="scope">Genero</th>
                    <th class="scope">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->clienteId}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->genero}}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <form action="/cliente/{{$cliente->clienteId}}" method="POST">
                                <a href="/cliente/{{$cliente->clienteId}}/edit" role="button" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onClick="return confirm('¿Esta seguro de borrar el cliente?');" class="btn btn-danger">Eliminar</button>                        
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
            <a href="/cliente/create" class="btn btn-primary" role="button">REGISTRAR</a>
        </div>
    </div>
@endsection