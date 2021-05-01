<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sara Miralles Roselló" />
    <meta name="keywords" content="kitesurf, Piles, dkpiles, piles, playa, club, reunion" />
    <meta name="robots" content="index,follow" />

    <title>DkPiles - @yield('title')</title>

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
    <h1>@yield('title')</h1>

    <!-- boton modo oscuro -->
    <button class="switch" id="switch">
        <span><i class="fas fa-sun"></i></span>
        <span><i class="fas fa-moon"></i></span>
    </button>
    <!-- end boton modo oscuro -->

    <!-- boton Whatsapp -->
    <a title="whatsapp" href="https://wa.me/+34622861169/?text=Me%20gustaría%20ponerme%20en%20contacto%20con%20vosotros" target="_blank" id="enlaceWhatsapp"><i class="fab fa-whatsapp"></i></a>
    <!-- end boton Whatsapp -->

    <!-- boton Login -->
    @guest
    <!-- si no esta logueado se muestra una llave a la página de login-->
    <a title="login" href="{{ url('/login') }}" target="_self" id="enlaceLogin"><i class="fas fa-key"></i></a>
    @else
    <!-- si esta logueado se muestra el nombre o salir de sesion-->
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('login') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        {{ __('Eixir') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    @endguest
    <!-- end boton Login -->

    <!-- idioma -->
    <a title="castellano" class="btn btn-primary" href="{{ url('/') }}"><img src="{{ asset('img/spain.png') }}" alt="castellano" /></a>
    <!-- end idioma -->

    <!-- Scripts -->
    <script src="{{ asset('js/modoClaroOscuro.js') }}"></script>
</body>

</html>