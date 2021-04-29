@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Página de administración DK Piles 2.0</h2>
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
        <th>Contraseña</th>
        <th>Tipo de usuario</th>
        <th width="280px">Acciones</th>
    </tr>
    @foreach ($users as $usuario)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->surname }}</td>
        <td>{{ $usuario->email }}</td>
        <td>{{ $usuario->password }}</td>
        <td>{{ $usuario->tipo_usuario }}</td>
        <td>
            <form action="{{ route('users.destroy',$usuario->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('users.show',$usuario->id) }}">Ver</a>

                <a class="btn btn-primary" href="{{ route('users.edit',$usuario->id) }}">Editar</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $users->links() !!}

<br>
<div class="pull-left">
    <a class="btn btn-primary" href="{{ url('/') }}">Volver a página principal</a>
</div>
@endsection