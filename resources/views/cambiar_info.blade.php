@extends('header')
@section('css')
    <link rel="stylesheet" href="{{asset('css/formulario.css')}}">
@endsection
@section('main')
    <form action="" id="formulario">
        <h3>Cambie su información</h3>
        <label for="">Celular:</label>
        <input type="number">
        <label for="">Foto de perfil:</label>
        <label class="custom-file">
            <input type="file" class="custom-file-input">
            <span class="custom-file-label">Subir imagen</span>
        </label>
        <button id="guardar">Guardar</button>
    </form>
@endsection
@section('js')
@endsection