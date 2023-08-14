@extends('header')
@section('css')
    <link rel="stylesheet" href="{{asset('lib/carrucel/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/carrucel/slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
@endsection
@section('main')
    <div class="diplomas">
        <h3>Certificados de titulacion</h3>
        <div class="slick-carousel">
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
        </div>
    </div>
    <div class="diplomas">
        <h3>Certificados de trabajo</h3>
        <div class="slick-carousel">
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
            <div>
                <img src="{{asset('img/diploma.webp')}}" class="img_diploma">
                <div class="titulo_diploma"><span>Ing. en Sistemas</span></div>
            </div>
        </div>
    </div>
    <div id="cont_agregar">
        <button><img src="{{asset('img/add.svg')}}" id="add"></button>
        <a href="{{route('registrar_titulo')}}" id="titulo" class="close">Titulo</a>
        <a href="{{route('registrar_certificado')}}" id="certificado" class="close">Certificado</a>
    </div>
@endsection
@section('js')
<script src="{{asset('lib/jquery/jquery-3.7.0.min.js')}}"></script>
<script src="{{asset('lib/carrucel/slick.min.js')}}"></script>
<script>
    var elementos=3;
    if(window.innerWidth< 1200){
        elementos=2;
    }
    if(window.innerWidth< 821){
        elementos=1;
    }
    $(document).ready(function(){
      $('.slick-carousel').slick({
        slidesToShow: elementos,
        slidesToScroll: elementos,
        arrows: false,
        dots: true 
      });
    });
</script>
<script>
    const add = document.getElementById('add');
    const titulo = document.getElementById('titulo');
    const certificado = document.getElementById('certificado');
    var option=0;
    add.onclick=function(){
        if(option==0){
            add.classList.add('clicked');
            titulo.classList.add('clicked');
            certificado.classList.add('clicked');
            option=1
            add.classList.remove('close');
            titulo.classList.remove('close');
            certificado.classList.remove('close');
        }else{
            add.classList.add('close');
            titulo.classList.add('close');
            certificado.classList.add('close');
            option=0
            add.classList.remove('clicked');
            titulo.classList.remove('clicked');
            certificado.classList.remove('clicked');
        }
    }
</script>
@endsection