@extends('adminlte::page')

@section('title', 'Noticias')

@section('content')
<!DOCTYPE html>
<head>
<!-- Styles -->
<link rel="stylesheet" href="{{ URL::asset('css/textStyle.css') }}">

</head>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('noticias.create') }}"> Crear nueva noticia</a>
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
            <th>Imagen</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Detalles</th>
            <th>Action</th>
        </tr>
        @foreach ($noticias as $noticia)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $noticia->image }}" width="100px"></td>
            <td>{{ $noticia->titulo }}</td>
            <td>{{ $noticia->autor }}</td>
            <td><div class="module line-clamp">{!! $noticia->detail !!}</div></td>
            <td>
                <form action="{{ route('noticias.destroy',$noticia->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('noticias.show',$noticia->id) }}"><i class="fas fa-eye"></i></a>
      
                    <a class="btn btn-primary" href="{{ route('noticias.edit',$noticia->id) }}"><i class="fas fa-pencil-alt"></i></a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $noticias->links() !!}
    <div class="pull-left">
@if(Auth::user()->tipo_usuario)
    <a class="btn btn-primary" href="{{ url('/homeAdmin') }}">Volver al panel</a>
@else
    <a class="btn btn-primary" href="{{ url('/home') }}">Volver al panel</a>
@endif
</div>
</body>
</html>
@endsection