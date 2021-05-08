@extends('layouts.navbar')
@section('title', 'Contacto')
@section('content_page')
<form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
    <div class="name">
        <label for="name">Nombre<span class="obligatorio">*</span></label>
        <input type="text" name="name" placeholder="su nombre">
    </div>
    <div class="surname">
        <label for="surname">Apellidos<span class="obligatorio">*</span></label>
        <input type="text" name="surname" placeholder="sus apellidos">
    </div>
    <div class="email">
        <label for="email">Email<span class="obligatorio">*</span></label>
        <input type="email" name="email" placeholder="su email">
    </div>
    <div class="asunto">
        <label for="asunto">Mensaje<span class="obligatorio">*</span></label>
        <textarea name="asunto" placeholder="asunto"></textarea>
    </div>
    <button type="reset">Restablecer</button>
    <button type="submit">Enviar</button>
</form>
@endsection