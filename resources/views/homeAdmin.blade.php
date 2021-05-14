@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="fas fa-crown"></i>{{ __(' Administrador') }}</h1>
@stop

@section('content')
    <p>Bienvenido al panel de administración de DKPiles</p>

    <a title="users" class="btn btn-info" href="{{ url('/users') }}" target="_self" id="enlaceUsers">Usuarios</a>
    <a title="users" class="btn btn-info" href="{{ url('/configs') }}" target="_self" id="enlaceConfig">Configuración</a>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
