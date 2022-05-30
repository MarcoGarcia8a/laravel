<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes/Formulario/Empleado</title>
</head>
<body>
    <form>
        <div class="bg-dark fempl">
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">ID:</label>
                <input id="empleadoId" name="empleadoId" type="number" class="form-control bg-dark text-light" 
                    @if(isset($empleado))
                        value='{{$empleado->empleadoId}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Nombre:</label>
                <input id="nombre" name="nombre" type="text" class="form-control bg-dark text-light" 
                    @if(isset($empleado))
                        value='{{$empleado->nombre}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Apellido:</label>
                <input id="apellido" name="apellido" type="text" class="form-control bg-dark text-light" 
                    @if(isset($empleado))
                        value='{{$empleado->apellido}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Teléfono:</label>
                <input id="telefono" name="telefono" type="tel" class="form-control bg-dark text-light" 
                    @if(isset($empleado))
                        value='{{$empleado->telefono}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Fecha de Nacimiento:</label>
                <input id="fechaNacimiento" name="fechaNacimiento" type="date" class="form-control bg-dark text-light" 
                    @if(isset($empleado))
                        value='{{$empleado->fechaNacimiento}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="text-primary form-lavel">Genero:</label>
                <input id="genero" name="genero" type="text" class="form-control bg-dark text-light" 
                    @if(isset($empleado))
                        value='{{$empleado->genero}}'
                    @endif
                />
            </div>
            <a href="/empleado" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</body>
</html>