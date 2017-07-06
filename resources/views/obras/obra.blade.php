<div class="col s12 l3 m6">
    <form class="formasdf">
        {{csrf_field()}}
        <input type="hidden" name="obraId" value="{{$obra->id}}">
        <a data-position="right" data-delay="0" data-tooltip="Eliminar" style="margin-bottom: -70px; margin-left: 10px" class="tooltipped btn-floating btn-small waves-effect waves-light orange darken-2 removeImage"><i class="small material-icons">remove</i></a>
    </form>
    <img class="responsive-img materialboxed" src="{{url("uploads/profile/". $user->id . "/obras/" .$obra->url)}}"/>
</div>