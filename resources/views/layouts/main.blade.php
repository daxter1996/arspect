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
    @yield('header')
</head>
<header>
    <nav>
        <div class="nav-wrapper orange darken-2">
            <!-- Navegacio Esquerra -->
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a class="white-text" href="{{url('/about')}}"> Quiénes somos </a></li>
                <li><a class="white-text" href="{{url('/blog')}}"> Blog </a></li>
            </ul>
            <!-- Logo mobil/pc -->
            <a href="{{url('/')}}" class="brand-logo center hide-on-small-and-down"><img
                        src="{{url("/img/logoLetra.png")}}" class="responsive-img"
                        style="height: 58px; margin-left: 20px; margin-top: 5px"></a>
            <a href="{{url('/')}}" class="brand-logo center hide-on-med-and-up"><img src="{{url("/img/logoLetra.png")}}"
                                                                                     class="responsive-img"
                                                                                     style="height: 50px; margin-left: 20px; margin-top: 5px"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse right"><img height="33" width="40"
                                                                                        style="margin-top: 12px"
                                                                                        src="{{url('/img/menu.png')}}"></a>
            <!-- Navegacio Dreta -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                @if(Auth::guest())
                    <li><a href="{{url('/login')}}"> Login </a></li>
                    <li><a href="{{url('/register')}}"> Register </a></li>
                @else
                <!-- Dropdown Trigger -->
                    <li><a href="{{url('/personal')}}">
                            @if(count(Storage::files('public/profile/'.Auth::user()->id)) > 0)
                                <i class="material-icons right"><img
                                            src="{{url('../storage/app/'. Storage::files('/public/profile/'. Auth::user()->id)[0])}}"
                                            alt="Avatar" class="circle responsive-img"
                                            style="width: 35px; height: 35px; margin-bottom: -5px"></i>
                            @endif
                            {{ Auth::user()->name }}
                        </a></li>
                    <!--<li><a class="dropdown" href="#!" data-activates="dropdown1"> <i class="material-icons right">arrow_drop_down</i></a></li>-->
                @endif
            </ul>
        </div>
    </nav>

    <ul class="side-nav" id="mobile-demo">
        @if(Auth::guest())
            <li><a href="{{url('/login')}}"> Login </a></li>
            <li><a href="{{url('/register')}}"> Register </a></li>
        @else
        <!-- Dropdown Trigger -->
            <li><a href="{{url('/personal')}}">
                    @if(count(Storage::files('public/profile/'.Auth::user()->id)) > 0)
                        <i class="material-icons right"><img
                                    src="{{url('../storage/app/'. Storage::files('/public/profile/'. Auth::user()->id)[0])}}"
                                    alt="Avatar" class="circle responsive-img" style="height: 50%;"></i>
                    @endif
                    {{ Auth::user()->name . ' ' . Auth::user()->surname}}
                </a></li>
        @endif
    </ul>


</header>
<body>

@yield('noContainer')

<div class="container">
    @yield('content')
</div>


<!--Import jQuery before materialize.js-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{url('/js/jQuery.js')}}"></script>
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
            <div class="col s12 m4">
                <h5 class="white-text">Empresa</h5>
                <ul>
                    <li><a class="white-text" href=""> Quiénes somos </a></li>
                    <li><a class="white-text" href=""> Blog </a></li>
                </ul>

            </div>
            <div class="col s12 m4">
                <h5 class="white-text">Menú Principal</h5>
                <ul>
                    @if(Auth::guest())
                        <li><a class="white-text" href="{{url('/login')}}"> Login </a></li>
                        <li><a class="white-text" href="{{url('/register')}}"> Register </a></li>
                    @else
                    <!-- Dropdown Trigger -->
                        <li><a class="white-text" href="{{url('/personal')}}"> {{ Auth::user()->name }} </a></li>
                        <!--<li><a class="dropdown" href="#!" data-activates="dropdown1"> <i class="material-icons right">arrow_drop_down</i></a></li>-->
                    @endif
                </ul>
            </div>
            <div class="col m4 s12">
                <h5 class="white-text">Síguenos en</h5>
                <a href="http://www.twitter.com/arspect" target="_blank"><img class="responsive-img"
                                                                              style="height: 47px"
                                                                              src="{{url('/img/twitter.png')}}"></a>
                <a href="https://www.facebook.com/Arspect-245196652605821/" target="_blank"><img class="responsive-img"
                                                                                                 style="height: 50px"
                                                                                                 src="{{url('/img/facebook.png')}}"></a>
                <a href="https://www.instagram.com/arspect_/" target="_blank"><img class="responsive-img" style="height: 50px"
                                                src="{{url('/img/instagram.png')}}"></a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container row">
            <div class="col s12 m3"> © Arspect</div>
            <a class="grey-text text-lighten-4 col s12 m3" href="#!">Términos y condiciones</a>
            <a class="grey-text text-lighten-4 col s12 m3" href="#!">Política de privacidad</a>
            <a class="grey-text text-lighten-4 col s12 m3" href="#!">Política de Cookies</a>
        </div>
    </div>
</footer>
</html>
