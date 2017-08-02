@extends('layouts.main')

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
                <div class="col s12 l5 z-depth-2" style="padding: 20px">
                    <!-- Foto Perfil + Overlay -->
                    <div class="col s12 m12 center">

                        <div>
                            @if(public_path('uploads/profile/' . $user->id . '/' . $user->avatar))
                                <img src="{{url('uploads/profile/' . $user->id . '/' . $user->avatar)}}"
                                     alt="Avatar" class="over-image responsive-img" style="width:100%">
                            @else
                                <img src="" alt="Avatar" class="over-image responsive-img" style="width:100%">
                            @endif
                        </div>

                    </div>
                    <div id="mostrarInfo" class="col s12">
                        <!-- Cartilla Informacio de usuari-->
                        <div class="row">
                            <h3> {{$user->name . " " . $user->surname}} </h3>
                            <p><span style="font-weight: bold">Tags</span> @foreach($user->tags as $tag)
                                <div class="chip">{{$tag->type}}</div> @endforeach</p>
                        </div>
                        <div class="row">
                            <span style="font-weight: bold">Biografía:</span>
                            <p>@if($user->extraInfo != null){{$user->extraInfo->biografia}} @endif</p>
                        </div>
                    </div>
                </div>

                <!-- Cartilla laterial contacto/events -->

                <ul class="col s12 l6 offset-l1 collapsible " data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">contact_mail</i>Contactar</div>
                        <div class="collapsible-body">
                            <form>
                                @if(!Auth::user())
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="email" placeholder="Email" id="email">
                                            <label for="email"></label>
                                        </div>
                                    </div>
                                @endif
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
                <div class="col s12 l6 offset-l1 center" style="margin-top: 5%;">
                    @if($user->obras()->count() > 0)
                        <h5>Última Obra</h5>
                        <br/>
                        <img class="z-depth-5 materialboxed responsive-img" height="300" style="margin: auto;"
                             src='{{url($ultimaObra)}}'>
                    @endif
                </div>
            </div>
        </div>

        <!-- Tab de Events -->

        <div id="eventos">
            <div class="col s12">
                <div id="llistaEvents" class="row">
                    @foreach($user->events as $event)
                        @include('events.event1')
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Tab de Obras -->

        <div id="obras">
            <div class="col s12 m12" id="galeria">
                <div class="row">
                    <br/>
                    @foreach($user->obras()->orderBy('created_at', 'desc')->get() as $obra)
                        @include('obras.obra1')
                    @endforeach
                </div>
            </div>
        </div>
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

            $('.likeObra').click(function () {
                var form = $(this).closest('.formObra')[0];
                var button = $(this);
                var formData = new FormData(form);

                $.ajax({
                    url: "{{url('/like/add')}}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        if (data == 1) {
                            console.log(data);
                            button.addClass('green');
                            button.find('i').html('thumb_down');
                            var likes = parseInt(button.closest('.row').find('.numLikes').html());
                            button.closest('.row').find('.numLikes').html(likes + 1);
                        } else {
                            console.log('dislike');
                        }
                    }, error: function (data) {
                        var error = data.responseJSON;
                        console.log(error);
                        $.each(error, function (key, value) {
                            Materialize.toast(value[0], 4000);
                        });
                    }
                });
            });

        });//end Document ready

        $(document).ready(function () {
            $('.tooltipped').tooltip({delay: 50});
        });


        $(document).ready(function () {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });

        /*Form IMG*/

        $('.noLogin').click(function () {
            Materialize.toast("Debes registrarte para dar like", 2000);
        });

    </script>



@endsection

