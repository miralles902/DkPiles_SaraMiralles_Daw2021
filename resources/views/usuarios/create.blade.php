@extends('usuarios.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Añade un nuevo usuario</h2>
        </div>
        <div class="pull-right">
           <a class="btn btn-primary" href="{{ url('usuarios') }}">Atrás</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Hay algún problema con el contenido insertado.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellidos:</strong>
                <input type="text" name="surname" class="form-control" placeholder="Apellidos">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <div class="form-group">
                <strong>id Perfil:</strong>
                <select name="idPerfil" id="idPerfil" form="idPerfil">
                echo Form::select('2', array('L' => 'Large', 'S' => 'Small'), 'S');
                </select>
                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                    <li><a href="{{$category->id}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div> 
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Usuario:</strong>
                <input type="text" name="user" class="form-control" placeholder="Usuario">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contraseña:</strong>
                <input type="text" name="password" class="form-control" placeholder="Contraseña">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="reset" class="btn btn-danger">Borra los datos</button>
                <button type="submit" class="btn btn-primary">Añade</button>
        </div>
        
    </div>
   
</form>
@endsection