@extends('layouts.main')

@section('content')

    <div class="row" style="margin-top: 10px">
        <div class="col s12 ">
            <div class="input-field col s12">
                <i class="material-icons prefix">search</i>
                <input id="buscarBtn" type="text" class="validate">
                <label for="buscarBtn">Artista/Galeria</label>
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
            <div id="results">
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
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slider();
        });
        
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#buscarBtn').keyup(function () {
                $.ajax({
                    url: "{{url('/buscar')}}",
                    type: "POST",
                    data: JSON.stringify({ name : $(this).val() }),
                    contentType: "application/json; charset=utf-8",
                    cache: false,
                    processData: false,
                    success: function (data) {
                        $("#results").empty();
                        $("#results").html(data);
                    }, error: function () {
                    }
                });
            });
        });
    </script>
@endsection