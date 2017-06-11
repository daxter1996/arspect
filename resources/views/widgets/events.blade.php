@foreach($events as $event)
    <div class="row">
        <div class="col s12 z-depth-2">
            <iframe src="https://maps.google.com/maps?q={{explode('/',$event->localizacion)[0]}},{{explode('/',$event->localizacion)[1]}}&hl=es;z=14&amp;output=embed"
                    height="300" class="col s12 m6" frameborder="0" style="border:0; margin-left: -20px"
                    allowfullscreen></iframe>
            <div class="col s12 m6">
                <h5>{{$event->nombre}}</h5>
                <p>{{$event->descripccion}}</p>
            </div>
            <form>
                <input type="hidden" name="eventId" value="{{$event->id}}">
                <a class="btn red darken-1 buttonDeleteEvent">Borrar<i class="left material-icons">delete_forever</i></a>
            </form>

        </div>
    </div>
@endforeach