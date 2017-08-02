@extends('layouts.admin')


@section('content')

    <div class="content" style="min-height: 70vh">
        <h3 class="center" style="margin-top: 50px">Vista General</h3>
        <p>Visitas web</p>
        <p>Total Artistas: {{$totalArtistas}}</p>
        <p>Nº Obras subidas: {{count(\App\Obra::all())}}</p>
        <p>Nº Eventos: {{count(\App\Event::all())}}</p>
    </div>
    <br/>


@endsection

@section('scripts')
    <script type="text/javascript">
    </script>
@endsection