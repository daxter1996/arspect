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
                        <input placeholder="Nombre" id="password-confirm" type="password" class="validate" name="password-confirm">
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
            @if ($errors)
                <ul>
                @foreach($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            @endif
        </div>
    </div>





<br/>

<hr/>







<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">DNI</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required autofocus>

                                @if ($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Direccion E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma Contraseña</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Registrarse Como</label>
                            <div class="col-md-6">
                                <select id="type" class="form-control" name="type" required>
                                    <option value="1">Usuario</option>
                                    <option value="2">Galerista</option>
                                    <option value="3">Artista</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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