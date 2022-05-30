<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes/Formulario/Producto</title>
</head>
<body>
    <form>
        <div class="bg-dark fprodu">
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">ID:</label>
                <input id="productoId" name="productoId" type="number" class="form-control bg-dark text-light" 
                    @if(isset($producto))
                        value='{{$producto->productoId}}'
                    @endif
                 />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary  form-lavel">Nombre:</label>
                <input id="nombre" name="nombre" type="text" class="form-control bg-dark text-light" 
                    @if(isset($producto))
                        value='{{$producto->nombre}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary  form-lavel">Medida:</label>
                <input id="medida" name="medida" type="text" class="form-control bg-dark text-light" 
                    @if(isset($producto))
                        value='{{$producto->medida}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary  form-lavel">Precio:</label>
                <input id="precio" name="precio" type="tel" class="form-control bg-dark text-light" 
                    @if(isset($producto))
                        value='{{$producto->precio}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Existencia:</label>
                <input id="existencia" name="existencia" type="number" class="form-control bg-dark text-light" 
                    @if(isset($producto))
                        value='{{$producto->existencia}}'
                    @endif
                />
            </div>
            <div class="mb-3">
            <select class="form-select text-primary bg-dark" aria-label="Marcas de Sports" id="proveedorId" name="proveedorId">
                <option class="text-primary" selected>Selecciona un Proveedor:</option>
                    @foreach ($proveedors as $proveedor)
                    <option  class="bg-dark text-light" value="{{$proveedor->proveedorId}}">{{$proveedor->nombre}}</option>  
                    @endforeach
            </select>          
            </div>
            <a href="/producto" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</body>
</html>