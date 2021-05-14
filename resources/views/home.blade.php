@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fas fa-user-edit"></i>{{ __(' Editor') }}
                    <!-- boton Login -->
                    <div class="pull-right">
                        Hola, {{ Auth::user()->name }}
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    <!-- end boton Login -->
                </div>
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