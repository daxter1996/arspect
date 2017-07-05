@extends('layouts.main')


@section('noContainer')
    <div style="background-image: url({{url('img/landing/fonsD.jpg')}}); background-size: cover; margin-bottom: -20px !important;">
        <div id="caixa" class="row container">
            <div class="col s12 center z-depth-3" style="margin-top: 25vh; background-color: rgba(0,0,0,0.3); border-radius: 5px">
                <h2 style="text-align: center;" class="hide-on-med-and-down white-text">¿Estás buscando un artista?</h2>
                <h4 style="text-align: center;" class="hide-on-med-and-up white-text">¿Estás buscando un artista?</h4>
                <br/>
                <form action="{{url('/search')}}" method="post" style="padding: 10px;  color: white">
                    {{csrf_field()}}
                    <input id="artista" type="text" class="form-control col s12 m10" placeholder="Nombre del artista ej: Dali" name="nombre" aria-describedby="sizing-addon1">
                    <button class="btn orange darken-1">Buscar</button>
                </form>
            </div>
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
        $(document).ready(function () {
            $('#caixa').css('min-height', $(window).height() + 'px');
        });

        $(window).resize(function () {
            $('#caixa').css('min-height', $(window).height() + 'px');
        });
    </script>
@endsection