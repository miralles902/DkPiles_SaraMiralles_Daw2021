<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sara Miralles Roselló" />
    <meta name="keywords" content="kitesurf, Piles, dkpiles, piles, platja, plaja, club, reunio"/>
    <meta name="robots" content="index,follow"/>

    <title>DkPiles - Contacte</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/style_index.css') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

</head>

<body>
    <h1>Contacte</h1>

    <!-- boton modo oscuro -->
    <button class="switch" id="switch">
        <span><i class="fas fa-sun"></i></span>
        <span><i class="fas fa-moon"></i></span>
    </button>

    <!-- Menu -->
    <nav>
        <a href="{{ url('/val') }}">Página principal</a>
        <a class="btn btn-primary" href="{{ url('/val/temps') }}">El temps</a>
        <a class="btn btn-primary" href="{{ url('/val/galeria') }}">Galeria</a>
        <a class="btn btn-primary" href="{{ url('/val/login') }}">Login</a>
        <a class="btn btn-primary" href="{{ url('/val/mercadillo') }}">Mercadillo</a>
        <a class="btn btn-primary" href="{{ url('/val/noticies') }}">Noticies</a>
        <a class="btn btn-primary" href="{{ url('/val/webcams') }}">Webcams</a>
        <a class="btn btn-primary" href="{{ url('/') }}">Castellano</a>
    </nav>
    <!-- end menu -->

    <!-- Scripts -->
    <script src="{{ asset('js/modoClaroOscuro.js') }}"></script>
</body>
</html>