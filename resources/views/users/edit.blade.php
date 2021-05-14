@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar datos de {{ $user->name }} {{ $user->surname }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('users') }}">Atrás</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('users.update',$user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellidos:</strong>
                <input type="text" name="surname" class="form-control" value="{{ $user->surname }}">
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de usuario:</strong>
                <select class="form-control" name="tipo_usuario">
                    <option value="1"{{ $user->tipo_usuario == 1 ? 'selected' : ''}}>Administrador</option>
                    <option value="0"{{ $user->tipo_usuario == 0 ? 'selected' : '' }}>Editor</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contraseña:</strong>
                <input type="text" name="password" class="form-control" value="{{ $user->password }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Añade</button>
            <button type="reset" class="btn btn-primary">Borra los datos</button>
        </div>
    </div>
</form>
@endsection