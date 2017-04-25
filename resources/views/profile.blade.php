@extends('layouts.main')

@section('content')

    <div class="row" style="margin-top: 30px;">
        <div class="col s12 m5 z-depth-2" style="padding: 20px">
            <img class="responsive-img col s12 m10 offset-m1 center" src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg">
            <div class="col s12">
                <h3>{{$user->name . " " . $user->surname}} </h3>
                <p><strong>Tags:</strong> @foreach($user->tags as $tag) <div class="chip">{{$tag->type}}</div> @endforeach</p>
                <p><strong>Biografia:</strong> <div>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</div></p>
            </div>
        </div>
        <ul class="col s12 m6 offset-l1 collapsible " data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Contactar</div>
                <div class="collapsible-body">



                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Localizacion</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
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
        <div class="col s12 m6 offset-l1 center" style="margin-top: 5%;">
            <img height="300" style="margin: auto;" src="{{url('/img/logo1.png')}}">
        </div>
    </div>


@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });
    </script>
@endsection