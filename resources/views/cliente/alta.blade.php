@extends('principal')

@section('contenido')
    <div class="font-weight-bold text-bg-titulo">
        <h2>REGISTRO DE CLIENTE</h2>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form action="/cliente" method="POST">
                @csrf
                @include('cliente.formulario')
            </form>
        </div>
    </div>
@endsection