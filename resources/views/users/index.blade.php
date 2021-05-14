@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Administración DKPiles - Usuarios</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">Crear nuevo usuario</a>
        </div>

    </div>
</div>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        
        <th>Tipo de usuario</th>
        <th>Acciones</th>
    </tr>
    @foreach ($users as $usuario)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->surname }}</td>
        <td>{{ $usuario->email }}</td>

        <td>@if (($usuario->tipo_usuario) === 1)
            Administrador
            @elseif (($usuario->tipo_usuario) === 0)
            Editor
            @endif</td>
        <td>
            <form action="{{ route('users.destroy',$usuario->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('users.show',$usuario->id) }}" alt="ver"><i class="fas fa-eye"></i></a>

                <a class="btn btn-primary" href="{{ route('users.edit',$usuario->id) }}" alt="editar"><i class="fas fa-user-edit"></i></a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger" alt="borrar"><i class="fas fa-user-times"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $users->links() !!}

<br>
<div class="pull-left">
@if(Auth::user()->tipo_usuario)
    <a class="btn btn-primary" href="{{ url('/homeAdmin') }}">Volver al panel</a>
@else
    <a class="btn btn-primary" href="{{ url('/home') }}">Volver al panel</a>
@endif
</div>
@endsection