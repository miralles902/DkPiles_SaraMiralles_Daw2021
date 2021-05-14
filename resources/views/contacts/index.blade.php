@extends('contacts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Administración - Contacto</h2>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Asunto</th>
        <th width="280px">Acciones</th>
    </tr>
    @foreach ($contacts as $contacto)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $contacto->name }}</td>
        <td>{{ $contacto->surname }}</td>
        <td>{{ $contacto->email }}</td>
        <td>
            <div class="module line-clamp">{{ $contacto->asunto }}</div>
        </td>
        <td>
            <form action="{{ route('contacts.destroy',$contacto->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('contacts.show',$contacto->id) }}"><i class="fas fa-eye"></i></a>

                <a class="btn btn-primary" href="mailto:{{ $contacto->email }}"><i class="fas fa-paper-plane"></i></a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $contacts->links() !!}

<br>
<div class="pull-left">
    @if(Auth::user()->tipo_usuario)
    <a class="btn btn-primary" href="{{ url('/homeAdmin') }}">Volver al panel</a>
    @else
    <a class="btn btn-primary" href="{{ url('/home') }}">Volver al panel</a>
    @endif
</div>
@endsection