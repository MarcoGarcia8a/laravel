<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes/Formulario/Cliente</title>
</head>
<body>
    <form>
        <div class="bg-dark fcliente">
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">ID:</label>
                <input id="clienteId" name="clienteId" type="number" class="form-control bg-dark text-light" 
                    @if(isset($cliente))
                        value='{{$cliente->clienteId}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Nombre:</label>
                <input id="nombre" name="nombre" type="text" class="form-control bg-dark text-light" 
                    @if(isset($cliente))
                        value='{{$cliente->nombre}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Apellido:</label>
                <input id="apellido" name="apellido" type="text" class="form-control bg-dark text-light" 
                    @if(isset($cliente))
                        value='{{$cliente->apellido}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Teléfono:</label>
                <input id="telefono" name="telefono" type="number" class="form-control bg-dark text-light" 
                    @if(isset($cliente))
                     value='{{$cliente->telefono}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Genero:</label>
                <input id="genero" name="genero" type="text" class="form-control bg-dark text-light" 
                    @if(isset($cliente))
                        value='{{$cliente->genero}}'
                    @endif
                />
            </div>
            <a href="/cliente" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
    <div>
    </div>
</body>
</html>