@extends('adminlte::page')

@section('title', 'Ver Noticia')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Noticia</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('noticias.index') }}"> Volver al panel</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $noticia->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autor:</strong>
                {{ $noticia->autor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <img src="/image/{{ $noticia->image }}"  class="img-fluid">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group img_resize">
                <strong>Detalles:</strong>
                {!! $noticia->detail !!}
            </div>
        </div>
        
    </div>
@endsection