@extends('adminlte::page')

@section('title', 'Ver Mensajes')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Ver Mensaje de {{ $contact->name }} {{ $contact->surname }}</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $contact->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellidos:</strong>
            {{ $contact->surname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $contact->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Asunto:</strong>
            {{ $contact->asunto }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Volver al panel</a>
            <a class="btn btn-info" href="mailto:{{ $contact->email }}"><i class="fas fa-paper-plane"></i> Responder</a>
        </div>
    </div>
</div>
@endsection