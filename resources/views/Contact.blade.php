@extends('layouts.navbar')
@section('title', 'Contacto')
@section('content_page')
<h2>Contacto</h2>
<div class="row">
    <div class="col-md-4">
        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validacion()">
            @csrf
            <h5>Escríbenos y en breve nos pondremos en contacto contigo</h5>
            <div class="form-group">
                <label for="name">Nombre<span class="obligatorio">*</span></label>
                <input type="text" class="form-control" name="name" id="nombre" placeholder="su nombre" maxlength="12" autofocus required>
            </div>
            <div class="form-group">
                <label for="surname">Apellidos<span class="obligatorio">*</span></label>
                <input type="text" class="form-control" name="surname" id="apellidos" placeholder="sus apellidos" maxlength="25" required>
            </div>
            <div class="form-group">
                <label for="email">Email<span class="obligatorio">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="su email" required>
                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu e-mail con nadie.</small>
            </div>
            <div class="form-group">
                <label for="asunto">Mensaje<span class="obligatorio">*</span></label>
                <textarea name="asunto" class="form-control" id="asunto" placeholder="asunto" required></textarea>
            </div>
            <div class="NoSpam">
                <label for="NoSpam" class="escondido">Si ves esto dejame en blanco</label>
                <input id="NoSpam" name="NoSpam" class="escondido" />
            </div>
            <div class="text-center">
                <button class="btn btn-dark" type="reset">Restablecer</button>
                <button class="btn btn-dark" type="submit">Enviar</button>
            </div>
            <br>
        </form>
    </div>
    <!-- mapa -->
    <div class="col-md-8">
        <section id="mapa">
            <h4>¡Estamos aquí!</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6205.668974969022!2d-0.1204852!3d38.9506094!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61e77b92a80ab1%3A0x28c90396840f0a8e!2sDKPiles!5e0!3m2!1ses!2ses!4v1613740698069!5m2!1ses!2ses" id="maps" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
    </div>
</div>
<!-- requisitos para navegar -->

<div class="row">
    <div class="col-md-6">
        <h4>Requisitos para Navegar</h4>
        <ul>
            <li><i class="fas fa-check"></i> Seguro en vigor.</li>
            <li><i class="fas fa-check"></i> Mayor de edad o Autorización tutor.</li>
            <li><i class="fas fa-check"></i> Nivel básico (entrada y salida por el canal).</li>
            <li><i class="fas fa-check"></i> Acatar normas y condiciones del club.</li>
            <li><i class="fas fa-check"></i> Si eres menor de edad descarga el siguiente formulario de autorización: </li>
        </ul>
        <div class="text-center">
            <!-- pdf de autorización -->
            <a class="btn btn-dark me-2" href="{{ asset('pdf/AUTORIZACION_MENOR_DE_EDAD.pdf') }}" role="button" title="autorizacion" download="Autorizacion_Menor_edad" target="_blank"><i class="fas fa-download"></i> Descarga</a>
        </div>
        <br>
    </div>
    <!-- Vientos navegables-->
    <div class="col-md-6">
        <h4>Vientos navegables</h4>
        <img class="img-fluid" src="{{ asset('img/vents.jpg') }}" alt="vientos navegables" id="viento" />
    </div>
</div>
<br>
<!-- sobre el club -->
<h2>Breve Historia</h2>
<div class="text-justify">
    <p>En nuestra zona de Piles, tras el considerable grupo de amantes y praticantes de kitesurf, y ante las dificultades presentadas por las prohibiciones y continuas quejas de los bañistas, decidímos formar el actual club D.K.P., con la iniciativa de legalizar una zona.</p>
    <p>La solicitud de la zona la se tramita el año 2009 con vigencia hasta la fecha. Durante el transcurso de las temporadas, la directiva sufre varios cambios. En la actualidad el club consta de mas de 70 socios.</p>
    <p>La zona está ubicada al sur del termino de la playa de Piles, lindando con Oliva (Comarca de La safor). Esta comarca cuenta con cinco zonas legalizadas , dirigidas y gestionadas por sus correspondientes clubs.</p>
    <p>Debido al constante crecimiento de deportistas es este sector, uno de nuestros mayores retos, en estos momentos, es unificar criterios con el resto de clubs, para de este modo, tratar correctamente todas las visitas que recibimos durante la temporada.</p>
    <p>Cierto es que la tarea no es nada fácil, aquí está prohibido navegar y para eliminar esta prohibición, los socios debemos soportar unos gastos, bastante elevados, para poder realizar la practica de este deporte que tantas satisfacciones nos aporta.</p>
</div>

@endsection