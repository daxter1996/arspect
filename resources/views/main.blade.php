@extends('layouts.main')


@section('content')
    <div id="caixa" class="row">
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