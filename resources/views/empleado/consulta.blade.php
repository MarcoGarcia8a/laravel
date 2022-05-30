@extends('principal')

@section('contenido')
    <div>
        <div class="font-weight-bold">
            <h2>Datos de los empleados</h2>
        </div>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th class="scope">Código</th>
                    <th class="scope">Nombre</th>
                    <th class="scope">Apellido</th>
                    <th class="scope">Teléfono</th>
                    <th class="scope">Fecha de Nacimiento</th>
                    <th class="scope">Genero</th>
                    <th class="scope">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->empleadoId}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->telefono}}</td>
                    <td>{{$empleado->fechaNacimiento}}</td>
                    <td>{{$empleado->genero}}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <form action="/empleado/{{$empleado->empleadoId}}" method="POST">
                                <a href="/empleado/{{$empleado->empleadoId}}/edit" role="button" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onClick="return confirm('¿Esta seguro de borrar el empleado?');" class="btn btn-danger">Eliminar</button>                        
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
            <a href="/empleado/create" class="btn btn-primary" role="button">REGISTRAR</a>
        </div>
    </div>
@endsection