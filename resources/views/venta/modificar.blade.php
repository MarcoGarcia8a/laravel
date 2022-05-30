@extends('principal')

@section('contenido')
    <div class="font-weight-bold text-bg-titulo">
        <h2>MODIFICAR REGISTRO</h2>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form action="/venta/{{$venta->ventaId}}" method="POST">
                @csrf
                @method('PUT')
                @include('venta.formulario')
            </form>
        </div>
    </div>
@endsection