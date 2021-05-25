@extends('layouts.navbar')
@section('title', 'Noticias')
@section('content_page')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-capitalize">
            <h2>{{ $noticiasUsuarios->titulo }} </h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <img src="/image/{{ $noticiasUsuarios->image }}" class="img-fluid">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-justify">
        {!! $noticiasUsuarios->detail !!}
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group text-center text-capitalize">
            <h5><strong>Articulo escrito por: </strong>
                {{ $noticiasUsuarios->autor }}
            </h5>
        </div>
    </div>
</div>
<script src="{{ asset('js/cambiarUrl.js') }}"></script>
@endsection