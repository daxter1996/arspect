@extends('layouts.main')


@section('content')
    <div id="caixa" class="row">
        @if(!Auth::guest())
            <div class="col-sm-3"><strong>Nom: </strong> {{Auth::user()->name . " " . Auth::user()->surname}}</div>
        @endif
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection