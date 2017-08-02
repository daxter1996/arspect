@extends('layouts.main')


@section('noContainer')
    <div style="background-image: url({{url('img/landing/fonsD.jpg')}}); background-size: cover; margin-bottom: -20px !important;">
        <div id="caixa" class="row container">
            <div class="col s12 center z-depth-3" style="margin-top: 20vh; background-color: rgba(0,0,0,0.3); border-radius: 5px; margin-bottom: 30px">
                <h2 style="text-align: center;" class="hide-on-small-only white-text">¿Estás buscando un artista?</h2>
                <h4 style="text-align: center;" class="hide-on-med-and-up white-text">¿Estás buscando un artista?</h4>
                <br/>
                <form action="{{url('/search')}}" method="get" style="padding: 10px;  color: white">
                    {{csrf_field()}}
                    <div class="input-field col s12 l10">
                        <input id="artista" type="text" class="form-control " placeholder="Nombre del artista ej: Dali" name="nombre" aria-describedby="sizing-addon1">
                    </div>
                    <div class="input-field col s12 l2">
                        <input type="submit" class="btn orange darken-1" value="buscar">
                    </div>
                    <div class="row">

                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
        $('a.scroll').click(function(e){
            e.preventDefault();
            $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
        });
        $(document).ready(function () {
            $('#caixa').css('min-height', ($(window).height() - $('nav').height()) + 'px');
        });

        $(window).resize(function () {
            $('#caixa').css('min-height', ($(window).height() - $('nav').height()) + 'px');
        });


        $(document).ready(function() {
            $('select').material_select();
        });

    </script>
@endsection