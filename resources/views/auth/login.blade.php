@extends('layouts.main')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center">Login</h1>
            </div>
            <div class="row">
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="input-field col s12">
                        <input placeholder="Email" id="name" type="text" class="validate" name="email">
                        <label for="first_name">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Contraseña" id="surname" type="password" class="validate" name="password">
                        <label for="first_name">Contraseña</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="submit" class="btn orange darken-2" value="Login">
                    </div>
                </form>
            </div>
            @if (count($errors) > 0)
                <ul class="red darken-3 white-text z-depth-2" style="border-radius: 5px; padding: 20px">
                    <strong>Error!</strong>
                    @foreach($errors->all() as $error)
                        <li>- {{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

















@endsection
