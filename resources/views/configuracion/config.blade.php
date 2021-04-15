@extends('configuracion.layout')

@section('content')
<div class="row">
<div class="col-lg-11">
    <h1>Administración DKPiles - Configuración del menú</h1>
</div>
    <div class="col-lg-11">
        <a class="btn btn-primary" href="{{ url('usuarios') }}">Atras</a>
    </div>
</div>
<div class="col-lg-11">
    <h2>Configura tus páginas</h2>
</div>
<table class="table table-bordered">
    <tr>
        <th>Menú</th>
        <th width="280px">Accion</th>
    </tr>
    <tr>
        <td>
        El club
        </td>
        <td>
            <a class="btn btn-info" href="">Activar</a>
            <a class="btn btn-danger" href="">Desactivar</a>
        </td>
    </tr>
    <tr>
        <td>
        El club
        </td>
        <td>
            <a class="btn btn-info" href="">Activar</a>
            <a class="btn btn-danger" href="">Desactivar</a>
        </td>
    </tr>
</table>