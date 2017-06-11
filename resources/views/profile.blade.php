@extends('layouts.main')

@section('content')

    <div class="row" style="margin-top: 30px;">
        <div class="col s12 m5 z-depth-2" style="padding: 20px">
            <!-- Foto Perfil -->
            @if(count(Storage::files('public/profile/'.$user->id)) > 0)
                <img src="{{url('../storage/app/'. Storage::files('/public/profile/'. $user->id)[0])}}" alt="Avatar" class="over-image responsive-img" style="width:100%">
            @else
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="Avatar" class="over-image responsive-img" style="width:100%">
            @endif
            <div class="col s12">
                <h3>{{$user->name . " " . $user->surname}} </h3>
                <p><strong>Tags</strong> @foreach($user->tags as $tag) <div class="chip">{{$tag->type}}</div> @endforeach</p>
                <p><strong>Biografia:</strong> <div>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</div></p>
            </div>
        </div>
        <ul class="col s12 m6 offset-l1 collapsible " data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Contactar</div>
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
                <div class="collapsible-header"><i class="material-icons">place</i>Localizacion</div>
                <div class="collapsible-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3056.9566995328532!2d3.83989131568699!3d39.98707297941734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMznCsDU5JzEzLjUiTiAzwrA1MCczMS41IkU!5e0!3m2!1ses!2ses!4v1493191362427" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Eventos</div>
                <div class="collapsible-body">
                    @if($user->events->count() > 0)
                    @foreach($user->events as $event)
                        <a href="{{url("/events")}}"  class="col s12 z-depth-1 black-text" style="padding: 10px">
                            <strong> {{$event->nombre}} </strong>
                            <p> <strong>Descripccion: </strong> {{$event->descripccion}} </p>
                            <p> <strong>Localizacion: </strong> {{$event->localizacion}} </p>
                        </a>
                        <hr/>
                    @endforeach
                    @else
                        <h5>No hay eventos :(</h5>
                    @endif
                </div>
            </li>
        </ul>
        <div class="col s12 m6 offset-l1" style="margin-top: 5%;">
            <a class="btn orange lighten-2 grey-text-text col s12" href="#galeria">Galeria</a>
        </div>
        <div class="col s12 m6 offset-l1 center" style="margin-top: 5%;">
            @if($user->obras->count() > 0)
                <img class="z-depth-5 materialboxed responsive-img" height="300" style="margin: auto;" src='{{url('../storage/app/public/profile/'. $user->id . '/obras/' . DB::table('obras')->where('user_id', $user->id)->orderBy('id', 'desc')->first()->url)}}'>
            @endif
        </div>
        <div class="col s12 m12 center" style="margin-top: 5%;" id="galeria">
            <h4>Galeria</h4>
            @if($user->obras->count() > 0)
                @foreach($user->obras as $obra)
                    <img class="col m3 s12 materialboxed" src="{{url("../storage/app/public/profile/". $user->id . "/obras/" .$obra->url)}}"/>
                @endforeach
            @endif
        </div>
    </div>


@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });
        $(document).ready(function(){
            $('.materialboxed').materialbox();
        });

        // Add smooth scrolling to all links
        $(document).ready(function(){
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });
        });


    </script>
@endsection