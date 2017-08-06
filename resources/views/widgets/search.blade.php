@foreach($users as $user)
    <div class="row">
        <div class="col s3">
            <img class="responsive-img"
                 src="{{url('/uploads/profile/' . $user->id . '/' . $user->avatar)}}">
        </div>
        <div class="col s3">
            <a href="{{url('/perfil/' . $user->id)}}" class=" black-text">
                <div class="col s12" style="padding: 10px">
                    <h4><strong>{{$user->name . " " . $user->surname}}</strong></h4>
                    @foreach($user->tags as $tag)
                        <div class="chip orange lighten-3"><a href="" class="black-text">{{$tag->type}}</a></div>
                    @endforeach
                </div>
            </a>
        </div>
    </div>
    <hr/>
@endforeach