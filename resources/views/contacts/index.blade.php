@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content')
<!DOCTYPE html>

<head>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/textStyle.css') }}">
   <!-- funcion para acortar texto -->
   @include('layouts.shortText')
</head>

<body>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="col-md-12">

        <table class="table table-responsive-sm table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contacto)
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $contacto->name }}</td>
                    <td>{{ $contacto->surname }}</td>
                    <td>{{ $contacto->email }}</td>
                    <td>
                        <div class="module line-clamp">{!! getShortedString($contacto->asunto, 3000) !!}</div>
                    </td>
                    <td class="text-nowrap">
                        <form action="{{ route('contacts.destroy',$contacto->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('contacts.show',$contacto->id) }}" title="Ver"><i class="fas fa-eye"></i></a>

                            <a class="btn btn-primary" href="mailto:{{ $contacto->email }}" title="Responder"><i class="fas fa-paper-plane"></i></a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" title="Borrar"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {!! $contacts->links() !!}

    <br>
    <div class="pull-left">
        @if(Auth::user()->tipo_usuario)
        <a class="btn btn-primary" href="{{ url('/homeAdmin') }}">Volver al panel</a>
        @else
        <a class="btn btn-primary" href="{{ url('/home') }}">Volver al panel</a>
        @endif
    </div>
</body>
</Dhtml>
@endsection