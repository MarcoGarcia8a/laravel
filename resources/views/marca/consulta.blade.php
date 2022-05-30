@extends('principal')

@section('contenido')
    <div>
        <div class="font-weight-bold">
            <h2>Datos de las marcas</h2>
        </div>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th class="scope">Código</th>
                    <th class="scope">Nombre</th>
                    <th class="scope">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marcas as $marca)
                <tr>
                    <td>{{$marca->marcaId}}</td>
                    <td>{{$marca->nombre}}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <form action="/marca/{{$marca->marcaId}}" method="POST">
                                <a href="/marca/{{$marca->marcaId}}/edit" role="button" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onClick="return confirm('¿Esta seguro de borrar la marca?');" class="btn btn-danger">Eliminar</button>                        
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
            <a href="/marca/create" class="btn btn-primary" role="button">REGISTRAR</a>
        </div>
    </div>
@endsection