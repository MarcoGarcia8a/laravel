<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes/Formulario/Marca</title>
</head>
<body>
    <form>
        <div class="bg-dark fmarca">
            <div class="mb-3">
                <label for="" class="form-lavel text-primary ">ID:</label>
                <input id="marcaId" name="marcaId" type="number" class="form-control bg-dark text-light" 
                    @if(isset($marca))
                        value='{{$marca->marcaId}}'
                    @endif
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-lavel text-primary ">Nombre:</label>
                <input id="nombre" name="nombre" type="text" class="form-control bg-dark text-light" 
                    @if(isset($marca))
                        value='{{$marca->nombre}}'
                    @endif
                />
        </div>
            <a href="/marca" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</body>
</html>