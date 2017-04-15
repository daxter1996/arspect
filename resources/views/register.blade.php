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
    <h1 style="text-align: center">Registrarse como</h1>
    <div id="caixa" class="row" style="margin-top: 50px">
        <div class="col-sm-12 col-md-6">
            <a href="{{url('/register/visitant')}}" class=" btn btn-info col-sm-12" role="button">Visitante</a>
        </div>
        <div class="col-sm-12 col-md-6">
            <a href="{{url('/register/artist')}}" class=" btn btn-info col-sm-12" role="button">Artista/Galerista</a>
        </div>
    </div>
@endsection