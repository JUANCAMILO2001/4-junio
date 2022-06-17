<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .collapsible-body{
            padding: 0rem !important;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s3">
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header">Productos</div>
                    <div class="collapsible-body">
                        <div class="collection">
                            <a href="{{route('products.index')}}" class="collection-item">Listar</a>
                            <a href="#!" class="collection-item">Filtrar</a>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Proveedores</div>
                    <div class="collapsible-body">
                        <div class="collection">
                            <a href="{{route('providers.index')}}" class="collection-item">Listar</a>
                            <a href="#!" class="collection-item">Filtrar</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Opciones</div>
                    <div class="collapsible-body">
                        <div class="collection">
                            <a onclick="document.getElementById('cerrar').submit()" class="collection-item">Cerrar Sesion</a>
                        </div>
                        <form action="{{route('logout')}}" method="post" id="cerrar">
                            @csrf

                        </form>
                    </div>
                </li>

            </ul>

        </div>
        <div class="col s9">
            @yield('content')

        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
</body>
</html>
