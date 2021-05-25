@extends('layouts.navbar')
@section('title', 'Mercadillo')
@section('content_page')
<h2>Mercadillo</h2>
@foreach ($ventasMercadillo as $venta)
<div class="row  justify-content-center">
    <div class="col-md-2">
        <img src="/image/{{ $venta->image }}" class="img-fluid">
    </div>
    <div class="col-md-4 text-center">
        <h3>{{ $venta->titulo }}</h3>
        <div class="module line-clamp">{!! $venta->detail !!}</div>
    </div>
    <div class="col-md-2  text-center">
    <p><strong>Precio: </strong>{{ $venta->precio }} €</p>
    </div>
    <div class="col-md-4 text-center">
        <a class="btn btn-dark" href="{{ route('mercadilloShow',$venta->id) }}"><i class="fas fa-shopping-basket"></i> Detalles</a>
    </div>
</div>
<hr>
@endforeach
{!! $ventasMercadillo->links() !!}

@endsection