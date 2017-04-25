@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center">Register</h1>
            </div>
            <div class="row">
                <form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="input-field col s12">
                        <input placeholder="Nombre" id="name" type="text" class="validate" name="name">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Nombre" id="surname" type="text" class="validate" name="surname">
                        <label for="first_name">Apellidos</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Nombre" id="dni" type="text" class="validate" name="dni">
                        <label for="first_name">DNI</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Nombre" id="email" type="email" class="validate" name="email">
                        <label for="first_name">Direccion E-mail</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Nombre" id="password" type="password" class="validate" name="password">
                        <label for="first_name">Contraseña</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Nombre" id="password-confirm" type="password" class="validate" name="password_confirmation">
                        <label for="first_name">Confirmar Contraseña</label>
                    </div>
                    <div class="input-field col s12">
                        <label>Materialize Disabled</label>
                        <select name="type">
                            <option value="" disabled>Choose your option</option>
                            <option value="1" selected>Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <input type="submit" class="btn" value="Registrarse">
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