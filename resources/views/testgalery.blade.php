@extends('layouts.main')


@section('noContainer')

    <div class="col s12">
        <ul class="tabs orange darken-3">
            <li class="tab col s3 "><a class="white-text" href="#test1">Vista general</a></li>
            <li class="tab col s3"><a class="white-text " href="#test2">Eventos</a></li>
        </ul>
    </div>

@endsection



@section('content')

    <div class="row" style="margin-top: 30px;">
        <div id="test1" class="col s12">
            <div class="col s12 m6">
                <img src="https://www.dipujaen.es/export/sites/default/galerias/galeriaImagenes/diputacion/dipujaen/cultura-deportes/arte-naif/museo_arte_naif_x4x.jpg" class="materialboxed responsive-img">
                <div class="col s12">
                    <h5>Tags</h5>
                    <div class="chip">Figura</div>
                    <div class="chip">Impresionista</div>
                    <div class="chip">Contemporanea</div>
                </div>
                <div class="col s12">
                    <h5>Horario</h5>
                    <p>Blablabla</p>
                </div>
                <div class="col s12">
                    <h5>Informacion</h5>
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>Horarios</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">place</i>Localizacion</div>
                            <div class="collapsible-body">  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.7776367884426!2d4.652552516016148!3d51.48059577963073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c41c4ed2a6d579%3A0x251c503b97429b04!2sKlein-Zundert%2C+Pa%C3%ADses+Bajos!5e0!3m2!1ses!2ses!4v1493240024096"
                                                                    width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col s12 m6">
                <h3>Nombre de la galeria</h3>
                <h5>Sobre </h5>
                <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
            </div>

        </div>
        <div id="test2" class="col s12">
            <div class="row">
                <div class="col s12 z-depth-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.7776367884426!2d4.652552516016148!3d51.48059577963073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c41c4ed2a6d579%3A0x251c503b97429b04!2sKlein-Zundert%2C+Pa%C3%ADses+Bajos!5e0!3m2!1ses!2ses!4v1493240024096" height="300" class="col s6" frameborder="0" style="border:0; margin-left: -20px" allowfullscreen></iframe>
                    <div class="col s6">
                        <h5>Nom asdfasdfa</h5>
                        <p>Descripcion asdf asdfasdf asdfasdf asdfasdf asdfasdf asdfasdf asdfasdf asdfasdf </p>
                    </div>
                    <a class="btn orange darken-2" href="">Asistir</a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 z-depth-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.7776367884426!2d4.652552516016148!3d51.48059577963073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c41c4ed2a6d579%3A0x251c503b97429b04!2sKlein-Zundert%2C+Pa%C3%ADses+Bajos!5e0!3m2!1ses!2ses!4v1493240024096" height="300" class="col s6" frameborder="0" style="border:0; margin-left: -20px" allowfullscreen></iframe>
                    <div class="col s6">
                        <h5>Nom asdfasdfa</h5>
                        <p>Descripcion asdf asdfasdf asdfasdf asdfasdf asdfasdf asdfasdf asdfasdf asdfasdf </p>
                    </div>
                    <a class="btn orange darken-2" href="">Asistir</a>
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