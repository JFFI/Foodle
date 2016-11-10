@extends('app')

@section('content')
    <h1>{{ $puesto->nombre }}</h1>
    <hr/>
    <div class="col-sm-12">
        <a href="{{url('/')}}">
            <button class="btn btn-default">Regresar</button>
        </a>
    </div>
    <br/>
    <br>
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Productos:</h2>
            </div>
            <div class="panel-body">
                <ul>
                    @foreach($platillos as $platillo)
                        <li><h4>{{$platillo->nombre}}</h4><a href="{{ url('/platillos',$platillo->id)}}">
                                <button class="btn btn-primary">Ir</button>
                            </a></li>
                    @endforeach
                </ul>
            </div>
            <div class="panel-footer">

                <div id="map" style="width:100%;height:500px"></div>

                <script>
                    function myMap() {
                        var mapCanvas = document.getElementById("map");
                        var myCenter = new google.maps.LatLng({{$puesto->x}},{{$puesto->y}});
                        var mapOptions = {
                            center: new google.maps.LatLng({{$puesto->x}},{{$puesto->y}}),
                            zoom: 17
                        }
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                        var marker = new google.maps.Marker({
                            position: myCenter,
                            animation: google.maps.Animation.BOUNCE
                        });
                        marker.setMap(map);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbb8X7NzdhNxtoZB1bQLCgXKMk1abtNOM&callback=myMap" key="AIzaSyBbb8X7NzdhNxtoZB1bQLCgXKMk1abtNOM"></script>

            </div>
        </div>
@stop
