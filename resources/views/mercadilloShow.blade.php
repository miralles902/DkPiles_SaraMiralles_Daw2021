@extends('layouts.navbar')
@section('title', 'Mercadillo')
@section('content_page')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-capitalize">
            <h2>Venta de {{ $ventasMercadillo->titulo }} </h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <img src="/image/{{ $ventasMercadillo->image }}" class="img-fluid">
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    
                    <h5><strong>Precio:</strong>
                        {{ $ventasMercadillo->precio }} €
                    </h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h5><strong>Nombre del Vendedor:</strong>
                        {{ $ventasMercadillo->nombre_vendedor }}
                    </h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h5><strong>Contacto del vendedor:</strong>
                        {{ $ventasMercadillo->contacto_vendedor }}
                    </h5>
                   
                </div>
            </div>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-justify">
        {!! $ventasMercadillo->detail !!}
    </div>

</div>
<script src="{{ asset('js/cambiarUrl.js') }}"></script>
@endsection