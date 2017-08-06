<div class="col s12 m9 offset-l1">
<div class="card">
        <div class="card-image">
            <img class="responsive-img materialboxed"
                 src="{{url("uploads/profile/". $user->id . "/obras/" .$obra->url)}}"/>
            <form class="formObra">
                {{csrf_field()}}
                <input type="hidden" name="obraId" value="{{$obra->id}}">
                <!--@if(Auth::user())
                    @if($obra->likes->where('user_id', Auth::user()->id)->count() == 0)
                        <a data-position="right" data-delay="0" data-tooltip="Like"
                           class="btn-floating halfway-fab btn-large waves-effect waves-light green likeObra"><i
                                    class="material-icons tiny">thumb_up</i></a>
                    @else
                        <a data-position="right" data-delay="0" data-tooltip="Like"
                           class="btn-floating halfway-fab btn-large waves-effect waves-light red dislikeObra"><i
                                    class="material-icons tiny">thumb_down</i></a>
                    @endif
                @endif
                    -->
            </form>
        </div>
        <div class="card-content">
            <span class="card-title">{{$obra->nombre}}</span>
            <p>{{$obra->descripccion}}</p>
        </div>
        <div class="card-action">
            <!--<a style="font-weight: bold" class="black-text">A <span class="numLikes">{{$obra->likes->count()}}</span> les gusta esto.</a>-->
        </div>
    </div>
</div>


