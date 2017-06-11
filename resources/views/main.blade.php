@extends('layouts.main')


@section('content')
    <div id="caixa" class="row" style="height: 92vh; position: relative">
        <div class="col s12 center" style="margin-top: 100px">
            <h2 style="text-align: center;" class="hide-on-med-and-down">¿Estás buscando un artista?</h2>
            <h4 style="text-align: center;" class="hide-on-med-and-up">¿Estás buscando un artista?</h4>
            <br/>
            <form action="{{url('/search')}}" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control col s12 m10" placeholder="Buscar artista/galería" name="nombre" aria-describedby="sizing-addon1">
                <button class="btn orange darken-1">Buscar</button>
            </form>

        </div>



    </div>
    <hr/>
    <div class="row" id="queSomos">
        <div class="col s12">
            <h3>Que es Arspect?</h3>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript">
        $('a.scroll').click(function(e){
            e.preventDefault();
            $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
        });
    </script>
@endsection