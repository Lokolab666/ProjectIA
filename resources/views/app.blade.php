<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .color-container{
            width: 16px;
            height: 16px;
            display: incline-block;
            border-radius: 4px;
        }
        a{
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
            <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Accion uno</a></li>
                    <li><a class="dropdown-item" href="#">Accion dos</a></li>
                    <li><a class="dropdown-item" href="#">Accion tres</a></li>
                </ul>
            </li>
            </ul>
        </div>
        <div class="mx-auto my-2 order-0 order-md-1 position-relative">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Nombre y Apellido
                    <img src="{{ asset('/Image/LogoUser.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/Image/Logo.png') }}" alt="Logo Fundacion" width="160" height="60">
            </a>
        </div>
    </nav>
    @yield('content')
</body>
</html>