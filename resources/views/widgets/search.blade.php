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