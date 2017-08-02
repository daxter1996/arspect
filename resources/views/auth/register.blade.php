@extends('layouts.main')

@section('content')
    <div class="container" style="min-height: 80vh">
        <div class="row">
            <div class="col s12">
                <h1 class="center">Registrarte</h1>
            </div>
            <div class="row">
                <form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="input-field col s12 l6">
                        <input placeholder="" id="name" type="text" class="validate" name="name">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input placeholder="" id="apellidos" type="text" class="validate" name="surname">
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="" id="email" type="email" class="validate" name="email">
                        <label for="first_name">Direccion E-mail</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input placeholder="" id="password" type="password" class="validate" name="password">
                        <label for="first_name">Contraseña</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input placeholder="" id="password-confirm" type="password" class="validate" name="password_confirmation">
                        <label for="first_name">Confirmar Contraseña</label>
                    </div>
                    <div class="input-field col s12">
                        <select id="type" name="type">
                            <option value="1" selected>Coleccionista</option>
                            <option value="2">Artista</option>
                        </select>
                        <label for="type">Tipo de usuario</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="submit" class="btn orange darken-2" value="Registrarse">
                    </div>
                </form>
            </div>
            @if (count($errors) > 0)
                <ul class="red lighten-3 z-depth-2" style="border-radius: 5px; padding: 10px">
                    <strong>Error!</strong>
                    @foreach($errors->all() as $error)
                        <li>- {{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection