@extends('ventas.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Administración DKPiles - Mercadillo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ventas.create') }}"> Crear nueva venta</a>
            </div>
        </div>
    </div>
    
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
            <th>Precio / €</th>
            <th>Nombre del vendedor</th>
            <th>Contacto del vendedor</th>
            <th>Detalles</th>
            <th>Action</th>
        </tr>
        @foreach ($ventas as $venta)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $venta->image }}" width="100px"></td>
            <td>{{ $venta->titulo }}</td>
            <td>{{ $venta->autor }}</td>
            <td>{{ $venta->precio }}</td>
            <td>{{ $venta->nombre_vendedor }}</td>
            <td>{{ $venta->contacto_vendedor }}</td>
            <td><div class="module line-clamp">{!! $venta->detail !!}</div></td>
            <td>
                <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('ventas.show',$venta->id) }}">Ver</a>
      
                    <a class="btn btn-primary" href="{{ route('ventas.edit',$venta->id) }}">Editar</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $ventas->links() !!}
    <div class="pull-left">
@if(Auth::user()->tipo_usuario)
    <a class="btn btn-primary" href="{{ url('/homeAdmin') }}">Volver al panel</a>
@else
    <a class="btn btn-primary" href="{{ url('/home') }}">Volver al panel</a>
@endif
</div>
@endsection