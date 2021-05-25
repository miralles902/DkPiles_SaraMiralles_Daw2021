@extends('layouts.navbar')
@section('title', 'Noticias')
@section('content_page')
<div class="row">
    <div class="col-md-6 justify-content-center">
        <h4>Próximos eventos</h4>
        <br>
        <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FMadrid&amp;src=c2IxbzQzODI2c3QzZWF1N2VycTRpaGZ1OGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23039BE5&amp;showTz=0&amp;showCalendars=0&amp;showTabs=0&amp;showTitle=0" id="cal" style="border-width:0" width="100%" frameborder="0" scrolling="no"></iframe>
    </div>
    <div class="col-md-6">
        <h4>Noticias</h4>
        @foreach ($noticiasUsuarios as $noticia)
        <div class="row  justify-content-center">
            <div class="col-md-3">
                <img src="/image/{{ $noticia->image }}" class="img-fluid">
            </div>
            <div class="col-md-6 text-center">
                <h3>{{ $noticia->titulo }}</h3>

                <div class="module line-clamp">{!! $noticia->detail !!}</div>
            </div>
            <div class="col-md-3 text-center">
                <a class="btn btn-dark" href="{{ route('noticiaShow',$noticia->id) }}">Leer Más</a>
            </div>
        </div>
        <hr>
        @endforeach
        {!! $noticiasUsuarios->links() !!}
    </div>
</div>
@endsection