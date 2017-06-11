@extends('layouts.main')

@section('content')

    <div class="row" style="margin-top: 30px;">
        <div class="col s12 m5 z-depth-2" style="padding: 20px">
            <img class="responsive-img col s12 m6 offset-m3 center" src="{{url('/img/TEST/IMG_20170515_112801.jpg')}}">
            <div class="col s12">
                <h3> Magdalena Alles Bosch </h3>
                <p><strong>Tags:</strong>
                <div class="chip">Figura</div>
                <div class="chip">Impresionista</div>
                <div class="chip">Retrato</div>
                </p>
                <p><strong>Biografía:</strong>
                <div>
                    <p>Magdalena Allés Bosch, nace en Ciutadella de Menorca en 1960, donde aún reside.
                    Despierta su interés por el dibujo y pintura desde temprana edad. De formación autodidacta aprende
                    a trabajar con diferentes técnicas como el dibujo, pastel, carboncillos, acrílico y óleos.
                    Actualmente pinta al óleo por considerar la técnica más noble.</p>

                    <p>"Desde que comencé a pintar siempre he tratado de representar la cosas lo más real que puedo,
                    algunas veces lo logro y otra no pero lo que es un hecho es que para mí es muy difícil hacer lo
                    contrario. Disfruto mucho del reto de pintar retrato y figura, me gusta reproducir la expresión de las
                    personas lo más natural posible."</p>
                </div>
                </p>
            </div>
        </div>
        <ul class="col s12 m6 offset-l1 collapsible " data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">contact_mail</i>Contactar</div>
                <div class="collapsible-body">
                    <form>
                        <div class="row">
                            @if(!Auth::check())
                                <div class="input-field col s12">
                                    <input type="text" name="correo">
                                    <label for="textarea1">Email</label>
                                </div>
                            @endif
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16798.637276470028!2d3.826517808599555!3d39.994513795720195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12be035c34fdeb71%3A0x402af6ed721fec0!2sCiudadela%2C+Islas+Baleares!5e0!3m2!1ses!2ses!4v1494793503404"
                            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">event</i>Eventos</div>
                <div class="collapsible-body">
                    <div class="row">
                        <a href="{{url("/events")}}" class="col s12 z-depth-1 black-text grey lighten-3"
                           style="padding: 10px; border-radius: 10px">
                            <strong> Exposición La Casa Amarilla </strong>
                            <p><strong>Descripción: </strong> Muestra de las ultimas obras del Pintor Vincent van Gogh.
                            </p>
                            <p><strong>Localización: </strong> Zundert, Paises Bajos</p>
                        </a>
                    </div>
                    <div class="row">
                        <a href="{{url("/events")}}" class="col s12 z-depth-1 black-text grey lighten-3"
                           style="padding: 10px; border-radius: 10px">
                            <strong> Feria Internacional de Arte Emergente </strong>
                            <p><strong>Descripción: </strong> Descubra las nuevas promesas en el mundo del arte. </p>
                            <p><strong>Localización: </strong> Barcelona </p>
                        </a>
                    </div>
                    <div class="row">
                        <a href="{{url("/events")}}" class="col s12 z-depth-1 black-text grey lighten-3"
                           style="padding: 10px; border-radius: 10px">
                            <strong> Art & Breakfast </strong>
                            <p><strong>Descripción: </strong> Disfrute del arte mientras se toma un desayuno.</p>
                            <p><strong>Localización: </strong> Holanda </p>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="col s12 m6 offset-l1" style="margin-top: 5%;">
            <a class="btn orange lighten-2 grey-text-text col s12" href="#galeria">Galería</a>
        </div>
        <div class="col s12 m6 offset-l1 center">
            <br/>
            <h5>Ultima Obra</h5>
            <img class="z-depth-5 materialboxed responsive-img hide-on-small-and-down" height="300" width="70%" style="margin: auto;" src="{{'img/TEST/' .  last(explode('/', $obras[0]))}}">
            <img class="z-depth-5 materialboxed responsive-img hide-on-med-and-up" height="300" width="100%" style="margin: auto;" src="{{'img/TEST/' .  last(explode('/', $obras[0]))}}">
        </div>
        <div class="col s12 m12 center" style="margin-top: 5%;" id="galeria">
            <h4>Galería</h4>
            @foreach($obras as $obra)
                <img class="materialboxed col m3 s12" style="margin-top: 10px"
                     src="{{url('img/TEST/' . last(explode('/', $obra)))}}" data-caption="">
            @endforeach

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

        $('.carousel.carousel-slider').carousel({fullWidth: true});

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
    </script>
@endsection