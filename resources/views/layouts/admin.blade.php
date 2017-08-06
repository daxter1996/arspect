<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arspect - Admin</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{url('/css/materialize.css')}}" media="screen,projection"/>

    <!--Favicon-->
    <link rel="icon" type="image/png" href="{{url('/img/favico.png')}}">

    <!-- Web App i color principal -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#ff9800">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Taules -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

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
            <a href="{{url('/')}}" class="brand-logo center hide-on-small-and-down"><img src="{{url("/img/logoLetra.png")}}" class="responsive-img" style="height: 58px; margin-left: 20px; margin-top: 5px"></a>
            <a href="{{url('/')}}" class="brand-logo center hide-on-med-and-up"><img src="{{url("/img/logoLetra.png")}}" class="responsive-img" style="height: 50px; margin-left: 20px; margin-top: 5px"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse right"><img height="33" width="40" style="margin-top: 12px" src="{{url('/img/menu.png')}}"></a>
            <!-- Navegacio Dreta -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!-- Dropdown Trigger -->
                <li><a href="{{url('/home')}}">
                        @if(Auth::user()->avatar != null)
                            <i class="material-icons right"><img src="{{url('uploads/profile/' . Auth::user()->id . '/' . Auth::user()->avatar)}}" alt="Avatar" class="circle responsive-img" style="width: 35px; height: 35px; margin-bottom: -5px"></i>
                        @endif
                        {{ Auth::user()->name }}
                    </a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                @if(Auth::guest())
                    <li><a href="{{url('/login')}}"> Login </a></li>
                    <li><a href="{{url('/register')}}"> Register </a></li>
                @else
                <!-- Dropdown Trigger -->
                    <li><a href="{{url('/home')}}">
                            @if(Auth::user()->avatar != null)
                                <i class="material-icons right"><img src="{{url('uploads/profile/' . Auth::user()->id . '/' . Auth::user()->avatar)}}" alt="Avatar" class="circle responsive-img" style="width: 35px; height: 35px; margin-bottom: -5px"></i>
                            @endif
                            {{ Auth::user()->name }}
                        </a></li>
                    <!--<li><a class="dropdown" href="#!" data-activates="dropdown1"> <i class="material-icons right">arrow_drop_down</i></a></li>-->
                @endif
                <li><a href='{{url('/admin')}}'><i class="material-icons left">dvr</i> Vista General </a></li>
                <li class="divider"></li>
                <li><a href="{{url('/validacion')}}"><i class="material-icons left">person_add</i>Solicitudes de validación</a></li>
                <li><a href="{{url('/clientes')}}"><i class="material-icons left">search</i>Buscar Usuario</a></li>

            </ul>
        </div>
    </nav>
</header>
<body>

<div class="row" style="margin-bottom: 0px">
    <div class="col s3 blue-grey darken-3 vertical-menu hide-on-small-only" style="min-height: 100vh">
        <br/>
        <a href='{{url('/admin')}}'><i class="material-icons left">dvr</i> Vista General </a>
        <div class='divider'></div>
        <a><i class="material-icons left">person</i>Usuarios <i class="material-icons right">arrow_drop_down</i></a>
        <a style="color: white" href="{{url('/validacion')}}"><i class="material-icons left">person_add</i>Solicitudes de validación</a>
        <a style="color: white" href="{{url('/clientes')}}"><i class="material-icons left">search</i>Buscar Usuario</a>
        <div class="divider"></div>
    </div>
    <div class="col s12 m9">
        @yield('content')
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{url('/js/materialize.min.js')}}"></script>
<script type="text/javascript">
    $(".button-collapse").sideNav();
    $(".button-collapse").sideNav({edge: 'right'});
</script>
@yield('scripts')
</body>

</html>
