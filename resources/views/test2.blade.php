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
                <div class="col s12 m5 z-depth-2" style="padding: 20px">
                    <!-- Foto Perfil + Overlay -->
                    <div class="col s12 m12 center">
                        <img class="responsive-img col s12 m6 offset-m3 center" src="{{url('/img/TEST/IMG_20170515_112801.jpg')}}">
                    </div>
                    <div id="mostrarInfo" class="col s12">
                        <!-- Cartilla Informacio de usuari-->
                        <h4> Magdalena Alles Bosch </h4>
                        <p><strong>Tags:</strong>
                        <div class="chip">Figura</div>
                        <div class="chip">Impresionista</div>
                        <div class="chip">Retrato</div>
                        </p>
                        <p><strong>Biografía:</strong>
                            <div>
                        <p>Magdalena Allés Bosch, nace en Ciutadella de Menorca en 1960, donde aún reside.
                            Despierta su interés por el dibujo y pintura desde temprana edad. De formación autodidacta
                            aprende
                            a trabajar con diferentes técnicas como el dibujo, pastel, carboncillos, acrílico y óleos.
                            Actualmente pinta al óleo por considerar la técnica más noble.</p>

                        <p>"Desde que comencé a pintar siempre he tratado de representar la cosas lo más real que puedo,
                            algunas veces lo logro y otra no pero lo que es un hecho es que para mí es muy difícil hacer
                            lo
                            contrario. Disfruto mucho del reto de pintar retrato y figura, me gusta reproducir la
                            expresión de las
                            personas lo más natural posible."</p>
                    </div>
                    </p>
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
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.049345176691!2d3.8419144138684325!3d39.98500258458075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12be03ec9823b841%3A0x85e3af1b95a134b3!2sCarrer+de+s&#39;Abatzer%2C+62%2C+07769+Ciutadella+de+Menorca%2C+Illes+Balears!5e0!3m2!1ses!2ses!4v1499247373554" class="col s12"  height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="col s12 m6 offset-l1 center" style="margin-top: 1%;">
                <div class="col s12 m10 offset-l1 center" style="margin-top: 5%;">
                        <h5>Ultima Obra</h5>
                        <br/>
                        <img class="z-depth-5 materialboxed responsive-img" height="300" style="margin: auto;"
                             src='{{url('/img/TEST/IMG_20161212_103456.jpg')}}'>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab de Events -->

    <div id="eventos">
        <div class="row">
            <div id="llistaEvents" class="row">
                <div class="row">
                    <div class="col s12 z-depth-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.5320954688855!2d-4.462429480852103!3d36.70583160064153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad103776103e5ebf!2sPalacio+de+Ferias+y+Congresos+de+M%C3%A1laga+-+Fycma!5e0!3m2!1ses!2ses!4v1499247622914" class="col s6" height="300" frameborder="0" style="border:0; margin-left: -22px" allowfullscreen></iframe>
                        <div class="col s12 m6">
                            <h5>Art Fair Malaga</h5>
                            <p>Art Fair Málaga '17 se presenta como la oportunidad para aquellos artistas autorepresentados que deseen hacer visible su obra en el mercado del arte nacional e internacional, así como para las galerías que busquen introducirse y consolidarse en la agenda ferial internacional, en un espacio que propone  derribar las barreras invisibles entre las galerías y los nuevos coleccionistas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab de Obras -->

    <div id="obras">
        <div class="col s12 m12" id="galeria">
            <div class="row">
                <br/>
                @foreach($obras as $obra)
                        <img class="materialboxed col m3 s12" style="margin-top: 10px"
                             src="{{url('img/TEST/' . last(explode('/', $obra)))}}" data-caption="">
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
        });

        $(document).ready(function () {
            $('.tooltipped').tooltip({delay: 50});
        });


        $(document).ready(function () {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });

        /*Form IMG*/


    </script>



@endsection

