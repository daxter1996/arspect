@extends('layouts.main')

@section('header')



@endsection

@section('noContainer')

    <!-- Selector de Tabs -->

    <div class="col s12">
        <ul class="tabs orange darken-3">
            <li class="tab col s3 "><a class="white-text" href="#perfil">Vista general</a></li>
        </ul>
    </div>

@endsection

@section('content')
    <div style="min-height: 70vh;">
        <div class="row" style="margin-top: 30px;"><!-- Perfil General -->
            <div id="perfil">
                <div class="col s12 z-depth-2" style="padding: 20px">

                    <!-- Foto Perfil + Overlay -->

                    <div class="col s12 l6 center">
                        <div class="col s12 over-container">
                            <div>
                                @if($user->avatar != null)
                                    @if(public_path('uploads/profile/' . $user->id . '/' . $user->avatar))
                                        <img src="{{url('uploads/profile/' . $user->id . '/' . $user->avatar)}}"
                                             alt="Avatar" class="over-image responsive-img" style="width:100%">
                                    @endif
                                @else
                                    <img src="{{url('/img/noImage.png')}}" alt="Avatar"
                                         class="over-image responsive-img" style="width:100%">
                                @endif
                            </div>
                            <div class="over-middle">
                                <form enctype="multipart/form-data" id="profilePhotoForm" action="{{url('/profilePhotoUpload')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="file-field input-field">
                                        <div class="selectImg btn-floating btn-small waves-effect waves-light red">
                                            <span><i class="material-icons">add</i></span>
                                            <input type="file" name="profileImg">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input style="display: none" id="profileImg" class="file-path validate"
                                                   type="text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="mostrarInfo" class="col s12 l6">
                        <!-- Cartilla Informacio de usuari-->
                        <div class="row">
                            <h3> {{Auth::user()->name . " " . Auth::user()->surname}} </h3>
                        </div>
                        <div class="row">
                            <strong style="font-weight: bold">Biografía:</strong>
                            <p>@if(Auth::user()->extraInfo != null){{Auth::user()->extraInfo->biografia}} @endif</p>
                        </div>
                        <button id="editarInfoBtn" style="margin-bottom: 20px" class="btn orange darken-2">Editar
                            Información
                        </button>
                    </div>

                    <div id="editarInfo" class="col s12 m5" style="margin-bottom: 20px; margin-top: 20px; display: none">
                        <!-- Cartilla Informacio de usuari-->
                        <form method="post" action="{{url('extraInfo/save')}}">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="nombre" name="name" value="{{Auth::user()->name}}">
                                    <label for="nombre">Nombre</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="surname" name="surname" value="{{Auth::user()->surname}}">
                                    <label for="surname">Apellidos</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="dni" name="dni"
                                           value="@if(Auth::user()->extraInfo != null){{Auth::user()->extraInfo->dni}} @endif">
                                    <label for="dni">DNI</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="biografia" class="materialize-textarea"
                                              name="biografia">@if(Auth::user()->extraInfo != null){{Auth::user()->extraInfo->biografia}} @endif</textarea>
                                    <label for="biografia">Biografia</label>
                                </div>
                            </div>
                            <input type="submit" class="btn button orange darken-2" value="Guardar Información">
                        </form>
                        <br/>
                        <button id="cancelar" class="btn button red darken-1">Cancelar</button>
                        <form method="POST" action="{{url('/logout')}}" style="margin-top: 20px">
                            {{csrf_field()}}
                            <input type="submit" class="button btn orange darken-2" value="LogOut">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script type="text/javascript">

        $(document).ready(function () {
            $('.tooltipped').tooltip({delay: 50});
        });

        $('#profileImg').change(function () {
            $('#profilePhotoForm').submit();
        });
        // Add smooth scrolling to all links
        $(document).ready(function () {
            $('#editarInfoBtn').on('click', function () {
                $('#mostrarInfo').css('display', 'none');
                $('#editarInfo').css('display', 'block');
            });

            $('#cancelar').on('click', function () {
                $('#mostrarInfo').css('display', 'block');
                $('#editarInfo').css('display', 'none');
            });

            $("a").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {
                        window.location.hash = hash;
                    });
                }
            });
        });


    </script>

@endsection

