@extends('usuarios.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Página de administración DK Piles 2.0</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usuarios.create') }}">Crear nuevo usuario</a>
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
            <th>Id Perfil</th>
            <th>Email</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->surname }}</td>
            <td>{{ $usuario->idPerfil }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->user }}</td>
            <td>{{ $usuario->password }}</td>
            <td>
                <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('usuarios.show',$usuario->id) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $usuarios->links() !!}
      
@endsection