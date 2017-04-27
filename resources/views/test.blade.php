@extends('layouts.main')

@section('content')

    <div class="row" style="margin-top: 30px;">
        <div class="col s12 m5 z-depth-2" style="padding: 20px">
            <img class="responsive-img col s12 m10 offset-m1 center" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Vincent_van_Gogh_-_Self-Portrait_-_Google_Art_Project.jpg/220px-Vincent_van_Gogh_-_Self-Portrait_-_Google_Art_Project.jpg">
            <div class="col s12">
                <h3> Vincent van Gogh </h3>
                <p><strong>Tags:</strong>
                <div class="chip">Paisaje</div>
                <div class="chip">Impresionista</div>
                <div class="chip">S.XIX</div>
                <div class="chip">Autorretrato</div>
                </p>
                <p><strong>Biografía:</strong>
                <div>Nació el 30 de marzo de 1853. Hijo de un austero y humilde pastor protestante neerlandés llamado
                    Theodorus y de su mujer Anna Cornelia, Vincent recibió el mismo nombre que le habían puesto a un
                    hermano que nació muerto exactamente un año antes. El 1 de mayo de 1857 nació su hermano Theo y
                    ambos tuvieron cuatro hermanos más: Cornelius Vincent, Elisabetha Huberta, Anna Cornelia y
                    Wilhelmina Jacoba.

                    Durante la infancia acudió a la escuela de manera discontinua e irregular, pues sus padres le
                    enviaron a diferentes internados. El primero de ellos en Zevenbergen en 1864, donde estudió francés
                    y alemán.6 Dos años después se matriculó en el Instituto Hannik (Tilburg) y permaneció allí hasta
                    que dejó los estudios de manera definitiva a los 15 años.7 Allí nació su afición por la pintura,
                    aunque durante el resto de su vida se enorgulleció de ser autodidacta.
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.7776367884426!2d4.652552516016148!3d51.48059577963073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c41c4ed2a6d579%3A0x251c503b97429b04!2sKlein-Zundert%2C+Pa%C3%ADses+Bajos!5e0!3m2!1ses!2ses!4v1493240024096"
                            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">event</i>Eventos</div>
                <div class="collapsible-body">
                    <div class="row">
                        <a href="{{url("/events")}}" class="col s12 z-depth-1 black-text grey lighten-3" style="padding: 10px; border-radius: 10px">
                            <strong> Exposición La Casa Amarilla </strong>
                            <p><strong>Descripción: </strong> Muestra de las ultimas obras del Pintor Vincent van Gogh.
                            </p>
                            <p><strong>Localización: </strong> Zundert, Paises Bajos</p>
                        </a>
                    </div>
                    <div class="row">
                        <a href="{{url("/events")}}" class="col s12 z-depth-1 black-text grey lighten-3" style="padding: 10px; border-radius: 10px">
                            <strong> Feria Internacional de Arte Emergente </strong>
                            <p><strong>Descripción: </strong> Descubra las nuevas promesas en el mundo del arte. </p>
                            <p><strong>Localización: </strong> Barcelona </p>
                        </a>
                    </div>
                    <div class="row">
                        <a href="{{url("/events")}}" class="col s12 z-depth-1 black-text grey lighten-3" style="padding: 10px; border-radius: 10px">
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
        <div class="col s12 m6 offset-l1 center" style="margin-top: 5%;">

            <br/>
            <img class="z-depth-5 materialboxed responsive-img" height="300" style="margin: auto;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/350px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg">
        </div>
        <div class="col s12 m12 center" style="margin-top: 5%;" id="galeria">
            <h4>Galería</h4>
                <img class="materialboxed col m6 s12" style="margin-top: 10px" src="https://lh3.ggpht.com/qE0-JHabD8JID49nnvZGmCTdic_PvjBxpa-cFMpFswtaPV9j8jbOfBi7FmpL8THlXtXz1fyTZ0P1b8JORNwKvtwSEo-VPEymqsJ748BN=s600" data-caption="">
                <img class="materialboxed col m6 s12" style="margin-top: 10px" src="http://www.artic.edu/sites/default/files/styles/slideshow_scale/public/exh_vangogh_bedroom_main_480.jpg?itok=5RkLPzFm" data-caption="La Casa Amarilla">
                <img class="materialboxed col m6 s12" style="margin-top: 10px" src="http://www.arlestourisme.com/assets/components/phpthumbof/cache/van_gogh_cafe.b349b397fbeeb31f34f671c94d95eb3f348.jpg" data-caption="">
                <img class="materialboxed col m6 s12" style="margin-top: 10px" src="http://www.vangoghgallery.com/catalog/image/0454/Naturaleza-muerta:-Vaso-con-quince-girasoles.jpg" data-caption="">
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