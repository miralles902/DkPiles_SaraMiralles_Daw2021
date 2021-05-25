@extends('adminlte::page')

@section('title', 'Configuracion de la web')

@section('content')

<body>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-info">
                <h6 class="text-white">Configura las páginas que quieres mostrar</h6>
            </div>
            <div class="card-body">
                <br>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @if ($message = Session::get('message'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th colspan="2">Páginas que se muestran en la web</th>
                    </tr>
                    @foreach($configs as $config)
                    <div class="col-md-12 text-right mb-12">
                        <a class="btn btn-success" href="{{ route('configs.edit',$config->id) }}">Modificar</a>
                    </div>
                    <br>
                    @foreach($config->category as $value)
                    <tr>
                        <td>{{$value}}</td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    @endforeach

                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-left mb-12">
        <a class="btn btn-primary" href="{{ url('/home') }}">Volver al panel</a>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
@endsection