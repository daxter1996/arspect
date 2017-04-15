@extends('layouts.main')

@section('nav')

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
                    <li><a href="{{url('/login')}}" class="navbar-right"> Login </a></li>
                    <li><a href="{{url('/register')}}" class="navbar-right"> Register </a></li>
                    <li><a href="{{url('/about')}}" class="navbar-right"> Sobre Nosotros </a></li>
                </ul>
            </div>
        </div>
    </nav>

@endsection

@section('content')
    <div id="caixa" class="row" style="margin-top: 150px">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6" style="margin: 10px">
            <h1 style="text-align: center;">¿Estas buscando un artista?</h1>
            <hr/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><i class="material-icons" style="font-size: 17px">search</i></span>
                <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon1">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection