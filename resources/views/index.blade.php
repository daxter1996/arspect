@extends('layouts.main')

@section('noContainer')

    <div class="row" style=" min-height: 70vh">

        <!--<div class="col m2 hide-on-small-only grey lighten-3">
            <ul>

            </ul>
        </div>-->

        <div class="col s12" style="min-height: 100%">
            <div class="input-field col s12">
                <i class="material-icons prefix">search</i>
                <input id="buscarBtn" type="text" class="validate">
                <label for="buscarBtn">Artista</label>
            </div>
            <div class="row"></div>
            <br/>
            <div id="results">
                @if(count($users) > 0)
                    @foreach($users as $user)
                        <div class="row">
                            <div class="col s3">
                                <img class="responsive-img"
                                     src="{{url('/uploads/profile/' . $user->id . '/' . $user->avatar)}}">
                            </div>
                            <div class="col s9">
                                <a href="{{url('/perfil/' . $user->id)}}" class=" black-text">
                                    <div class="col s12" style="padding: 10px">
                                        <h4><strong>{{$user->name . " " . $user->surname}}</strong></h4>
                                        @foreach($user->tags as $tag)
                                            <div class="chip orange lighten-3"><a href=""
                                                                                  class="black-text">{{$tag->type}}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </a>
                            </div>
                        </div>
                        <hr/>
                    @endforeach
                @else
                    <h5 class="center">No hay resultados :(</h5>
                @endif
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
                if ($(this).val() == '') {
                    $("#results").empty();
                    $("#results").html('<h5 class="center">No hay resultados :(</h5>');
                } else {
                    $.ajax({
                        url: "{{url('/buscar')}}",
                        type: "POST",
                        data: JSON.stringify({name: $(this).val()}),
                        contentType: "application/json; charset=utf-8",
                        cache: false,
                        processData: false,
                        success: function (data) {
                            console.log(data);
                            if (data == "") {
                                $("#results").empty();
                                $("#results").html('<h5 class="center">No hay resultados :(</h5>');
                            } else {
                                $("#results").empty();
                                $("#results").html(data);
                            }
                        }, error: function () {
                        }
                    });
                }
            });
        });
    </script>
@endsection