@extends('principal')

@section('contenido')
    <div class="font-weight-bold text-bg-titulo">
        <h2>MODIFICAR PRODUCTO DE VENTA</h2>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form action="/productoventa/{{$productoVenta->id}}" method="POST">
                @csrf
                @method('PUT')
                @include('productoventa.formulario')
            </form>
        </div>
    </div>
@endsection