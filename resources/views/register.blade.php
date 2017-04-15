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
            <hr/>
            <h2>Que puede hacer un visitante</h2>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <a href="{{url('/register/artist')}}" class=" btn btn-info col-sm-12" role="button">Artista/Galerista</a>
            <hr/>
            <h2>Que puede hacer un artista / galerista</h2>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
        </div>
    </div>
@endsection