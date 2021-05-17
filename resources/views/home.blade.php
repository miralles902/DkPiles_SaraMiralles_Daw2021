@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1><i class="fas fa-user-edit"></i>{{ __(' Editor') }}</h1>
@stop

@section('content')
<?php

use Illuminate\Support\Facades\DB;

//select para las categorias de nuestra BD
$mensajes = DB::table('contacts')
    ->select('id')
    ->count();

$usuarios = DB::table('users')
    ->select('id')
    ->count();

$ventas = DB::table('ventas')
    ->select('id')
    ->count();

$noticias = DB::table('noticias')
    ->select('id')
    ->count();

?>
<p>Bienvenido al panel de administración de DKPiles</p>
<div class="col-md-12">
    <br>
    <div class="row">
    <div class="info-box col-md-5 pull-right">
            <span class="info-box-icon bg-navy"><i class="fas fa-shopping-basket"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Ventas</span>
                <span class="info-box-number"><?php echo $ventas ?></span>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="info-box col-md-5 pull-left">
            <span class="info-box-icon bg-gray-dark"><i class="far fa-newspaper"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Noticias</span>
                <span class="info-box-number"><?php echo $noticias ?></span>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="info-box col-md-5 pull-right">
            <span class="info-box-icon bg-teal"><i class="far fa-envelope"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Mensajes</span>
                <span class="info-box-number"><?php echo $mensajes ?></span>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop