<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes/Formulario/Ventas</title>
</head>
<body>
    <form>
        <div class="bg-dark fventa">
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">ID:</label>
                <input id="ventaId" name="ventaId" type="number" class="form-control  bg-dark text-light" 
                    @if(isset($venta))
                        value='{{$venta->ventaId}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">Fecha Venta:</label>
                <input id="fechaVenta" name="fechaVenta" type="date" class="form-control  bg-dark text-light" 
                    @if(isset($venta))
                        value='{{$venta->fechaVenta}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">Total  de venta:</label>
                <input id="totalVenta" name="totalVenta" type="number" class="form-control  bg-dark text-light" 
                    @if(isset($venta))
                        value='{{$venta->totalVenta}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">Cantidad:</label>
                <input id="cantidad" name="cantidad" type="number" class="form-control  bg-dark text-light" 
                    @if(isset($venta))
                        value='{{$venta->cantidad}}'
                    @endif
                />
            </div>
            <div class="mb-3">
            <select class="form-select text-primary bg-dark" aria-label="Marcas de Sports" id="empleadoId" name="empleadoId">
                <option class="text-primary" selected>Selecciona un Empleado:</option>
                    @foreach ($empleados as $empleado)
                        <option class="bg-dark text-light"  value="{{$empleado->empleadoId}}">{{$empleado->nombre}}</option>  
                    @endforeach
            </select>          
            </div>
            <div class="mb-3">
            <select class="form-select text-primary bg-dark" aria-label="Marcas de Sports" id="clienteId" name="clienteId">
                <option class="text-primary" selected>Selecciona un Cliente:</option>
                    @foreach ($clientes as $cliente)
                        <option class="bg-dark text-light"  value="{{$cliente->clienteId}}">{{$cliente->nombre}}</option>  
                    @endforeach
            </select>          
        </div>
            <a href="/venta" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</body>
</html>