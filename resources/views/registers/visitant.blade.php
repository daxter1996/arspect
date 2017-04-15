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
    <div id="caixa" class="row" style="margin-top: 50px">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6" style="margin: 10px">
            <h1 style="text-align: center;">Register</h1>
            <hr/>
            <form>
                <div class="form-group">
                    <label for="email">Nombre</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Apellidos</label>
                    <input type="text" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Email</label>
                    <input type="email" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Contraseña</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection