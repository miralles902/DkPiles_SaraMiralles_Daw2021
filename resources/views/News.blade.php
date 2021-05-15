@extends('layouts.navbar')
@section('title', 'Noticias')
@section('content_page')
<section id="eventos">
            <h3>Próximos eventos</h3>
            <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FMadrid&amp;src=c2IxbzQzODI2c3QzZWF1N2VycTRpaGZ1OGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23039BE5&amp;showTz=0&amp;showCalendars=0&amp;showTabs=0&amp;showTitle=0" style="border-width:0" width="450" height="400" frameborder="0" scrolling="no"></iframe>
        </section>
        <section id="noticias">
        @foreach ($noticiasUsuarios as $noticia)
        <tr>
            
            <td><img src="/image/{{ $noticia->image }}" width="100px"></td>
            <td>{{ $noticia->titulo }}</td>
            <td><div class="module line-clamp">{!! $noticia->detail !!}</div></td>
            <td>
               
     
            <a class="btn btn-info" href="{{ route('noticiaShow',$noticia->id) }}">Leer Más</a>
      
            </td>
        </tr>
        @endforeach
    </table>
        </section>
@endsection