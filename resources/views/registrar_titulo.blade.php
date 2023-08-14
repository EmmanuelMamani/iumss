@extends('header')
@section('css')
<link rel="stylesheet" href="{{asset('css/formulario.css')}}">
@endsection
@section('main')
    <form action="" id="formulario">
        <h3>Registrar titulo</h3>
        <label for="">Fecha:</label>
        <input type="date">
        <label for="">Nota:</label>
        <input type="number">
        <label for="">Certificado</label>
        <label class="custom-file">
            <input type="file" class="custom-file-input">
            <span class="custom-file-label">Subir imagen</span>
        </label>
        <label for="">Archivo:</label>
        <label class="custom-file">
            <input type="file" class="custom-file-input">
            <span class="custom-file-label">Subir archivo</span>
        </label>
        <label for="">Carrera</label>
        <select name="" id="">
            <option value="">Ingenieria en Sistemas</option>
            <option value="">Licenciatura en Matenaticas</option>
        </select>
        <label for="">Nivel de titulacion:</label>
        <select name="" id="">
            <option value="">Licenciatura</option>
            <option value="">Tecnico Superior</option>
        </select>
        <label for="">Modalidad de titulacion</label>
        <select name="" id="">
            <option value="">Adscripcion</option>
            <option value="">Diplomado</option>
            <option value="">Tesis</option>
        </select>
        <div id="botones">
            <a href="{{route('perfil')}}">Cancelar</a>
            <button id="registrar">Registrar</button>
        </div>
    </form>
@endsection
@section('js')
    
@endsection