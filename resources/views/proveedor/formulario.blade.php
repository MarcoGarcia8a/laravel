<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes/Formulario/Proveedor</title>
</head>
<body>
    <form>
        <div class="bg-dark fprovee">
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">ID:</label>
                <input id="proveedorId" name="proveedorId" type="number" class="form-control bg-dark text-light" 
                    @if(isset($proveedor))
                        value='{{$proveedor->proveedorId}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">Nombre:</label>
                <input id="nombre" name="nombre" type="text" class="form-control bg-dark text-light" 
                    @if(isset($proveedor))
                        value='{{$proveedor->nombre}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">Apellido:</label>
                <input id="apellido" name="apellido" type="text" class="form-control bg-dark text-light" 
                    @if(isset($proveedor))
                        value='{{$proveedor->apellido}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">Teléfono:</label>
                <input id="telefono" name="telefono" type="tel" class="form-control bg-dark text-light" 
                    @if(isset($proveedor))
                        value='{{$proveedor->telefono}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">Email:</label>
                <input id="email" name="email" type="text" class="form-control bg-dark text-light" 
                    @if(isset($proveedor))
                        value='{{$proveedor->email}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary">Genero:</label>
                <input id="genero" name="genero" type="text" class="form-control bg-dark text-light" 
                    @if(isset($proveedor))
                        value='{{$proveedor->genero}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <select class="form-select text-primary bg-dark" aria-label="Marcas de Sports" id="marcaId" name="marcaId">
                <option selected>Selecciona una Marca:</option>
                    @foreach ($marcas as $marca)
                    <option class="bg-dark text-light" value="{{$marca->marcaId}}">{{$marca->nombre}}</option>  
                    @endforeach
                </select>          
            </div>
                <a href="/proveedor" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</body>
</html>