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
    <link type="text/css" rel="stylesheet" href="{{url("/css/materialize.min.css")}}"  media="screen,projection"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{url("/img/favico.png")}}"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
    <nav>
        <div class="nav-wrapper orange lighten-1">
            <a href="{{url('/')}}" class="brand-logo left"><img src="{{url("/img/logo1.png")}}" class="responsive-img" style="height: 55px; margin: 5%"></a>
            <a href="{{url('/')}}" class="brand-logo center">Arspect</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse right"><img height="33" width="40" style="margin-top: 12px" src="{{url('/img/menu.png')}}"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                @if(Auth::guest())
                    <li><a href="{{url('/login')}}" > Login </a></li>
                    <li><a href="{{url('/register')}}" > Register </a></li>
                @else
                <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1"> {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                 @endif
            </ul>
        </div>
    </nav>

    <ul class="side-nav" id="mobile-demo">
        @if(Auth::guest())
            <li><a href="{{url('/login')}}" > Login </a></li>
            <li><a href="{{url('/register')}}" > Register </a></li>
        @else
        <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1"> {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
        @endif
    </ul>

    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{url('/perfil')}}"> Perfil </a></li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</header>
<body>

<div class="container">
    @yield('content')
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{url("js/materialize.min.js")}}"></script>
<script type="text/javascript">
    $(".dropdown-button").dropdown();
    $(".button-collapse").sideNav();
</script>
@yield('scripts')
</body>
</html>
