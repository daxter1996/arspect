@extends('layouts.main')

@section('nav')

    <nav class="navbar navbar-default ">
        <div class="container">

            <div class="navbar-header">
                <a href="#" class="navbar-brand"> Arspect </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobileDrop">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mobileDrop">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="navbar-right"> Login </a></li>
                    <li><a class="navbar-right"> Register </a></li>
                </ul>
            </div>
        </div>
    </nav>

@endsection

@section('content')
    <div class="row" style="margin-top: 20%">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><i class="material-icons" style="font-size: 17px">search</i></span>
                <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon1">
            </div>
        </div>
    </div>
@endsection