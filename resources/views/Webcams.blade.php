<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sara Miralles Roselló" />
    <meta name="keywords" content="kitesurf, Piles, dkpiles, piles, playa, club, reunion"/>
    <meta name="robots" content="index,follow"/>

    <title>DkPiles - webcams</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/style_index.css') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!--<script src="{{ asset('js/modoClaroOscuro.js') }}"></script> -->

</head>

<body>
    <h1>Webcams</h1>

    <!-- boton modo oscuro -->
    <button class="switch" id="switch">
        <span><i class="fas fa-sun"></i></span>
        <span><i class="fas fa-moon"></i></span>
    </button>

    <!-- Menu -->
    <nav>
    <a href="{{ url('/') }}">Página principal</a>
    <a class="btn btn-primary" href="{{ url('/contacto') }}">Contacto</a>
    <a class="btn btn-primary" href="{{ url('/tiempo') }}">El tiempo</a>
    <a class="btn btn-primary" href="{{ url('/galeria') }}">Galeria</a>
    <a class="btn btn-primary" href="{{ url('/login') }}">Login</a>
    <a class="btn btn-primary" href="{{ url('/mercadillo') }}">Mercadillo</a>
    <a class="btn btn-primary" href="{{ url('/noticias') }}">Noticias</a>
    <a class="btn btn-primary" href="{{ url('/webcams') }}">Webcams</a>
    <a class="btn btn-primary" href="{{ url('/val') }}">Valenciano</a>
    </nav>
    <!-- end menu -->


    <!-- Scripts -->
    <script src="{{ asset('js/modoClaroOscuro.js') }}"></script>
</body>
</html>