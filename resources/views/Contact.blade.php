@extends('layouts.navbar')
@section('title', 'Contacto')
@section('content_page')
<form action="" method="POST" enctype="multipart/form-data">
<!-- en el action   route('contacto.store',$contacto->id) {{}} -->
    @csrf
    @method('PUT')
    <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
    <div class="nombre">
        <label for="nombre">Nombre<span class="obligatorio">*</span></label>
        <input type="text" name="name" placeholder="su nombre">
    </div>
    <div class="apellidos">
        <label for="apellidos">Apellidos<span class="obligatorio">*</span></label>
        <input type="text" name="apellidos" placeholder="sus apellidos">
    </div>
    <div class="email">
        <label for="email">Email<span class="obligatorio">*</span></label>
        <input type="email" name="email" placeholder="su email">
    </div>
    <div class="asunto">
        <label for="asunto">asunto<span class="obligatorio">*</span></label>
        <textarea name="asunto" placeholder="asunto"></textarea>
    </div>
</form>
@endsection