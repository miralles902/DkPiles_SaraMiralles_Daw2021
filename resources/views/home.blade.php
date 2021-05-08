@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de administración del Editor') }}</div>
                <div class="text-center">
                    <br>
                    <a title="users" class="btn btn-info" href="{{ url('/contacts') }}" target="_self" id="enlaceContacto">Mensajes de Contacto</a>
                    <a title="users" class="btn btn-info" href="{{ url('/ventas') }}" target="_self" id="enlaceMercadillo">Mercadillo</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
</div>
@endsection