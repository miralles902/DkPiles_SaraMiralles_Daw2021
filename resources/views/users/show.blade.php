@extends('adminlte::page')

@section('title', 'Ver Usuario')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ver datos de {{ $user->name }} {{ $user->surname }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('users') }}">Atrás</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellidos:</strong>
            {{ $user->surname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>tipo de usuario:</strong>
            @if (($user->tipo_usuario) === 1)
            Administrador
            @elseif (($user->tipo_usuario) === 0)
            Editor
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Creado el dia:</strong>
            {{ $user->created_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Actualizado el dia:</strong>
            @if ($user->updated_at == $user->created_at)
            No se ha actualizado este usuario
            @else
            {{ $user->updated_at }}
            @endif  
        </div>
    </div>
</div>
@endsection