@extends('layouts.navbar')
@section('title', 'Más previsiones')
@section('content_page')
<a class="weatherwidget-io" href="https://forecast7.com/es/38d94n0d13/piles/" data-label_1="PILES" data-label_2="EL TIEMPO" data-theme="dark">PILES EL TIEMPO</a>

<iframe width="100%" height="250px" src="https://embed.windy.com/embed2.html?lat=38.456&lon=-0.128&detailLat=38.456&detailLon=-0.128&width=650&height=450&zoom=8&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
<!--<iframe src="https://wisuki.com/widget-summary?spot=2679&spotid=2434&lang=es" style="border: 0; width: 300; height: 270;" frameborder="0"></iframe> -->

<h2>Otros Spots</h2>
<div class="row">
  <div class="col-md-6">
    <h4>Oliva</h4>
    <script id="wg_fwdg_48858_3_1616663523423" src="{{ asset('js/windguruOliva.js') }}"></script>
  </div>
  <div class="col-md-6">
    <h4>Gandia - playa de l’ahuir (surf)</h4>
    <script id="wg_fwdg_681970_3_1616663573278" src="{{ asset('js/windguruGandiaPlaya.js') }}"></script>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <h4>Gandia</h4>
    <script id="wg_fwdg_48859_3_1616663601518" src="{{ asset('js/windguruGandia.js') }}"></script>
  </div>
  <div class="col-md-6">
    <h4>Denia</h4>
    <script id="wg_fwdg_6359_3_1616663475261" src="{{ asset('js/windguruDenia.js') }}"></script>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <h4>Cullera</h4>
    <script id="wg_fwdg_48861_3_1616663639271" src="{{ asset('js/windguruCullera.js') }}"></script>
  </div>
  <div class="col-md-6">
    <h4>Calpe</h4>
    <script id="wg_fwdg_48851_3_1616663432230" src="{{ asset('js/windguruCalpe.js') }}"></script>
  </div>
</div>
<h2>Más recursos</h2>
<div class="container">
<div class="row">
<div class="col-md-5">
<img text-right src="{{ asset('img/balearia.png') }}" alt="meteo" id="meteo" />
</div>
<div class="col-md-7 text-center">
<div class="row">
<p>Descarga la app Meteorológica de Baleria</p>
</div>
<div class="row">
<div class="btn-group">
<a class="btn btn-dark me-2" href="https://apps.apple.com/es/app/balearia-port-meteo/id1086456215?l=es" role="button" title="IOS" target="_blank" id="ios"><i class="fas fa-mobile-alt"></i> Disponible en App Store</a>

<a class="btn btn-dark me-2" href="https://apkpure.com/es/balearia-port-meteo/com.blaasoft.baleariaport" role="button" title="Android" target="_blank" id="android"><i class="fab fa-android"></i> Disponible para Android</a>
</div>
</div>
</div>
</div>
<script src="{{ asset('js/weatherWidget.js') }}"></script>
@endsection