<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="top">

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
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/hamburguer.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">



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
            <!-- Creating a SVG image -->
            <svg  viewBox="0 0 500 170" preserveAspectRatio="none">
                <path d="M0, 100 C150, 200 350,
                0 500, 100 L500, 00 L0, 0 Z" style="stroke:none; fill:black;">
                </path>
            </svg>
        <div class="container navbarLogo">
            <a title="Dunes Kite Piles" href="{{ url('/') }}" target="_self"><img src="svg/logo.svg" id="logo" alt="logo dkpiles"></a>
            <div class="row">
                <div class="botonesHead">
                    <!-- boton modo oscuro -->
                    <button class="switch" id="switch">
                        <span><i class="fas fa-sun"></i></span>
                        <span><i class="fas fa-moon"></i></span>
                    </button>
                    <!-- end boton modo oscuro -->
                </div>
                <div class="botonesHead">
                    <!-- boton Whatsapp -->
                    <a title="whatsapp" href="https://wa.me/+34622861169/?text=Me%20gustaría%20ponerme%20en%20contacto%20con%20vosotros" target="_blank" id="enlaceWhatsapp"><i class="fab fa-whatsapp"></i></a>
                    <!-- end boton Whatsapp -->
                </div>
                <div class="botonesHead">
                    <!-- idioma -->
                    <a title="valencia" href="{{ url('/val') }}">Val</a>
                    <!-- end idioma -->
                </div>
                <!-- boton Login -->
                @guest
                <div class="botonesHead">
                    <!-- si no esta logueado se muestra una llave a la página de login-->
                    <a title="login" href="{{ url('/login') }}" target="_self" id="enlaceLogin"><i class="fas fa-key"></i> Login</a>
                </div>
                @else
                <!-- si esta logueado se muestra el nombre o salir de sesion-->
                @if(Auth::user()->tipo_usuario)
                <div class="botonesHead">
                    <a href="{{ url('/homeAdmin') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                </div>
                @else
                <div class="botonesHead">
                    <a href="{{ url('/home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                </div>
                @endif
                <div class="botonesHead">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
                @endguest
                <!-- end boton Login -->
            </div>

        </div>
    </header>
    <main>
        @yield('content_page')
    </main>
    <footer>
        <!----------------- Menu ----------------->
        <!--<nav>
            <a href="{{ url('/') }}">Página principal</a>
            <a href="{{ url('/contacto') }}" id="contacto">Contacto</a>
            <a href="{{ url('/tiempo') }}" id="tiempo">+ Previsiones</a>
            <a href="{{ url('/galeria') }}" id="galeria">Galeria</a>
            <a href="{{ url('/mercadillo') }}" id="mercadillo">Mercadillo</a>
            <a href="{{ url('/news') }}" id="noticias">Noticias</a>
            <a href="{{ url('/webcams') }}" id="webcams">Webcams</a>
        </nav>-->

        <!----------------- menu movil ------------------>
        <nav id="nav-mobile">
            <!-- MENU HAMBURGUESA-->
            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <a href="#top" id="up" title="Arriba"><i class="fas fa-arrow-up"></i></a>
            <!--NAVEGADOR LINKS-->
            <div id="wrap-items" class="menu-close">
                <span class="wrap-item">
                    <a href="{{ url('/') }}">Página principal</a>
                </span>
                <span class="wrap-item">
                    <a href="{{ url('/tiempo') }}" id="tiempo">+ Previsiones</a>
                </span>
                <span class="wrap-item">
                    <a href="{{ url('/webcams') }}" id="webcams">Webcams</a>
                </span>
                <span class="wrap-item">
                    <a href="{{ url('/contacto') }}" id="contacto">Contacto</a>
                </span>

                <span class="wrap-item">
                    <a href="{{ url('/galeria') }}" id="galeria">Galeria</a>
                </span>
                <span class="wrap-item">
                    <a href="{{ url('/mercadillo') }}" id="mercadillo">Mercadillo</a>
                </span>
                <span class="wrap-item">
                    <a href="{{ url('/news') }}" id="noticias">Noticias</a>
                </span>

            </div>
        </nav>
        <!--------------- end menu movil -------------------->
        <!----------------- end menu  ------------------>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/modoClaroOscuro.js') }}"></script>
    <script src="{{ asset('js/validarForm.js') }}"></script>
    <script>
        // accedemos al array
        let arrayToJs = <?php echo json_encode($category); ?>;
    </script>
    <script src="{{ asset('js/mostrarOcultarBotones.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>