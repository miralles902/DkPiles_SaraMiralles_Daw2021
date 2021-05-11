@extends('layouts.navbar')
@section('title', 'Mercadillo')
@section('content_page')
<h1>Ventas</h1>
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
        @foreach ($ventasMercadillo as $venta)
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
@endsection