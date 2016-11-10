@extends('app')

@section('content')
    <div class="text-center"><h1>{{ $puesto->nombre }}</h1></div>
    <hr/>
    <div class="col-sm-12">
        <a href="{{url('/')}}">
            <button class="btn btn-default">Regresar</button>
        </a>
    </div>
    <div class="row"><br></div>
    <div class="col-sm-4">
        <div id="map"></div>
    </div>
    <div class="col-sm-8">
        <table class="table">
            <tr>
                <th>
                    <h3>Productos</h3>
                </th>
                <th class="text-center"><h3>Ver</h3></th>
            </tr>
            @foreach($platillos as $platillo)
                <tr>
                    <td>{{$platillo->nombre}}</td>
                    <td class="text-center"><a href="{{ url('/platillos',$platillo->id)}}">
                            <button class="btn btn-primary">Ir</button>
                        </a></td>
                </tr>
            @endforeach
        </table>
    </div>

    <style>
        #map {
            width: 100%;
            height: 400px;
            background-color: grey;
        }
    </style>

    <script>
        function initMap() {
            var usac = {lat: 14.585456, lng: -90.552411};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: usac
            });
            // var marker = new google.maps.Marker({
            //   position: usac,
            //   map: map
            // });

            var {{ str_replace(" ","",$puesto->nombre) }} =
            new google.maps.Marker({
                position: {lat:{{ $puesto->x }}, lng: {{$puesto->y}}},
                map: map,
                title: '{{$puesto->nombre}}'
            });

        }
    </script>
    <script async defer
            src=" <?= 'https://maps.googleapis.com/maps/api/js?key=' . env('GAPIKEY', '') . '&callback=initMap' ?>">
    </script>
@stop
