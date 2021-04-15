@extends('configuracion.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Configura tus páginas</h2>
        </div>
        <h1>Administración DKPiles - Configuración del menú</h1>
        <div class="col-lg-11">
        <a class="btn btn-primary" href="{{ url('usuarios') }}">Atras</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Menú</th>
            <th width="280px">Accion</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @if(!empty($menu) && $menus->count())
        @foreach ($menus as $menu)
            <tr>
                <td>{{ $menu->opcion }}</td>
                <td>
                    <form action="" method="POST">
                        <a class="btn btn-info" href="{{ route('empresa.show',$empresa->id) }}">Ver</a>
                        <a class="btn btn-danger" href="{{ route('empresa.show',$empresa->id) }}">Desactivar</a>
                    </form>
                </td>
            </tr>
        @endforeach
        @else
 <tr>
 <td colspan="4">No data found.</td>
 </tr>
 @endif
    </table>
    <div class="row">  
 <div class="col-lg-12">
 {!! $menus->links() !!}
 </div>
 </div>
@endsection