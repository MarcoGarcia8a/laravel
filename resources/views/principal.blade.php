<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Deportes</title>
    <script src="/js/bootstrap.bundle.min.js" refer></script>
</head>
<body>
    <header>

    </header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Deportes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/producto">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/marca">Marcas de ropa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/cliente">Clientes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Personal
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/empleado">Empleados</a></li>
                            <li><a class="dropdown-item" href="/proveedor">Proveedores</a></li>
                            <li><a class="dropdown-item" href="/venta">Ventas</a></li>
                            <li><a class="dropdown-item" href="/productoventa">Productos por venta</li><a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            @yield('contenido')
        </div>
    </main>
    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#" role="button">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#" role="button">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#" role="button">
                    <i class="fab fa-github"></i>
                </a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgb(0, 0, 0);">
            © 2022 Copyright
            <a class="text-white" href="#"></a>
        </div>
    </footer>
</body>
</html>