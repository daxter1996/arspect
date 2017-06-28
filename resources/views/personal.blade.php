@extends('layouts.main')

@section('header')



@endsection

@section('noContainer')

    <!-- Selector de Tabs -->

    <div class="col s12">
        <ul class="tabs orange darken-3">
            <li class="tab col s3 "><a class="white-text" href="#perfil">Vista general</a></li>
            <li class="tab col s3"><a class="white-text " href="#eventos">Eventos</a></li>
            <li class="tab col s3"><a class="white-text " href="#obras">Obras</a></li>
        </ul>
    </div>

@endsection

@section('content')

    <div class="row" style="margin-top: 30px;">
        <div id="perfil">
            <div class="col s12 m5 z-depth-2" style="padding: 20px">
                <!-- Foto Perfil + Overlay -->
                <div class="col s12 m12 center">
                    <div class="col s12 over-container">
                        <div>
                            @if(count(Storage::files('public/profile/'.Auth::user()->id)) > 0)
                                <img src="{{url('../storage/app/'. Storage::files('/public/profile/'.Auth::user()->id)[0])}}" alt="Avatar" class="over-image responsive-img" style="width:100%">
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
                                        <input style="display: none" id="profileImg" class="file-path validate" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <!-- Cartilla Informacio de usuari-->
                    <h3> {{Auth::user()->name . " " . Auth::user()->surname}} </h3>
                    <p>
                        <strong>Tags</strong>
                    <div class="chips"></div>

                    <p><strong>Biografía:</strong>
                    <div>
                        Nació el 30 de marzo de 1853. Hijo de un austero y humilde pastor protestante neerlandés llamado
                        Theodorus y de su mujer Anna Cornelia, Vincent recibió el mismo nombre que le habían puesto a un
                        hermano que nació muerto exactamente un año antes. El 1 de mayo de 1857 nació su hermano Theo y
                        ambos tuvieron cuatro hermanos más: Cornelius Vincent, Elisabetha Huberta, Anna Cornelia y
                        Wilhelmina Jacoba.

                        Durante la infancia acudió a la escuela de manera discontinua e irregular, pues sus padres le
                        enviaron a diferentes internados. El primero de ellos en Zevenbergen en 1864, donde estudió
                        francés
                        y alemán.6 Dos años después se matriculó en el Instituto Hannik (Tilburg) y permaneció allí
                        hasta
                        que dejó los estudios de manera definitiva a los 15 años.7 Allí nació su afición por la pintura,
                        aunque durante el resto de su vida se enorgulleció de ser autodidacta.
                    </div>
                    </p>
                </div>
                <form method="POST" action="{{url('/logout')}}">
                    {{csrf_field()}}
                    <input type="submit" class="button btn orange darken-2" value="LogOut">
                </form>
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
                                    width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.7776367884426!2d4.652552516016148!3d51.48059577963073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c41c4ed2a6d579%3A0x251c503b97429b04!2sKlein-Zundert%2C+Pa%C3%ADses+Bajos!5e0!3m2!1ses!2ses!4v1493240024096"
                                    width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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

        $(document).ready(function(){
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

