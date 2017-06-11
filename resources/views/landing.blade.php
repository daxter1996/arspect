@extends('layouts.landing')


@section('noContainer')
    <div id="principal">
        <div class="cosa main" style="background-image: url({{url('/img/landing/fonsD.jpg')}}); background-size: cover">
            <div class="row">
                <div class="col s12">
                    <div class="row" style="margin-top: 100px">
                        <div class="col m6 s12 offset-m3"><img src="{{url("/img/logoLetra.png")}}"
                                                               class="responsive-img"></div>
                    </div>
                    <div class="row">
                        <h2 class="center white-text">El buscador de Arte</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="cosa" style="margin-bottom: -20px" id="1">
            <div class="container row paddin">
                <div class="col s12 m6">
                    <img class="responsive-img" src="{{url('/img/landing/mac2.png')}}">
                </div>
                <div class="col s12 m6">
                    <h3 class="center">¿Qué es Arspect?</h3>
                    <p class="center">Arspect es una nueva plataforma de arte donde artistas y galerías pueden conseguir
                        más
                        visibilidad. Y además, donde cualquier persona interesada en el arte pueda encontrar el arte que
                        buscaba. Todo ello de una forma ¡fácil y sencilla!</p>
                </div>
            </div>

        </div>
        <div class="cosa orange darken-3 white-text" id="2" style="margin-bottom: -20px">
            <div class="container row paddin">
                <div class="col m6 s12 hide-on-small-only" style="margin-top: 15%">
                    <h3 class="center">¿Te interesa el arte?</h3>
                    <p class="center">¡Este es tu lugar! Aquí podrás encontrar todo aquello que se está cociendo en este
                        fantástico mundo y muy cerca de ti. ¡Y solo en dos clics!</p>
                </div>
                <div class="col m6 s12 hide-on-med-and-up">
                    <h3 class="center">¿Te interesa el arte?</h3>
                    <p class="center">¡Este es tu lugar! Aquí podrás encontrar todo aquello que se está cociendo en este
                        fantástico mundo y muy cerca de ti. ¡Y solo en dos clics!</p>
                </div>
                <div class="col s12 offset-m2 m3">
                    <img class="responsive-img" src="{{url('/img/landing/iphone.png')}}">
                </div>
            </div>
        </div>

        <div class="cosa" id="3" style="margin-bottom: -20px">
            <div class="row paddin hide-on-small-only">
                <div class="col s12 m6" style="margin-top: 10px">
                    <div class="z-depth-2 foto"
                         style="background-image: url({{url('/img/landing/galeria.jpg')}}); background-size: cover; height: 400px; border-radius: 5px">
                        <div style="background-color: rgba(255,255,255,0.5);height: 100%; padding-left: 5%; padding-right: 5%; padding-top: 10%">
                            <br/>
                            <h4 class="center">¿Eres una galería? </h4>
                            <p class="center bold">¿Quieres darte a conocer? Y… ¿Quieres publicitar todos tus eventos y
                                obras?
                                Entonces, Arspect te está esperando … </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6" style="margin-top: 10px">
                    <div class="z-depth-2 foto"
                         style="background-image: url({{url('/img/landing/artista.jpg')}}); background-size: cover; height: 400px; border-radius: 5px">
                        <div style="background-color: rgba(255,255,255,0.5);height: 100%; padding-left: 5%; padding-right: 5%; padding-top: 10%">
                            <br/>
                            <h4 class="center">¿Eres un artista? </h4>
                            <p class="center bold">Sal al mundo y da a conocer todo lo que estas creando, de la forma
                                más fácil y
                                sencilla que te puedas imaginar ¿A qué estás esperando? ¡Arspect es tu lugar! </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row paddin hide-on-med-and-up">
                <div class="col s12 m6" style="margin-top: 10px">
                    <div class="z-depth-2 foto"
                         style="background-image: url({{url('/img/landing/galeria.jpg')}}); background-size: cover; height: 400px; border-radius: 5px">
                        <div style="background-color: rgba(255,255,255,0.5);height: 100%; padding-left: 5%; padding-right: 5%;">
                            <br/>
                            <h4 class="center">¿Eres una galería? </h4>
                            <p class="center bold">¿Quieres darte a conocer? Y… ¿Quieres publicitar todos tus eventos y
                                obras?
                                Entonces, Arspect te está esperando … </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6" style="margin-top: 10px">
                    <div class="z-depth-2 foto"
                         style="background-image: url({{url('/img/landing/artista.jpg')}}); background-size: cover; height: 400px; border-radius: 5px">
                        <div style="background-color: rgba(255,255,255,0.5);height: 100%; padding-left: 5%; padding-right: 5%;">
                            <br/>
                            <h4 class="center">¿Eres un artista? </h4>
                            <p class="center bold">Sal al mundo y da a conocer todo lo que estas creando, de la forma
                                más fácil y
                                sencilla que te puedas imaginar ¿A qué estás esperando? ¡Arspect es tu lugar! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cosa orange darken-3 white-text" id="4" style="margin-bottom: -20px">
            <div class="row container paddin">
                <h3 class="center">¿Quieres ser el primero en enterarte de nuestras novedades?</h3>
                <h5 class="center">Danos tu email</h5>
                <form id="subscribe" class="row white z-depth-2" style="border-radius: 5px">
                    {{csrf_field()}}
                    <div class="input-field col s12 black-text">
                        <input name="email" id="email" type="email">
                        <label for="email">Email</label>
                    </div>
                </form>
                <button id="send" class="col m2 offset-s5 btn waves-button-input center orange">Enviar</button>
            </div>
        </div>

        <div class="cosa" id="5" style="margin-bottom: -20px">
            <div class="row container">
                <br/>
                <h3 class="center">Team Arspect</h3>
                <div class="row" style="margin-top: 80px">
                    <div class="col s10 m3 offset-s1 offset-m2 z-depth-3" style="padding-top: 10px;">
                        <div>
                            <img class="responsive-img" src="{{url('/img/Josep.png')}}">
                        </div>
                        <div style="min-height: 150px;">
                            <strong>Josep Arguimbau Marqués</strong>
                            <ul>
                                <li>CEO & Founder</li>
                            </ul>
                        </div>
                        <div>
                            <a href="https://es.linkedin.com/in/josep-arguimbau-marques-70a730117" target="_blank"><img src="{{url('/img/linkedin.png')}}" style="height: 25px;margin-bottom: 4px"></a>
                        </div>
                    </div>
                    <div class="col s10 m3 offset-s1 offset-m2 z-depth-3" style="padding-top: 10px;">
                        <div>
                            <img class="responsive-img" src="{{url('/img/Jesus.png')}}">
                        </div>
                        <div style="min-height: 150px;">
                            <strong>Jesús Liz Allés</strong>
                            <ul>
                                <li>Web Developer</li>
                                <li>Frontend & Backend</li>
                            </ul>
                        </div>
                        <div>
                            <img src="{{url('/img/linkedin.png')}}" style="height: 25px;margin-bottom: 4px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cosa orange darken-3 white-text" id="6" style="margin-bottom: -20px">
            <div class="row container">
                <br/>
                <h3 class="center">Contacto</h3>
                <div class="row">
                    <form class="col m6 s12 white z-depth-2 offset-m3" style="border-radius: 3px; padding: 20px"
                          method="POST" action="{{url('/contacto')}}">
                        {{csrf_field()}}
                        <div class="row" style="margin-bottom: -20px ">
                            <div class="input-field col s12">
                                <input placeholder="Nombre" id="nombre" type="text" name="nombre" class="validate">
                                <label for="nombre">Nombre Completo</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="text" name="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="consulta" name="consulta" class="materialize-textarea"></textarea>
                                <label for="consulta">Consulta</label>
                            </div>
                            <div class="input-field col s12">
                                <div class="g-recaptcha" data-sitekey="6LfOh_4SAAAAAIM3VeWM_zVzYKskJ5PQokQNz2w4"></div>
                            </div>
                            <div class="col s12">
                                <br/>
                                <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
                            </div>
                        </div>
                        <input type="submit" class="btn waves-effect orange darken-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript">
        $('a.scroll').click(function (e) {
            e.preventDefault();
            $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
        });

        $(document).ready(function () {
            $('.main').css('height', $(window).height());
            $(document).scroll(function () {
                var scroll = $(this).scrollTop();
                var topDist = $("body").position();
                if (scroll > topDist.top) {
                    $('nav').css({"position": "fixed", "top": "0"});
                } else {
                    $('nav').css({"position": "static", "top": "auto"});
                }
            });



        });

        $(window).resize(function () {
            $('.main').css('height', $(window).height());
            $('.foto').each(function () {
                $(this).css('height', ($(this).width() / 16) * 9);
            });
        });


        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top -50
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });


        /*Subscribe*/



        $(document).ready(function () {

            $('#send').on('click',function () {
                $("#subscribe").submit();
            });


            $("#subscribe").submit(function (e) {
                e.preventDefault();
                var formData = new FormData(this);
               $.ajax({
                    url: "{{url('/subscriber')}}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        Materialize.toast(data, 4000);
                    }, error: function (data) {
                        var error = data.responseJSON;
                        console.log(error);
                        $.each(error, function (key, value) {
                            Materialize.toast(value[0], 4000);
                        })

                    }
                });
            });
        });


    </script>
@endsection