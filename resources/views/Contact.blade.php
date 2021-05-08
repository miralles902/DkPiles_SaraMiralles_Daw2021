@extends('layouts.navbar')
@section('title', 'Contacto')
@section('content_page')
<form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validacion()">
    @csrf
    <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
    <div class="name">
        <label for="name">Nombre<span class="obligatorio">*</span></label>
        <input type="text" name="name" id="nombre" placeholder="su nombre" maxlength="12" required>
    </div>
    <div class="surname">
        <label for="surname">Apellidos<span class="obligatorio">*</span></label>
        <input type="text" name="surname" id="apellidos" placeholder="sus apellidos" maxlength="25" required>
    </div>
    <div class="email">
        <label for="email">Email<span class="obligatorio">*</span></label>
        <input type="email" name="email" id="email" placeholder="su email" required>
    </div>
    <div class="asunto">
        <label for="asunto">Mensaje<span class="obligatorio">*</span></label>
        <textarea name="asunto" id="asunto" placeholder="asunto" required></textarea>
    </div>
    <button type="reset">Restablecer</button>
    <button type="submit">Enviar</button>
</form>
@endsection