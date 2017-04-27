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
        <div class="col s12 m4">
            <h5 class="">Destacados</h5>
            @for($i=0;$i<3;$i++)

                    <div class="col s12 ">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img height="100" width="100" src="http://www.ikea.com/es/es/images/products/pjatteryd-cuadro__0455534_PE603586_S4.JPG">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p><strong>Nombre</strong></p>
                                    <p><strong>Tags</<strong></p>
                                </div>
                                <div class="card-action">
                                    <a href="#">Ver Perfil</a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endfor
        </div>
        <div class="col s12 m8">
            <h5>Resultados</h5>
            @foreach($users as $user)
                <div class="row">
                    <a href="{{url('/perfil/' . $user->id)}}"  class=" col s12 z-depth-1 black-text">
                        <div class="col s12" style="padding: 10px">
                            <p><strong>{{$user->name . " " . $user->surname}}</strong></p>
                            <strong>Tags</strong>
                            @foreach($user->tags as $tag)
                                <div class="chip">{{$tag->type}}</div>
                            @endforeach


                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slider();
        });
    </script>
@endsection