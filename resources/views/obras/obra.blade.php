
    <div class="col s12 m6">
        <div class="card">
            <div class="card-image">
                <img class="responsive-img materialboxed" src="{{url("uploads/profile/". $user->id . "/obras/" .$obra->url)}}"/>
                <form class="formasdf">
                    {{csrf_field()}}
                    <input type="hidden" name="obraId" value="{{$obra->id}}">
                    <a data-position="right" data-delay="0" data-tooltip="Eliminar" class="btn-floating halfway-fab btn-large waves-effect waves-light red removeImage"><i class="material-icons tiny">remove</i></a>
                </form>
            </div>
            <div class="card-content">
                <span class="card-title">{{$obra->nombre}}</span>
                <p>{{$obra->descripccion}}</p>
            </div>
            <div class="card-action">
                <a style="font-weight: bold" class="black-text">A {{$obra->likes->count()}} les gusta esto</a>
            </div>
        </div>
    </div>




