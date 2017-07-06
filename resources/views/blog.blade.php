@extends('layouts.main')


@section('content')

    <div class="content">
        <div class="row">
            <div class="col s12 l10 offset-l1">
                <h3 class="center" style="margin-top: 50px">Blog Arspect</h3>
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{url('/img/premiArspect.jpg')}}">
                            </div>
                            <div class="card-content">
                                <span class="card-title black-text">Premio StartupLabUAB</span>
                                <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año
                                    1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido
                                    usó una galería de textos y los mezcló de tal manera que logró hacer un libro de
                                    textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto
                                    de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue
                                    popularizado en los 60s con la creación de las hojas "Letraset", las cuales
                                    contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,
                                    como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
    </script>
@endsection