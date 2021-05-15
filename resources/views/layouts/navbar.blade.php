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
    <link rel="stylesheet" href="{{ URL::asset('css/textStyle.css') }}">


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- php -->
    <?php
    //codigo php para conseguir las secciones activas del menu
    use Illuminate\Support\Facades\DB;

    //select para las categorias de nuestra BD
    $menu = DB::table('configs')
        ->select('category')
        ->get();

    //recorremos el array y mostramos el resultado
    foreach ($menu as $opciones) {
        $category = $opciones->category;
    }
    ?>

</head>

<body>
    <header>
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
        @if(Auth::user()->tipo_usuario)
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('/homeAdmin') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>
        @else
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('/home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>
        @endif

        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Salir') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @endguest
        <!-- end boton Login -->

        <!-- idioma -->
        <a title="valencia" href="{{ url('/val') }}">Val</a>
        <!-- end idioma -->
    </header>
    <main>
        @yield('content_page')
    </main>
    <footer>

        <!-- Menu -->
        <nav>
            <a href="{{ url('/') }}">Página principal</a>
            <a class="btn btn-primary" href="{{ url('/contacto') }}" id="contacto">Contacto</a>
            <a class="btn btn-primary" href="{{ url('/tiempo') }}" id="tiempo">El tiempo</a>
            <a class="btn btn-primary" href="{{ url('/galeria') }}" id="galeria">Galeria</a>
            <a class="btn btn-primary" href="{{ url('/mercadillo') }}" id="mercadillo">Mercadillo</a>
            <a class="btn btn-primary" href="{{ url('/news') }}" id="noticias">Noticias</a>
            <a class="btn btn-primary" href="{{ url('/webcams') }}" id="webcams">Webcams</a>
        </nav>
        <!-- end menu -->
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/modoClaroOscuro.js') }}"></script>
    <script src="{{ asset('js/validarForm.js') }}"></script>
    <script>
        // accedemos al array
        let arrayToJs = <?php echo json_encode($category); ?>;
    </script>
    <script src="{{ asset('js/mostrarOcultarBotones.js') }}"></script>
</body>

</html>