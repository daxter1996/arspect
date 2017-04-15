<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arspect</title>

    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/propio.css')}}" rel="stylesheet">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{url('img/favico.png')}}"/>


</head>
<header>
    <nav class="navbar navbar-default ">
        <div class="container">
            <div class="navbar-header">
                <a href="{{url('/')}}" class="navbar-brand"> Arspect </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobileDrop">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mobileDrop">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                    <li><a href="{{url('/login')}}" class="navbar-right"> Login </a></li>
                    <li><a href="{{url('/register')}}" class="navbar-right"> Register </a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li><a href="{{url('/about')}}" class="navbar-right"> Sobre Nosotros </a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>

<div class="content container">
    @yield('content')
</div>

@yield('scripts')
<!-- Basic Bootstrap Script -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
