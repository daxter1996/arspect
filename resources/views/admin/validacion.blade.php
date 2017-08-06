@extends('layouts.admin')


@section('content')

    <div class="" style="min-height: 70vh">
        <h5>Perfiles a validar</h5>
        @foreach($usersNoActive as $user)
            <div class="row z-depth-2">
                <div class='col s6'>
                    <h4>{{$user->name}}</h4>
                    @if(count($user->extraInfo) == 0)
                        <h5>No te informacio personal</h5>

                        @else
                        <h5>{{$user->extraInfo->dni}}</h5>
                    @endif
                </div>
                <div class="col s6">
                    <form class="formObra">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <a style="margin-top: 20px" data-position="right" data-delay="0" class="btn-floating  btn-large waves-effect waves-light right green validar"><i class="material-icons tiny">thumb_up</i></a>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <br/>


@endsection

@section('scripts')
    <script type="text/javascript">
        $('.validar').click(function () {
            var form = $(this).closest('.formObra')[0];
            var button = $(this);
            var formData = new FormData(form);

            $.ajax({
                url: "{{url('/user/valid')}}",
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    $(button).closest('.row').hide('slow');
                    Materialize.toast(data, 5000);
                }, error: function (data) {
                    var error = data.responseJSON;
                    console.log(error);
                    $.each(error, function (key, value) {
                        Materialize.toast(value[0], 4000);
                    });
                }
            });
        });

    </script>
@endsection