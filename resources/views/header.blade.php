<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/header_est.css')}}">
    @yield('css')
    <title>iumss</title>
</head>
<body>
    <div id="contenido">
        <div id="info">
            <header>
                <img src="{{asset('img/menu.svg')}}" id="menu">
                <img src="{{asset('img/campana.svg')}}" id="campana">
            </header>
            <div id="contenedor_foto">
                <img src="{{asset('img/perfil.jpg')}}" id="img_perfil">
                <button id="cambiar_info">Cambiar info.</button>
            </div>
            <h2 class="text-2xl">Juan Perez Perez</h2>
            <h3 class="text-xs font-light">201900400@est.umss.edu</h3>
            <div id="info_per">
                <h3>Informacion personal</h3>
                <div class="datos_personales">
                    <img src="{{asset('img/celular.svg')}}" alt="">
                    <span class="titulo_dato">Celular:</span>
                    <span class="info_dato">79793177</span>
                </div>
                <div class="datos_personales">
                    <img src="{{asset('img/ci.svg')}}" alt="">
                    <span class="titulo_dato">CI:</span>
                    <span class="info_dato">13752575</span>
                </div>
                <div class="datos_personales">
                    <img src="{{asset('img/universidad.svg')}}" alt="">
                    <span class="titulo_dato">CodSis:</span>
                    <span class="info_dato">201900400</span>
                </div>
            </div>
        </div>
        <div id="main">
            @yield('main')
        </div>
        @yield('js')
    </div>
</body>
</html>