@extends('configuracion.layout')

@section('content')
<div class="row">
    <div class="col-lg-11">
        <h1>Administración DKPiles - Configuración del menú</h1>

    </div>

</div>
<div class="col-lg-11">
    <h2>Configura tus páginas</h2>
</div>
<table class="table table-bordered">
    <tr>
        <th>Menú</th>
        <th width="200px">Accion</th>
    </tr>
    <tr>
        <td>
            El club
        </td>
        <td>
            <a class="btn btn-info" href="" id="clubActivar">Activar</a>
        </td>
    </tr>
    <tr>
        <td>
            Contacto
        </td>
        <td>
            <a class="btn btn-info" href="">Activar</a>
            <a class="btn btn-danger" href="">Desactivar</a>
        </td>
    </tr>
    <tr>
        <td>
            + Previsiones
        </td>
        <td>
            <a class="btn btn-info" href="">Activar</a>
            <a class="btn btn-danger" href="">Desactivar</a>
        </td>
    </tr>
    <tr>
        <td>
            Galeria
        </td>
        <td>
            <a class="btn btn-info" href="">Activar</a>
            <a class="btn btn-danger" href="">Desactivar</a>
        </td>
    </tr>
    <tr>
        <td>
            Mercadillo
        </td>
        <td>
            <a class="btn btn-info" href="">Activar</a>
            <a class="btn btn-danger" href="">Desactivar</a>
        </td>
    </tr>
    <tr>
        <td>
            Noticias
        </td>
        <td>
            <a class="btn btn-info" href="">Activar</a>
            <a class="btn btn-danger" href="">Desactivar</a>
        </td>
    </tr>
    <tr>
        <td>
            Webcams
        </td>
        <td>
            <a class="btn btn-info" href="">Activar</a>
            <a class="btn btn-danger" href="">Desactivar</a>
        </td>
    </tr>
</table>
<div class="col-lg-11">
    <a class="btn btn-primary" href="{{ url('/') }}">Atras</a>
</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="{{ asset('js/botonesConfig.js') }}"></script>
