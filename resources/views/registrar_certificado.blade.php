@extends('header')
@section('css')
<link rel="stylesheet" href="{{asset('css/formulario.css')}}">
@endsection
@section('main')
    <form action="" id="formulario">
        <h3>Registrar Certificado</h3>
        <label for="">Nombre</label>
        <input type="text">
        <label for="">Fecha:</label>
        <input type="date" name="" id="">
        <label for="">Archivo:</label>
        <label class="custom-file">
            <input type="file" class="custom-file-input">
            <span class="custom-file-label">Subir archivo</span>
        </label>
        <label for="">Tipo de certificado:</label>
        <select name="" id="">
            <option value="">Practica profecional</option>
            <option value="">Certificado de trabajo</option>
        </select>
        <div class="cntr">
            <label for="">Validar:</label>
            <input checked="" type="checkbox" id="cbx" class="hidden-xs-up">
            <label for="cbx" class="cbx"></label>
        </div>
        <div id="botones">
            <a href="{{route('perfil')}}">Cancelar</a>
            <button id="registrar">Registrar</button>
        </div>
    </form>
@endsection
@section('js')
    
@endsection