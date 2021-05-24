@extends('layouts.navbar')
@section('title', 'Galeria')
@section('content_page')
<div class="row">
<div class="col-md-3">
<img  src="{{ asset('img/tablasSurf.jpg') }}" alt="kitesurf"  id="surfImg" />
</div>
<div class="col-md-9">
<section id="instagram">
    <h6>Para aparecer aquí usa el hashtag #dkpiles en instagram</h6>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-c9e13b7d-d1c7-40e9-ab0a-49aeef0e6cf8"></div>
</section>
</div>
</div>
@endsection