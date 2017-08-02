@extends('layouts.main')


@section('noContainer')
    <div style="background-image: url({{url('img/landing/fonsD.jpg')}}); background-size: cover; margin-bottom: -20px !important;">
        <div id="caixa" class="row container">
            <div class="col s12 center z-depth-3" style="margin-top: 10vh; background-color: rgba(0,0,0,0.3); border-radius: 5px; margin-bottom: 30px">
                <h2 style="text-align: center;" class="hide-on-med-and-down white-text">¿Estás buscando un artista?</h2>
                <h4 style="text-align: center;" class="hide-on-med-and-up white-text">¿Estás buscando un artista?</h4>
                <br/>
                <form action="{{url('/search')}}" method="get" style="padding: 10px;  color: white">
                    {{csrf_field()}}
                    <input id="artista" type="text" class="form-control col s12 m10" placeholder="Nombre del artista ej: Dali" name="nombre" aria-describedby="sizing-addon1">
                    <input type="submit" class="btn orange darken-1" value="buscar">
                    <div class="row">
                        <div class="input-field col s12 m4"> <!-- Artistas -->
                            <h5 class="left">Artistas <i class="material-icons right">arrow_drop_up</i></h5>
                            <div id="artistas">
                                <div class="row">
                                    <div class="col s12">
                                        <p style="font-weight: bold">Provincia</p>
                                        <select id="1">
                                            <option value="1">Baleares</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12">
                                        <p style="font-weight: bold">Estilo</p>
                                        <select id="1">
                                            <option value="1">Abstracto</option>
                                            <option value="1">Figurativo</option>
                                            <option value="1">Retro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-field col s12 m4"> <!-- Galerias -->
                            <h5 class="left">Galerías <i class="material-icons right">arrow_drop_down</i></h5>
                            <div id="artistas" style="display: none">
                                <div class="row">
                                    <div class="col s12">
                                        <p style="font-weight: bold">Localización</p>
                                        <select id="1">
                                            <option value="1">Baleares</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12">
                                        <p style="font-weight: bold">Especialidad</p>
                                        <select id="1">
                                            <option value="1">Abstracto</option>
                                            <option value="1">Figurativo</option>
                                            <option value="1">Retro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-field col s12 m4"> <!-- Eventos -->
                            <h5 class="left">Eventos <i class="material-icons right">arrow_drop_down</i></h5>
                            <div id="artistas" style="display: none;">
                                <div class="row">
                                    <div class="col s12">
                                        <p style="font-weight: bold">Localización</p>
                                        <select id="1">
                                            <option data-icon="{{url('/img/place.png')}}" value="1">Cerca de ti </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            $('#caixa').css('min-height', $(window).height() + 'px');
        });

        $(window).resize(function () {
            $('#caixa').css('min-height', $(window).height() + 'px');
        });


        $(document).ready(function() {
            $('select').material_select();
        });

    </script>
@endsection