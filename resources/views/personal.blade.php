@extends('layouts.main')

@section('header')



@endsection

@section('noContainer')

    <!-- Selector de Tabs -->

    <div class="col s12">
        <ul class="tabs orange darken-3">
            <li class="tab col s3 "><a class="white-text" href="#perfil">Vista general</a></li>
            <li class="tab col s3"><a class="white-text " href="#eventos">Eventos</a></li>
            <li class="tab col s3"><a class="white-text " href="#obras">Galeria</a></li>
        </ul>
    </div>

@endsection

@section('content')
    <div style="min-height: 70vh;">
        <div class="row" style="margin-top: 30px;"><!-- Perfil General -->
            <div id="perfil">
                <div class="col s12 m5 z-depth-2" style="padding: 20px">
                    <!-- Foto Perfil + Overlay -->
                    <div class="col s12 m12 center">
                        <div class="col s12 over-container">
                            <div>
                                @if(count(Storage::files('public/profile/'.Auth::user()->id)) > 0)
                                    <img src="{{url('../storage/app/'. Storage::files('/public/profile/'.Auth::user()->id)[0])}}"
                                         alt="Avatar" class="over-image responsive-img" style="width:100%">
                                @else
                                    <img src="" alt="Avatar" class="over-image responsive-img" style="width:100%">
                                @endif
                            </div>
                            <div class="over-middle">
                                <form enctype="multipart/form-data" id="profilePhotoForm"
                                      action="{{url('/profilePhotoUpload')}}" method="POST">
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
                    <div id="mostrarInfo" class="col s12">
                        <!-- Cartilla Informacio de usuari-->
                        <div class="row">
                            <h3> {{Auth::user()->name . " " . Auth::user()->surname}} </h3>
                            <strong>Tags</strong>
                            <div class="chips"></div>
                        </div>
                        <div class="row">
                            <strong>Biografía:</strong>
                            <p>@if(Auth::user()->extraInfo != null){{Auth::user()->extraInfo->biografia}} @endif</p>
                        </div>
                        <button id="editarInfoBtn" style="margin-bottom: 20px" class="btn orange darken-2">Editar
                            Información
                        </button>
                    </div>

                    <div id="editarInfo" class="col s12" style="margin-bottom: 20px; margin-top: 20px; display: none">
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

                <!-- Cartilla laterial contacto/events -->

                <ul class="col s12 m6 offset-l1 collapsible " data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">contact_mail</i>Contactar</div>
                        <div class="collapsible-body">
                            <form>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" rows="500" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Motivo</label>
                                    </div>
                                </div>
                                <input type="submit" class="btn orange lighten-1">
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Localización</div>
                        <div class="collapsible-body">
                            <div class="row"><a class="btn-floating btn-small waves-effect waves-light orange darken-1"><i
                                            class="material-icons">add</i></a> <strong>&nbsp;&nbsp;Editar
                                    Localizacion</strong>
                            </div>

                            <div style="display: none">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.7776367884426!2d4.652552516016148!3d51.48059577963073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c41c4ed2a6d579%3A0x251c503b97429b04!2sKlein-Zundert%2C+Pa%C3%ADses+Bajos!5e0!3m2!1ses!2ses!4v1493240024096"
                                        width="100%" height="400" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.7776367884426!2d4.652552516016148!3d51.48059577963073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c41c4ed2a6d579%3A0x251c503b97429b04!2sKlein-Zundert%2C+Pa%C3%ADses+Bajos!5e0!3m2!1ses!2ses!4v1493240024096"
                                        width="100%" height="400" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                <button class="btn orange darken-1">Guardar</button>
                            </div>

                        </div>
                    </li>
                </ul>
                <div class="col s12 m6 offset-l1 center" style="margin-top: 5%;">
                    @if(Auth::user()->obras()->count() > 0)
                        <h5>Ultima Obra</h5>
                        <br/>
                        <img class="z-depth-5 materialboxed responsive-img" height="300" style="margin: auto;"
                             src='{{url('../storage/app/public/profile/'. Auth::user()->id . '/obras/' . DB::table('obras')->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first()->url)}}'>
                    @endif
                </div>
            </div>
        </div>

        <!-- Tab de Events -->

        <div id="eventos">
            <div class="row">
                <a href="{{url('/addEvent')}}"
                   class="btn-floating btn-small waves-effect waves-light orange darken-1"><i
                            class="material-icons">add</i></a>
                <strong>&nbsp;&nbsp;Añadir Evento</strong>
                <br/>
                <br/>
                <div id="llistaEvents" class="row">
                    @foreach(Auth::user()->events as $event)
                        @include('events.event')
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Tab de Obras -->

        <div id="obras">
            <div class="col s12 m12" id="galeria">
                <a href="#modalGallery" class="btn-floating btn-small waves-effect waves-light orange darken-1">
                    <i class="material-icons">add</i>
                </a><strong>&nbsp&nbsp;Añadir Obra</strong>
                <div class="row">
                    <br/>
                    @foreach(Auth::user()->obras as $obra)
                        @include('obras.obra')
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Modal Galeria -->

        <div id="modalGallery" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Añade una Obra</h4>
                <div class="row">
                    <form class="col s12" method="POST" enctype="multipart/form-data" action="{{url('/obra/add')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="input-field">
                                <input id="name" type="text" name="name">
                                <label for="name"> Nombre de la obra </label>
                            </div>
                            <div class="input-field">
                                <input id="descripcion" type="text" name="descripcion">
                                <label for="descripcion"> descripcion de la obra </label>
                            </div>
                            <div class="file-field input-field">
                                <div class="btn waves-effect waves-light orange darken-1">
                                    <span>Foto</span>
                                    <input type="file" name="obraFoto">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <div class="file-field input-field">
                                <input class="btn waves-effect waves-light orange darken-1" type="submit">
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
            </div>
        </div>
    </div>
    <div id="errors">

    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function () {
            $('.collapsible').collapsible();
        });
        $(document).ready(function () {
            $('.materialboxed').materialbox();
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

        $(document).ready(function () {
            $('.tooltipped').tooltip({delay: 50});
        });


        $(document).ready(function () {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });

        /*Form IMG*/


        $('#profileImg').change(function () {
            $('#profilePhotoForm').submit();
        });

        /*Chips tags*/

        $('.chips').material_chip({
            data: [
                    @foreach(Auth::user()->tags as $tag)
                {
                    tag: '{{ $tag->type}}',
                },
                @endforeach
            ]
        });

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.chips').on('chip.add', function (e, chip) {//Add A Chip
                $.ajax({
                    url: "{{url('/addTag')}}",
                    type: "POST",
                    data: JSON.stringify({tag: chip.tag}),
                    contentType: "application/json; charset=utf-8",
                    cache: false,
                    processData: false,
                    success: function (data) {
                        console.log(data)
                    }, error: function () {
                    }
                });
            });

            $('.chips').on('chip.delete', function (e, chip) {//Delete a Chip
                $.ajax({
                    url: "{{url('/removeTag')}}",
                    type: "POST",
                    data: JSON.stringify({tag: chip.tag}),
                    contentType: "application/json; charset=utf-8",
                    cache: false,
                    processData: false,
                    success: function (data) {
                        console.log(data)
                    }, error: function () {
                    }
                });
            });

            $('.buttonDeleteEvent').click(function () {

                var form = $(this).closest('form')[0];

                var formData = new FormData(form);

                $(this).closest('.row').hide('slow');

                $.ajax({
                    url: "{{url('/deleteEvent')}}",
                    type: "POST",
                    data: formData,
                    mimeTypes: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        Materialize.toast('Evento Elminado', 2000)
                    }, error: function () {
                        alert("okey");
                    }
                });
            });


            $('.removeImage').click(function () {
                var form = $(this).closest('.formasdf')[0];

                var formData = new FormData(form);

                $(this).closest('.col').hide('slow');

                $.ajax({
                    url: "{{url('/obra/delete')}}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        //console.log(data);
                        //$('#errors').html(data);
                        Materialize.toast(data, 3000)
                    }, error: function (data) {
                        var error = data.responseJSON;
                        console.log(error);
                        $.each(error, function (key, value) {
                            Materialize.toast(value[0], 4000);
                        });
                    }
                });
            });
        });
        /*End Document Ready*/

    </script>



@endsection

