@extends('principal')

@section('contenido')
    <div class="font-weight-bold text-bg-titulo">
        <h2>REGISTRO DE PRODUCTO</h2>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form action="/producto" method="POST">
                @csrf
                @include('producto.formulario')
            </form>
        </div>
    </div>
@endsection