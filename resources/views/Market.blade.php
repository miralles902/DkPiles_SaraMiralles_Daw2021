@extends('layouts.navbar')
@section('title', 'Mercadillo')
@section('content_page')
<h1>Ventas</h1>
<table class="table table-bordered">

        @foreach ($ventasMercadillo as $venta)
        <tr>
            
            <td><img src="/image/{{ $venta->image }}" width="100px"></td>
            <td>{{ $venta->titulo }}</td>
            <td>{{ $venta->precio }} €</td>
            <td><div class="module line-clamp">{!! $venta->detail !!}</div></td>
            <td>
               
     
            <a class="btn btn-info" href="{{ route('mercadilloShow',$venta->id) }}">Leer Más</a>
      
            </td>
        </tr>
        @endforeach
    </table>
@endsection