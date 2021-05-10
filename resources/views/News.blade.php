@extends('layouts.navbar')
@section('title', 'Noticias')
@section('content_page')
<section id="eventos">
            <h3>Próximos eventos</h3>
            <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FMadrid&amp;src=c2IxbzQzODI2c3QzZWF1N2VycTRpaGZ1OGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23039BE5&amp;showTz=0&amp;showCalendars=0&amp;showTabs=0&amp;showTitle=0" style="border-width:0" width="450" height="400" frameborder="0" scrolling="no"></iframe>
        </section>
        <section id="noticias">
            <h3>Noticias</h3>
            <iframe id="BuscoKite" title="Noticias de Kite Surf" width="100%" height="380rem" src="https://www.buscokite.com/">
            </iframe>
        </section>
@endsection