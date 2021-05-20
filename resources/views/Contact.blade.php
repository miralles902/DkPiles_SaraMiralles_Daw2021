@extends('layouts.navbar')
@section('title', 'Contacto')
@section('content_page')
<form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validacion()">
    @csrf
    <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
    <div class="name">
        <label for="name">Nombre<span class="obligatorio">*</span></label>
        <input type="text" name="name" id="nombre" placeholder="su nombre" maxlength="12" autofocus required>
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
    <div class="NoSpam">
        <label for="NoSpam" class="escondido">Si ves esto dejame en blanco</label>
        <input id="NoSpam" name="NoSpam" class="escondido" />
    </div>
    <button type="reset">Restablecer</button>
    <button type="submit">Enviar</button>
</form>
<!-- mapa -->
<section id="mapa">
    <h3>¡Estamos aquí!</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6205.668974969022!2d-0.1204852!3d38.9506094!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61e77b92a80ab1%3A0x28c90396840f0a8e!2sDKPiles!5e0!3m2!1ses!2ses!4v1613740698069!5m2!1ses!2ses" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
<!-- sobre el club -->
<p>En nuestra zona de Piles, tras el considerable grupo de amantes y praticantes de kitesurf, y ante las dificultades presentadas por las prohibiciones y continuas quejas de los bañistas , decidimos formar el actual club D.K.P., con la iniciativa de legalizar una zona</p>
<p>La solicitud de la zona la se tramita el año 2009 con vigencia hasta la fecha .Durante el transcurso de las temporadas , la directiva sufre varios cambios . En la actualidad el club consta de mas de 70 socios . La zona está ubicada al sur del termino de la playa de Piles , lindando con Oliva .Comarca de La safor . Esta comarca cuenta con cinco zonas legalizadas , dirigidas y gestionadas por sus correspondientes clubs.</p>
<p>Debido al constante crecimiento de deportistas es este sector , uno de nuestros mayores retos ,en estos momentos , es unificar criterios con el resto de clubs , para de este modo , tratar correctamente todas las visitas que recibimos durante la temporada . Y cierto es que la tarea no es nada fácil , aquí está prohibido navegar y para eliminar esta prohibición , los socios debemos soportar unos gastos, bastante elevados, para poder realizar la practica de este deporte que tantas satisfacciones nos aporta.</p>
<!-- requisitos para navegar -->
<h1>Requisitos para Navegar</h1>
<ul>
<li>Seguro en vigor.</li>
<li>Mayor de edad o Autorización tutor.</li>
<li>Nivel básico (entrada y salida por el canal).</li>
<li>Acatar normas y condiciones del club.</li>
</ul>
*Descargar formulario de autorización menor de edad. <!-- pdf de autorización -->

<!-- Vientos navegables-->
<h1>Vientos navegables</h1>
<img src="{{ asset('img/vents.jpg') }}" alt="vientos navegables" />

@endsection