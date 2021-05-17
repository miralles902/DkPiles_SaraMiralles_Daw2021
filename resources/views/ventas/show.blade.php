@extends('adminlte::page')

@section('title', 'Ver Venta')
   
@section('content')
<!DOCTYPE html>

<head>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/textStyle.css') }}">

</head>

<body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Venta</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Volver al panel</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $venta->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autor:</strong>
                {{ $venta->autor }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                {{ $venta->precio }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del Vendedor:</strong>
                {{ $venta->nombre_vendedor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contacto del vendedor:</strong>
                {{ $venta->contacto_vendedor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <img src="/image/{{ $venta->image }}"  class="img-fluid">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group img_resize">
                <strong>Detalles:</strong>
                {!! $venta->detail !!}
            </div>
        </div>
        
    </div>
    </body>
</html>
@endsection