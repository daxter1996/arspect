@extends('layouts.admin')


@section('content')

    <div class="container" style="min-height: 70vh">
        <h5>Perfiles a validar</h5>
        @foreach($usersNoActive as $user)
            <div class="row">
                <div class='col s12 z-depth-2'>
                    <h4>{{$user->name}}</h4>
                    @if(count($user->extraInfo) == 0)
                        <h5>No te informacio personal</h5>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <br/>


@endsection

@section('scripts')
    <script type="text/javascript">
    </script>
@endsection