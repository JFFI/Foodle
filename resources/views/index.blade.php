@extends('app')

@section('content')
<div  class="jumbotron text-center">
<h1>Foodle</h1>
</div>
<hr/>
  <table class="table">
      <tr>
        <th><h3>Puestos de Comida en la USAC</h3></th>
        <th class="text-center"><h3>Visitar</h3></th>
      </tr>
        @foreach($puestos as $puesto)
        <tr>
          <td>{{ $puesto->nombre }}</td>
          <td class="text-center"><a href="{{ url('/puestos',$puesto->id)}}"><button class="btn btn-primary">Ir</button></a></td>
        </tr>
        @endforeach

    </table>


<!-- <div class="col-sm-3">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3>Usuario</h3>
    </div>
    <div class="panel-body text-center">
      <a href="{{url('/puestos/crear')}}"><button class="btn-default btn">Nuevo</button></a>
    </div>
  </div>
</div> -->
@stop
