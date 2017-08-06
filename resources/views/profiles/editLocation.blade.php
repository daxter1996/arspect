@extends('layouts.main')

@section('content')

    <div class="" style="min-height: 70vh">
        <br/>
        <div class="row">
            <form class="col s12 l6" method="POST" action="{{url('/addLocation')}}">
                <h5>Localización</h5>
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col s12">
                        <input id="eventDirection" type="text" name="eventDirection" class="validate">
                        <label for="eventDirection">Dirección Del Artista</label>
                    </div>
                </div>

                <input type="hidden" id="geoloc" name="geoloc">
                <input type="hidden" id="direccion" name="direccion">

                <input type="submit" value="Guardar" class="btn orange darken-1">
            </form>
            <div id="googleMap" style="height: 400px" class="col s12 l6"></div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5GDyaHa2HR9axKNuvzUTlLufWzKw7sMU"></script>
    <script>
        var lat = 39.974489161874125;
        var lng = 4.074554443359375;
        var myLatlng = new google.maps.LatLng(lat, lng);

        var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();

        function initialize() {
            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 3,
                center: myLatlng
            });

            marker = new google.maps.Marker({
                map: map
            });

            $('#eventDirection').on('keyup', function () {
                delay(function () {
                    var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + $('#eventDirection').val();
                    $.getJSON(url, function (data) {
                        var results = data.results[0];
                        var direccion = results.formatted_address;
                        var lat1 = results.geometry.location.lat;
                        var lng1 = results.geometry.location.lng;
                        var posicio = new google.maps.LatLng(lat1, lng1);

                        marker.setPosition(posicio);
                        map.setCenter(posicio);
                        map.setZoom(16);

                        var geoloc = lat1 + '/' + lng1;
                        $('#geoloc').val(geoloc);
                        $('#direccion').val(direccion);


                        console.log(lat1);
                    });
                }, 500);
            });


            /* google.maps.event.addListener(map, 'click', function (event) {
             marker.setPosition(event.latLng);
             lat = event.latLng.lat();
             lng = event.latLng.lng();
             document.getElementById('geoloc').setAttribute('value',lat + '/' + lng)
             });*/

            /*navigator.geolocation.getCurrentPosition(function (location) {
             lat = location.coords.latitude;
             lng = location.coords.longitude;
             document.getElementById('geoloc').setAttribute('value',lat + '/' + lng)
             var myLatlng1 = new google.maps.LatLng(lat, lng);
             marker.setPosition(myLatlng1);
             });*/
        }

        initialize();
    </script>

@endsection

