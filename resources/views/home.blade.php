@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--{{ __('You are logged in!') }} -->
                    <a title="users" href="{{ url('/users') }}" target="_self" id="enlaceUsers">Usuarios</a>
                    <a title="users" href="{{ url('/users') }}" target="_self" id="enlaceUsers">Configuración</a>
                    <a title="users" href="{{ url('/users') }}" target="_self" id="enlaceUsers">Mercadillo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
