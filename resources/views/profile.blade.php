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
                            <p>
                                @if(count($user->tags) > 0)
                                    <span style="font-weight: bold">Tags</span>
                            @foreach($user->tags as $tag)
                                <div class="chip">{{$tag->type}}</div>
                                @endforeach
                                @endif
                                </p>
                        </div>
                        <div class="row">
                            <p>
                                @if($user->extraInfo != null)
                                    @if($user->extraInfo->biografia != null)

                                        <span style="font-weight: bold">Biografía:</span>
                                        {{$user->extraInfo->biografia}}
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col s12">
                        <h5>Redes sociales</h5>
                        @if($user->extraInfo != null)
                            @if($user->extraInfo->twitter !=null)<a href="http://www.twitter.com/{{$user->extraInfo->twitter}}" target="_blank"><img class="responsive-img" style="height: 47px" src="{{url('/img/twitterB.png')}}"></a>@endif
                            @if($user->extraInfo->facebook !=null)<a href="http://www.facebook.com/{{$user->extraInfo->facebook}}" target="_blank"><img class="responsive-img" style="height: 50px" src="{{url('/img/facebookB.png')}}"></a>@endif
                            @if($user->extraInfo->instagram !=null)<a href="http://www.instagram.com/{{$user->extraInfo->instagram}}" target="_blank"><img class="responsive-img" style="height: 50px" src="{{url('/img/instagramB.png')}}"></a>@endif
                            @if($user->extraInfo->web !=null)<a href="http://{{$user->extraInfo->web}}" target="_blank"><img
                                        class="responsive-img" style="height: 46px"
                                        src="{{url('/img/weblogo.png')}}"></a>@endif
                        @endif
                    </div>
                </div>

                <!-- Cartilla laterial contacto/events -->

                <ul class="col s12 l6 offset-l1 collapsible " data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">contact_mail</i>Contactar</div>
                        <div class="collapsible-body">
                            <form id="contact">
                                {{csrf_field()}}
                                @if(!Auth::user())
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="email" placeholder="Email" name="email" id="email">
                                            <label for="email"></label>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" rows="500" name="motivo"
                                                  class="materialize-textarea"></textarea>
                                        <label for="textarea1">Motivo</label>
                                    </div>
                                </div>
                                <input type="hidden" name="emailTo" value="{{$user->email}}">
                                <input type="submit" id="enviarMail" class="btn orange lighten-1">
                            </form>
                            <div id="mensage" class="center" style="display: none">
                                <h5>Gracias por la Consulta</h5>
                            </div>
                        </div>
                    </li>
                    @if($user->extraInfo != null)
                        @if($user->extraInfo->location_name != null)
                            <li>
                                <div class="collapsible-header"><i class="material-icons">place</i>Localización</div>
                                <div class="collapsible-body">
                                    <div>

                                        <p>{{$user->extraInfo->location_name}}</p>
                                        <iframe
                                                width="100%"
                                                height="400"
                                                frameborder="0" style="border:0"
                                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDkRw7Dbky34kOXbPFosvrddO6rjKGkrVI&q={{$user->extraInfo->location_name}}"
                                                allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endif
                </ul>
                <div class="col s12 l6 offset-l1 center" style="margin-top: 5%;">
                    @if($user->obras()->count() > 0)
                        <h5>Última Obra</h5>
                        <br/>
                        <img class="z-depth-5 materialboxed responsive-img" height="300" style="margin: auto;" src='{{url($ultimaObra)}}'>
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
                addLike($(this));
            });

            $('.dislikeObra').click(function () {
                removeLike($(this));
            });

        });//end Document ready


        function addLike(formulario) {
            var form = $(formulario).closest('.formObra')[0];
            var button = $(formulario);
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
                        button.addClass('red');
                        button.removeClass('likeObra');
                        button.removeClass('green');
                        button.addClass('dislikeObra');

                        $(".dislikeObra").unbind("click");
                        $('.dislikeObra').click(function () {
                            removeLike(formulario);
                        });

                        button.find('i').html('thumb_down');
                        var likes = parseInt(button.closest('.col').find('.numLikes').html());
                        button.closest('.col').find('.numLikes').html(likes + 1);
                    } else {

                    }
                }, error: function (data) {
                    var error = data.responseJSON;
                    console.log(error);
                    $.each(error, function (key, value) {
                        Materialize.toast(value[0], 4000);
                    });
                }
            });
        };

        function removeLike(formulario) {
            var form = $(formulario).closest('.formObra')[0];
            var button = $(formulario);
            var formData = new FormData(form);

            $.ajax({
                url: "{{url('/like/remove')}}",
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data)
                    if (data == 1) {

                        button.addClass('green');
                        button.removeClass('dislikeObra');
                        button.removeClass('red');
                        button.addClass('likeObra');

                        $(".likeObra").unbind("click");
                        $('.likeObra').click(function () {
                            addLike(formulario);
                        });

                        button.find('i').html('thumb_up');
                        var likes = parseInt(button.closest('.col').find('.numLikes').html());
                        button.closest('.col').find('.numLikes').html(likes - 1);

                    } else {

                    }
                }, error: function (data) {
                    var error = data.responseJSON;
                    console.log(error);
                    $.each(error, function (key, value) {
                        Materialize.toast(value[0], 4000);
                    });
                }
            });
        }


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

        /*Ajax per mailing*/
        $("#contact").submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var form = $(this);
            $(form).hide('slow');
            $.ajax({
                url: "{{url('/mail/contact')}}",
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    Materialize.toast(data, 4000);
                    console.log(data);
                    $('#mensage').show('slow');
                }, error: function (data) {
                    var error = data.responseJSON;
                    console.log(error);
                    $.each(error, function (key, value) {
                        Materialize.toast(value[0], 4000);
                    });
                    $(form).show('slow');
                    $('#mensage').hide('slow');
                }
            });
        });
    </script>




@endsection

