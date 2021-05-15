@extends('layouts.navbar')
@section('title', 'Noticias')
@section('content_page')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $noticiasUsuarios->titulo }} </h2>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autor:</strong>
                {{ $noticiasUsuarios->autor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <img src="/image/{{ $noticiasUsuarios->image }}" width="500px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalles:</strong>
                {!! $noticiasUsuarios->detail !!}
            </div>
        </div>
        
    </div>
@endsection