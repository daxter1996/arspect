<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arspect</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{url("/css/materialize.css")}}" media="screen,projection"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{url("/img/favico.png")}}"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--Token Laravel-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    @yield('header')
</head>
<header>
    <nav>
        <div class="nav-wrapper orange darken-2">
            <!-- Navegacio Esquerra -->
            <ul id="nav-mobile" class="left">
                <li><a class="white-text" href="#1"> About </a></li>
                <li><a class="white-text" href="#3"> Servicios </a></li>
                <li><a class="white-text" href="#4"> Novedades </a></li>
                <li><a class="white-text" href="#5"> Team </a></li>
                <li><a class="white-text" href="#6"> Contacto </a></li>
            </ul>
            <a href="{{url('/')}}" class="brand-logo center hide-on-small-and-down"><img src="{{url("/img/logoLetra.png")}}" class="responsive-img" style="height: 58px; margin-left: 20px; margin-top: 5px"></a>
            <a href="{{url('/')}}" class="brand-logo center hide-on-med-and-up"><img src="{{url("/img/logoLetra.png")}}" class="responsive-img" style="height: 50px; margin-left: 20px; margin-top: 5px"></a>
        </div>
    </nav>
</header>
<body>
@yield('noContainer')
<div class="container">
    @yield('content')
</div>


<!--Import jQuery before materialize.js-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{url("js/materialize.min.js")}}"></script>
<script type="text/javascript">
    $(".dropdown").dropdown();
    $(".button-collapse").sideNav({edge: 'right'});

</script>
@yield('scripts')
</body>

<footer class="page-footer orange darken-3">
    <div class="container">
        <div class="row">

            <div class="col m4 s12 offset-m4">
                <a class="col s6 center" href="http://www.twitter.com/arspect" target="_blank"><img class="responsive-img" style="height: 47px" src="{{url('/img/twitter.png')}}"></a>
                <a class="col s6 center" href="https://www.facebook.com/Arspect-245196652605821/" target="_blank"><img class="responsive-img" style="height: 50px" src="{{url('/img/facebook.png')}}"></a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container row">

        </div>
    </div>
</footer>

</html>
