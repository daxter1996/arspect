@extends('layouts.main')

@section('content')
    <div class="row" style="margin-top: 10px">
        <div class="col s12 ">
            <div class="input-field col s12">
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Artista/Galeria</label>
            </div>
        </div>
        <div class="col s12">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col s12 z-depth-2" style="margin-top: 30px;">
            <h5 class="center">Destacados</h5>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg">
                    </div>
                    <div class="card-content">
                        <h5>Nombre</h5>
                        <p>Estilo:</p>
                        <p>Ciudad:</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg">
                    </div>
                    <div class="card-content">
                        <h5>Nombre</h5>
                        <p>Estilo:</p>
                        <p>Ciudad:</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg">
                    </div>
                    <div class="card-content">
                        <h5>Nombre</h5>
                        <p>Estilo:</p>
                        <p>Ciudad:</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slider();
        });
    </script>
@endsection