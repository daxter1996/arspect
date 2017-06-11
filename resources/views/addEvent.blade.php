@extends('layouts.main')

@section('content')

    <div class="">
            <h4 class="center">Añade un evento</h4>
            <div class="row">
                <form class="col s12 m6" method="POST" action="{{url('/addEvent')}}">
                    <h5>Informacion del evento</h5>
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="eventName" type="text" name="eventName" class="validate">
                            <label for="eventName">Nombre Del Evento</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="eventDescription">Descripcion del Evento</label>
                            <textarea id="eventDescription" name="eventDescription" class="materialize-textarea"></textarea>
                        </div>
                    </div>
                    <input type="hidden" id="geoloc" name="geoloc">
                    <input type="submit" value="Añadir Evento" class="btn orange darken-1">
                </form>
                <h5>Ubicacion del evento</h5>
                <div id="googleMap" style="height: 300px" class="col s12 m6"></div>
            </div>
    </div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

@endsection

@section('scripts')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5GDyaHa2HR9axKNuvzUTlLufWzKw7sMU"></script>
    <script>
        var lat = 39.974489161874125;
        var lng = 4.074554443359375;
        var myLatlng = new google.maps.LatLng(lat, lng);

        function initialize() {
            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 10,
                center: myLatlng
            });

            marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });

            google.maps.event.addListener(map, 'click', function (event) {
                marker.setPosition(event.latLng);
                lat = event.latLng.lat();
                lng = event.latLng.lng();
                document.getElementById('geoloc').setAttribute('value',lat + '/' + lng)
            });

            navigator.geolocation.getCurrentPosition(function (location) {
                lat = location.coords.latitude;
                lng = location.coords.longitude;
                document.getElementById('geoloc').setAttribute('value',lat + '/' + lng)
                var myLatlng1 = new google.maps.LatLng(lat, lng);
                marker.setPosition(myLatlng1);
            });
        }

        initialize();
    </script>


@endsection