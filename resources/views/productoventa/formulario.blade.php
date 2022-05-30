<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes/Formulario/ProductoVenta</title>
</head>
<body>
    <form>
        <div class="bg-dark fPVenta">
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">ID:</label>
                <input id="id" name="id" type="number" class="form-control  bg-dark text-light" 
                    @if(isset($productoVenta))
                        value='{{$productoVenta->id}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <select class="form-select text-primary bg-dark" aria-label="Marcas de Sports" id="productoId" name="productoId">
                    <option class="text-primary" selected>Selecciona un Producto:</option>
                        @foreach ($productos as $producto)
                            <option class="bg-dark text-light"  value="{{$producto->productoId}}">{{$producto->nombre}}</option>  
                        @endforeach
                </select>          
            </div>
            <div class="mb-3">
                <select class="form-select text-primary bg-dark" aria-label="Marcas de Sports" id="ventaId" name="ventaId">
                    <option class="text-primary" selected>Selecciona una venta:</option>
                        @foreach ($ventas as $venta)
                            <option class="bg-dark text-light"  value="{{$venta->ventaId}}">{{$venta->fechaVenta}}</option>  
                        @endforeach
                </select>          
            </div>
            <a href="/productoventa" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</body>
</html>