@extends('layouts.main')


@section('content')
    <div id="caixa" class="row">
        @foreach($users as $user)
            <div class="col-md-12"> {{$user->name . " " . $user->surname}}</div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection