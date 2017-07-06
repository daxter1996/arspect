<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
        <iframe src="https://maps.google.com/maps?q={{explode('/',$event->localizacion)[0]}},{{explode('/',$event->localizacion)[1]}}&hl=es;z=14&amp;output=embed"
                height="300"  frameborder="0" style="border:0; width: 100%"
                allowfullscreen></iframe>
    </div>
    <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">{{$event->nombre}}<i class="material-icons right">more_vert</i></span>
        <p><a href="#">{{$event->direccion}}</a></p>
    </div>
    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">{{$event->nombre}}<i class="material-icons right">close</i></span>
        <p>{{$event->descripccion}}</p>
        <form>
            {{csrf_field()}}
            <input type="hidden" name="eventId" value="{{$event->id}}">
            <a class="btn red darken-1 buttonDeleteEvent">Borrar<i class="left material-icons">delete_forever</i></a>
        </form>
    </div>
</div>
