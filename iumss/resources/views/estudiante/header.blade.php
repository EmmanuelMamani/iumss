<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/header_est.css')}}">
    @yield('css')
    <title>iumss</title>
</head>
<body>
    <div id="contenido">
        <div id="info">
            <header>
                <img src="{{asset('img/campana.svg')}}" id="menu">
                <img src="{{asset('img/campana.svg')}}" id="campana">
            </header>
            <img src="{{asset('img/perfil.jpg')}}" id="img_perfil">
            <button id="cambiar_info">Cambiar info.</button>
            <h2>Juan Perez Perez</h2>
            <h3>201900400@est.umss.edu</h3>
            <span class="titulo">Informacion personal</span>
        </div>
        <div id="main">
            @yield('main')
        </div>
        @yield('js')
    </div>
</body>
</html>